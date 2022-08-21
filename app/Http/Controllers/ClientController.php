<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function show(){
      return view('components.customizedmeal');
    }
   public function create(){
    return view('components.client');
   }
   public function store(){
    $attributes =request()->validate([
       'height'=>'required',
       'weight'=>'required',
       'age' =>'required',
       'goals'=>'required|max:255',
       'gender' =>'required',
       'caloriesintake'=>'',
       'activity'=>'required|max:255'
    ]);
    $client= Client::create($attributes);

return redirect('/')->with('success','your information saved');
   }
}
