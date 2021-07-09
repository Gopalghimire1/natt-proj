<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Menupage;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('back.menu.list',compact('menu'));
    }

    public function store(Request $request){
        $menu = new Menu();
        $menu->title = $request->title;
        $menu->parent_id = $request->parent_id;
        $menu->save();
        $page = new Menupage();
        $page->title = "Demo Test";
        $page->detail = "Demo Test";
        $page->subdetail = "Demo Test";
        $page->menu_id = $menu->id;
        $page->save();
        return redirect()->back()->with('success','Menu added successfully.');
    }

    public function delete($id){
        $menu = Menu::where('id',$id)->first();
        $page = Menupage::where('menu_id',$id)->first();
        $page->delete();
        $menu->delete();
        return redirect()->back()->with('success','Menu deleted successfully.');
    }


    public function manage($id){
        $menu = Menu::find($id);
        $page = Menupage::where('menu_id',$menu->id)->first();
        // dd($page);
        return view('back.menu.manage',compact('menu','page'));
    }

    public function manageUpdate(Request $request, $id){
        $page = Menupage::find($id);
        $page->title = $request->title;
        $page->detail = $request->detail;
        $page->subdetail = $request->subdetail;
        $page->image = $request->image->store('back/img/pages');
        $page->save();
        return redirect()->back()->with('success','Menu page updated successfully.');
    }
}
