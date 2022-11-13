<?php

namespace App\Http\Controllers;

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

        return view('frontend.index');

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

        return view('frontend.corporate.contactus');
    }

    public function support(){

        SEOMeta::setTitle('Online Destek | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.corporate.support');

    }

    public function service(){
        SEOMeta::setTitle('Online Destek | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.corporate.support');
    }

    public function servicedetail($url){
        $Detay = Service::where('slug', '=', $url)->firstOrFail();

        SEOMeta::setTitle($Detay->title.' | Online Destek | Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setDescription('Dinamik SMS | Toplu SMS Fiyatları | Başlık Kısa Mesaj');
        SEOMeta::setCanonical(url()->full());
        return view('frontend.service.servicedetail', compact('Detay'));

    }

    public function solutionsdetail($url){

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

}
