<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Callback;
use App\Models\Galary;
use App\Models\Galaryimage;
use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $galleries=Galary::all();
        return view('back.gallery.add',compact('galleries'));
    }

    public function store(Request $request){
     $parsed = $request->all();
     $gallery = new Galary();
     $gallery->name = $parsed['name'];
     $gallery->save();
     return response()->json(new Callback(['gallery'=>$gallery]));
    }

    public function update(Request $request){
        $parsed = $request->all();
        $gallery = Galary::find($parsed['id']);
        $gallery->name = $parsed['name'];
        $gallery->save();
        return response()->json(new Callback(['gallery'=>$gallery]));
    }

    public function delete(Request $request){
        $parsed = $request->all();
        $gallery = Galary::find($parsed['id']);
        $gallery->delete();
    }

    public function manage($id){
        $gallery = Galary::find($id);
        return view('back.gallery.manage',compact('gallery'));
    }

    public function imageStore(Request $request){
        $gallery_id=$request->galary_id;
        $callback=new Callback();
        foreach ($request->image as $file) {
            $galaryimage=new Galaryimage();
            $galaryimage->galary_id=$gallery_id;
            $image=new Image();
            $image->filepath = $file->store('back/gallery/img');
            $image->save();
            $galaryimage->image_id=$image->id;
            $galaryimage->save();
            array_push($callback->data,$galaryimage);
        }
        return response()->json($callback);
    }

    public function imageDelete(Request $request){
        $parsed=$request->all();
        $galaryimage=Galaryimage::find($parsed['id']);
        $galaryimage->delete();
        return response()->json(new Callback(['image'=>$galaryimage]));
    }
}
