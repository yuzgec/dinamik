<?php

namespace App\Http\Controllers;


use App\Http\Requests\OfferRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Author;
use App\Models\Form;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Publisher;
use App\Models\Search;
use App\Models\ShopCart;
use App\Models\Team;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class DashboardController extends Controller
{
    public function index(){

        $Search = Search::select('key')->whereBetween('created_at', [Carbon::yesterday(),Carbon::today()])->paginate(10);

        return view('backend.index', compact('Search'));
    }

    public function formlar(){
        $All = Form::orderBy('created_at','desc')->get();
        return view('backend.form.index', compact('All'));
    }

    public function formDelete($id){

        $Delete = Form::findOrFail($id);
        $Delete->delete();

        alert()->success('Başarıyla Silindi','Form mesajı başarıyla Silindi');
        return redirect()->route('form');
    }


    public function teklifler(){

        if (request()->filled('q')){
            $All = Offer::where('company_name', 'like', '%'. request('q'). '%')
                ->orWhere('company_officer', 'like', '%'. request('q'). '%')
                ->orWhere('company_phone', 'like', '%'. request('q'). '%')
                ->orWhere('company_email', 'like', '%'. request('q'). '%')
                ->paginate(30);
        }else{
            $All = Offer::paginate(30);;
        }

        return view('backend.offer.index', compact('All'));
    }

    public function teklifolustur(){
        return view('backend.offer.create');
    }


    public function teklifkaydet(OfferRequest $request){

        $data = $request->all();
        $New = new Offer;
        $New->company_name = $request->company_name;
        $New->company_officer = $request->company_officer;
        $New->company_phone = $request->company_phone;
        $New->company_email = $request->company_email;
        $New->content = mb_convert_encoding($request->desc, 'HTML-ENTITIES', 'UTF-8');
        $New->user_id = auth()->user()->id;
        $New->save();

        $Detail = Offer::where('id', $New->id)->first();

        $pdf = Pdf::loadView('backend.offer.pdf', ['Detail' => $Detail])
            ->setOption(['dpi' => 96, 'defaultFont' => 'DejaVu Sans', 'encoding' => 'utf8', 'isFontSubsettingEnabled' => true])
            ->setPaper('a4', 'portrait')
            ->save('offer/'.$request->company_name.' - '.$Detail->id.' Fiyat Teklifi.pdf');

        $Files = Offer::where('id', $New->id)->update(['file' => 'offer/'.$request->company_name.' - '.$Detail->id.' Fiyat Teklifi.pdf']);

        alert()->success('Başarıyla Oluşturuldu','Teklif Başarıyla Oluşturuldu');
        return redirect()->route('teklifler');

        //return $pdf->download($Detail->company_name.' Fiyat Teklifi.pdf')->header('Content-Type','application/pdf');;

    }

    public function teklifduzenle(Request $request,$id){

        $Edit = Offer::where('id',$id)->first();
        return view('backend.offer.edit', compact('Edit'));
    }

    public function teklifduzenlepost(OfferRequest $request,$id){

        $Update = Offer::where('id',$id)->first();

        $Update->company_name = $request->company_name;
        $Update->company_officer = $request->company_officer;
        $Update->company_phone = $request->company_phone;
        $Update->company_email = $request->company_email;
        $Update->content = mb_convert_encoding($request->desc, 'HTML-ENTITIES', 'UTF-8');
        $Update->save();

        $Detail = Offer::where('id', $Update->id)->first();

        $pdf = Pdf::loadView('backend.offer.pdf', ['Detail' => $Detail])
            ->setOption(['dpi' => 96, 'defaultFont' => 'DejaVu Sans', 'encoding' => 'utf8', 'isFontSubsettingEnabled' => true])
            ->setPaper('a4', 'portrait')
            ->save('offer/'.$request->company_name.' - '.$Detail->id.' Fiyat Teklifi.pdf');

        $Files = Offer::where('id', $Update->id)->update(['file' => 'offer/'.$request->company_name.' - '.$Detail->id.' Fiyat Teklifi.pdf']);


        $SendMail = Offer::where('id',$id)->update(['send_email' => 0]);

        alert()->success('Başarıyla Güncellendi','Teklif Başarıyla Güncellendi');
        return redirect()->route('teklifler');

        //return $pdf->download($Detail->company_name.' Fiyat Teklifi.pdf')->header('Content-Type','application/pdf');;

    }

    public function emailGonder($id){


        DB::transaction(function() use ($id){

            $Email = Offer::where('id', $id)->first();

            Mail::send('mail.form', compact('Email'), function ($message) use ($Email) {
                $message->to($Email->company_email)
                    ->subject('Syn. ' . $Email->company_officer . ' ' . 'Dinamik SMS Fiyat Teklifi')
                    ->attach(url($Email->file));
            });

            $Update = Offer::where('id',$id)->update(['send_email' => 1]);

        });

        alert()->success('Teklif Gönderildi','Teklif Başarıyla Gönderildi');
        return redirect()->route('teklifler');
    }

    public function smsGonder(){



    }


}
