<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Models\OfferTheme;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class OfferController extends Controller
{
    public function teklifler(){

        if (request()->filled('q') || request()->filled('filtre') || request()->filled('liste')){
            $All = Offer::where('company_name', 'like', '%'. request('q'). '%')
                ->orWhere('company_officer', 'like', '%'. request('q'). '%')
                ->orWhere('company_phone', 'like', '%'. request('q'). '%')
                ->orWhere('company_email', 'like', '%'. request('q'). '%')
                ->where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate((request('liste')  ? request('liste') : 30));
        }elseif(auth()->user()->is_admin == 2){
            $All = Offer::with('getUser')->where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate(30);
        }else{
            $All = Offer::orderBy('created_at', 'desc')
                ->with('getUser')
                ->paginate(30);
        }

        return view('backend.offer.index', compact('All'));
    }

    public function teklifolustur(){
        $Sablon = OfferTheme::all();
        $SablonSelect = OfferTheme::where('id', '=', request('sablon'))->first();
        return view('backend.offer.create', compact('Sablon', 'SablonSelect'));
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


        $SendMail = Offer::where('id',$id)->update(['send_email' => 0, 'emailCount' => +1]);

        alert()->success('Başarıyla Güncellendi','Teklif Başarıyla Güncellendi');
        return redirect()->route('teklifler');
    }

    public function emailGonder($id){
        DB::transaction(function() use ($id){
            $Email = Offer::where('id', $id)->first();
            Mail::send('mail.form', compact('Email'), function ($message) use ($Email) {

                $url = (config('app.env') == 'local') ? public_path($Email->file) : url($Email->file);
                $message->to($Email->company_email)
                    ->subject('Syn. ' . $Email->company_officer . ' ' . 'Dinamik SMS Fiyat Teklifi')
                    ->attach($url);
            });
            $Update = Offer::where('id',$id)->update(['send_email' => 1, 'emailCount' => +1]);
        });
        alert()->success('Teklif Gönderildi','Teklif Başarıyla Gönderildi');
        return redirect()->route('teklifler');
    }

    public function smsGonder(){

    }

    public function sablon(){
        $All = OfferTheme::all();
        return view('backend.offer.sablon.index',compact('All'));
    }

    public function sabloncreate(){
        return view('backend.offer.sablon.create');
    }

    public function sablonstore(Request $request){
       $New = new OfferTheme;
       $New->title = $request->title;
       $New->user_id = auth()->user()->id;
       $New->content = $request->text;
       $New->save();

       toast(SWEETALERT_MESSAGE_CREATE, 'success');
       return redirect()->route('sablon.index');
    }

    public function sablonedit($id){
        $Edit = OfferTheme::where('id', $id)->first();
        return view('backend.offer.sablon.edit',compact('Edit'));
    }
    public function sablonupdate(Request $request, $id){

        $Update = OfferTheme::where('id', $id)->first();
        $Update->title = $request->title;
        $Update->content = $request->text;
        $Update->save();
        toast(SWEETALERT_MESSAGE_UPDATE, 'success');
        return redirect()->route('sablon.index');

    }

    public function getSwitch(Request $request){
        $update=OfferTheme::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }

    public function kullanici(){
        $All = User::all();
        return view('backend.offer.kullanici.index',compact('All'));
    }

    public function kullanicicreate(){
        return view('backend.offer.kullanici.create');
    }

    public function kullanicistore(){

    }

    public function skullaniciedit(){
        return view('backend.offer.kullanici.edit');
    }
    public function kullaniciupdate(){

    }

    public function kullanicigetSwitch(Request $request){
        $update=User::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }
}
