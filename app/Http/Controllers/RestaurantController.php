<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;


class RestaurantController extends Controller
{
    public function index() {
        $menuitems=menu::all();        
        return view("home",compact("menuitems"));
    }

    public function insertfood(Request $request){
        $menuitems= new menu;
        $menuitems->menutype=$request->menuType;
        $menuitems->submenu=$request->submenu;
        $menuitems->title=$request->title;
        $menuitems->price=$request->price;
        $menuitems->description=$request->desc;
        $menuitems->save();
        return redirect()->back();
    }

    public function table(){
        if(auth()->user()->usertype=='1'){
        $menuitems= menu::all();
        return view("dashboard",compact("menuitems"));
        }
    }

    public function delete($id){
        $menuitems=menu::find($id);
        $menuitems->delete();
        return redirect()->back();
    }

    public function update($id){
        $menuitems= menu::find($id);
        return view("updatemenu",compact('menuitems'));
    }
    
    public function updatemenu(Request $request, $id){
        $menuitems=menu::find($id);
        $menuitems->menutype=$request->menuType;
        $menuitems->submenu=$request->submenu;
        $menuitems->title=$request->title;
        $menuitems->price=$request->price;
        $menuitems->description=$request->desc;
        $menuitems->save();
        return redirect()->back();
    }

    
}
