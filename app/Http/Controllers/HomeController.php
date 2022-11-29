<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Faq;
use App\Models\Form;
use App\Models\Page;
use App\Models\Price;
use App\Models\Reference;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        SEOMeta::setTitle('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        $Reference = Reference::all();
        $Faq =  Faq::all();
        $Price = Price::where('active',1)->get();
        return view('frontend.index' ,compact('Faq', 'Reference', 'Price'));

    }

    public function bankinfo (){
        SEOMeta::setTitle('Banka Hesap Numaralarımız | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.corporate.bankinfo');

    }

    public function contactus(){

        SEOMeta::setTitle('İletişim | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.corporate.contactus');
    }

    public function price(){

        SEOMeta::setTitle('Sms Fiyat Listesi | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        $Price = Price::all();

        return view('frontend.corporate.price',compact('Price'));
    }

    public function support(){

        SEOMeta::setTitle('Online Destek | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.corporate.support');

    }

    public function service(){
        SEOMeta::setTitle('Hizmetlerimiz | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.corporate.support');
    }

    public function api(){
        SEOMeta::setTitle('Api | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.service.api');
    }

    public function sss(){
        SEOMeta::setTitle('Sıkça Sorulan Sorular | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj | Sıkça Sorulan Sorular ');
        SEOMeta::setCanonical(url()->full());

        $All = Faq::all();
        return view('frontend.corporate.faq',compact('All'));
    }

    public function servicedetail($url){
        $Detay = Service::where('slug', '=', $url)->firstOrFail();

        SEOMeta::setTitle($Detay->title.' | Online Destek | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.service.servicedetail', compact('Detay'));

    }

    public function solutiondetail($url){

        $Detay = Service::where('slug', '=', $url)->firstOrFail();
        SEOMeta::setTitle($Detay->title.' | Online Destek | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.service.solutiondetail', compact('Detay'));

    }

    public function corporatedetail($url){

        $Detay = Page::where('slug', '=', $url)->firstOrFail();
        SEOMeta::setTitle($Detay->title.' | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.corporate.detail', compact('Detay'));

    }



    public function sectordetails($url){

        $Detay = Service::where('slug', '=', $url)->firstOrFail();
        SEOMeta::setTitle($Detay->title.' | Online Destek | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.service.sectordetail', compact('Detay'));

    }

    public function form(ContactRequest $request){

        $New = new Form;
        $New->name  = $request->name;
        $New->phone  = $request->phone;
        $New->email  = $request->email;
        $New->subject  = $request->subject;
        $New->message  = $request->message;
        $New->save();

        Mail::send("mail.form",compact('New'),function ($message) use($New) {
            $message->to('info@dinamiksms.com.tr')->subject($New->name.' Site İletişim Formu');
        });

        alert()->success('Başarıyla Gönderildi','En kısa zamanda sizlere geri dönüş yapılacaktır.');
        return redirect()->route('contactus');

    }
}
