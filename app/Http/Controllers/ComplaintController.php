<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComplaintRequest;
use App\Models\Complaint;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index(){

        $bugun = date("Y-m-d");

        if(request('filtre') ==  'dun'){
            $test = strtotime('-1 day',strtotime($bugun));
            $filtre = date("Y-m-d",$test);
        }elseif(request('filtre') ==  'hafta'){
            $test = strtotime('-1 week',strtotime($bugun));
            $filtre =  date("Y-m-d",$test);
        }elseif(request('filtre') ==  'ay'){
            $test = strtotime('-1 mount',strtotime($bugun));
            $filtre =  date("Y-m-d",$test);
        }elseif(request('filtre') ==  'bugun'){
            $filtre = date("Y-m-d");
        }else{
            $filtre = date("Y-m-d");
        }

        //dd($filtre);

        if (request()->filled('q') || request()->filled('filtre') || request()->filled('liste')){
            $All = Complaint::where('sikayet_numarasi', 'like', '%'. request('q'). '%')
                ->orWhere('adsoyad', 'like', '%'. request('q'). '%')
                ->orWhere('telefon', 'like', '%'. request('q'). '%')
                ->orWhere('firma', 'like', '%'. request('q'). '%')
                ->where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate((request('liste')  ? request('liste') : 30));
        }elseif(auth()->user()->is_admin == 1){
            $All = Complaint::where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->where('user_id', auth()->user()->id)
                ->paginate((request('liste')  ? request('liste') : 30));
        }elseif(auth()->user()->is_admin == 2){
            $All = Complaint::with('getUser')
                ->orderBy('created_at', 'desc')
                ->paginate(30);
            //dd($All);
        }

        return view('backend.complaint.index', compact('All'));
    }

    public function create(){
        $Sablon = Complaint::all();
        return view('backend.complaint.create', compact('Sablon'));
    }

    public function store(ComplaintRequest $request){

        $data = $request->all();
        $New = new Complaint;

        $New->sikayet_numarasi = $request->sikayet_numarasi;
        $New->nereye = $request->nereye;
        $New->kime = $request->kime;
        $New->baslik = $request->baslik;
        $New->firma = $request->firma;
        $New->adsoyad = $request->adsoyad;
        $New->adres = $request->adres;
        $New->vergidaire = $request->vergidaire;
        $New->vergino = $request->vergino;
        $New->telefon = $request->telefon;
        $New->email = $request->email;
        $New->text = mb_convert_encoding($request->text, 'HTML-ENTITIES', 'UTF-8');
        $New->user_id = auth()->user()->id;
        $New->save();

        $Detail = Complaint::where('id', $New->id)->first();

        $pdf = Pdf::loadView('backend.complaint.pdf', ['Detail' => $Detail])
            ->setOption(['dpi' => 96, 'defaultFont' => 'DejaVu Sans', 'encoding' => 'utf8', 'isFontSubsettingEnabled' => true])
            ->setPaper('a4', 'portrait')
            ->save('complaint/'.$request->firma.' - ' .$request->nereye.' - '.$request->kime.' Şikayet Yazısı.pdf');

        $Files = Complaint::where('id', $New->id)->update(['file' => 'complaint/'.$request->firma.' - ' .$request->nereye.' - '.$request->kime.' Şikayet Yazısı.pdf']);

        alert()->success('Başarıyla Oluşturuldu','Şikayet Başarıyla Oluşturuldu');
        return redirect()->route('sikayet.index');


    }

    public function edit(Request $request,$id){

        $Edit = Complaint::where('id',$id)->first();
        return view('backend.complaint.edit', compact('Edit'));
    }

    public function update(ComplaintRequest $request,$id){

        $Update = Complaint::where('id',$id)->first();

        $Update->sikayet_numarasi = $request->sikayet_numarasi;
        $Update->nereye = $request->nereye;
        $Update->kime = $request->kime;
        $Update->baslik = $request->baslik;
        $Update->firma = $request->firma;
        $Update->adsoyad = $request->adsoyad;
        $Update->adres = $request->adres;
        $Update->vergidaire = $request->vergidaire;
        $Update->vergino = $request->vergino;
        $Update->telefon = $request->telefon;
        $Update->email = $request->email;
        $Update->text = mb_convert_encoding($request->text, 'HTML-ENTITIES', 'UTF-8');
        $Update->save();

        $Detail = Complaint::where('id', $Update->id)->first();

        $pdf = Pdf::loadView('backend.complaint.pdf', ['Detail' => $Detail])
            ->setOption(['dpi' => 96, 'defaultFont' => 'DejaVu Sans', 'encoding' => 'utf8', 'isFontSubsettingEnabled' => true])
            ->setPaper('a4', 'portrait')
            ->save('complaint/'.$request->firma.' - ' .$request->nereye.' - '.$request->kime.' Şikayet Yazısı.pdf');

        $Files = Complaint::where('id', $Update->id)->update(['file' => 'complaint/'.$request->firma.' - ' .$request->nereye.' - '.$request->kime.' Şikayet Yazısı.pdf']);


        $SendMail = Complaint::where('id',$id)->update(['send_email' => 0, 'emailCount' => +1]);

        alert()->success('Başarıyla Güncellendi','Şikayet Başarıyla Güncellendi');
        return redirect()->route('teklifler');

    }

    public function emailGonder($id){
        DB::transaction(function() use ($id){
            $Email = Offer::where('id', $id)->first();
            Mail::send('mail.form', compact('Email'), function ($message) use ($Email) {

                $url = (config('app.env')) == 'local' ? url($Email->file) : public_path($Email->file);
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
}
