<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MealController extends Controller
{
    //
    public function show(){
        $products = Product::all();
        return view('components.meals',compact('products'),[
            
         'cookies'=>   Product::where('name','like','%cookies(5pcs)%') -> first(),
         'bibingka'=>   Product::where('name','like','%bibingka(3pcs)%') -> first(),
         'pasta'=>   Product::where('name','like','%pasta meal%') -> first(),
         'chicken'=>   Product::where('name','like','%chicken breast%') -> first(),

        ]);
    }
    public function showpackage(){
        return view('components.package');

    }
}
