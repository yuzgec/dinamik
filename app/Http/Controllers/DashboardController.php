<?php

namespace App\Http\Controllers;


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
        $All = Offer::all();
        return view('backend.offer.index', compact('All'));
    }

    public function teklifolustur(){
        return view('backend.offer.create');
    }


    public function teklifkaydet(Request $request){

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
            ->save('offer/'.$New->id.'.pdf');


        alert()->success('Başarıyla Oluşturuldu','Teklif Başarıyla Oluşturuldu');
        return redirect()->route('teklifler');

        //return $pdf->download($Detail->company_name.' Fiyat Teklifi.pdf')->header('Content-Type','application/pdf');;

    }

    public function teklifduzenle(Request $request,$id){

        $Edit = Offer::where('id',$id)->first();
        return view('backend.offer.edit', compact('Edit'));
    }


    public function teklifduzenlepost(Request $request,$id){

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
            ->save('offer/'.$Update->id.'.pdf');

        alert()->success('Başarıyla Oluşturuldu','Teklif Başarıyla Oluşturuldu');
        return redirect()->route('teklifler');

        //return $pdf->download($Detail->company_name.' Fiyat Teklifi.pdf')->header('Content-Type','application/pdf');;

    }


    public function smsGonder(){

    }

    public function emailGonder(){

    }

}
