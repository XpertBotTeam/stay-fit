<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //
    public function show(){
        return view('components.address');
    }
    public function submit(){
       $attributes= request()->validate([
     'address'=>'max:256|required',
     'name'=>'max:256|required',
     'number'=>'required',
        ]);
     Info::create($attributes);
     return redirect('/,your order will be delivered in 1-2 days');

    }
}
