<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        SEOMeta::setTitle('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        $Faq =  Faq::all();
        return view('frontend.index' ,compact('Faq'));

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

        return view('frontend.corporate.price');
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
        SEOMeta::setTitle($Detay->title.' | Online Destek | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
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



}
