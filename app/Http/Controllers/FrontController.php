<?php

namespace App\Http\Controllers;

use App\Models\Adv;
use App\Models\Area;
use App\Models\Download;
use App\Models\Event;
use App\Models\Galary;
use App\Models\Menupage;
use App\Models\News;
use App\Models\Patner;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index(){
        $news = News::latest()->take(5)->get();
        $event = Event::latest()->take(5)->get();
        $activity = Area::latest()->take(5)->get();
        $patner = Patner::all();
        $adv = Adv::all();
        $advs = Adv::latest()->take(4)->get();
        return view('front.index',compact('news','event','activity','patner','adv','advs'));
    }
    public function aboutUs(){
        return view('front.page.about');
    }
    public function contactUs(){
        return view('front.page.contact');
    }

    public function downloads(){
        $download = Download::latest()->get();
        return view('front.page.download',compact('download'));
    }

    public function videos(){
        $video = Video::latest()->get();
        return view('front.page.video',compact('video'));
    }

    public function gallery(){
        $galleries = Galary::all();
        return view('front.page.gallery',compact('galleries'));
    }

    public function dynamicPage($id){
        $pageIitem = Menupage::where('menu_id',$id)->first();
        return view('front.page.dynamic',compact('pageIitem'));
    }


}
