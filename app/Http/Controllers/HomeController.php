<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        return view('frontend.index');

    }

    public function contactus(){
        return view('frontend.corporate.contactus');
    }

    public function price(){
        return view('frontend.corporate.contactus');
    }

    public function support(){
        return view('frontend.corporate.support');
    }
}
