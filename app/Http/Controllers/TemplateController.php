<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('anasayfa');
    }

    public function hakkimizda(){
        return view('hakkimizda');
    }
    public function blog(){
        return view('blog');
    }
    public function kategoriler(){
        return view('kategoriler');
    }
    public function iletisim(){
        return view('iletisim');
    }
    public function paylas(){
        return view('paylas-sec');
    }
    public function edin(){
        return view('edin-sec');
    }
}
