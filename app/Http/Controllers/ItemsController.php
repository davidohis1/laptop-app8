<?php

namespace App\Http\Controllers;
use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    public function open(){
        return view('show');
    } 
    public function save(Request $request){
        $item = new Items();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item-> save();


        return back();
    }
}
