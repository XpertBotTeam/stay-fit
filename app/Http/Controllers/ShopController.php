<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function show(){
         $shops=Shop::all();
        return view('components.shop',compact('shops'));
    }
   
}
