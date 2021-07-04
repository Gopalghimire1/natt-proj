<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function aboutUs(){
        return view('front.page.about');
    }
    public function contactUs(){
        return view('front.page.contact');
    }
}
