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
          
          
      Client::create(array_merge($this->validateClient(),[
         'user_id' => request()->user()->id,
       /*'height'=>'required',
       'weight'=>'required',
       'age' =>'required',
       'goals'=>'required|max:255',
       'gender' =>'required',
       'caloriesintake'=>'',
       'activity'=>'required|max:255' */
   
      ]
      ));
return redirect('/')->with('success','your information saved,we will send you an email soon');
   }
   protected function validateClient(?Client $client = null):array{
      $client ??= new Client();

     return request()->validate([
        'height' => 'required',
        'weight' =>'required',
        'age' =>'required',
        'goals' =>'required',
        'activity' => 'required',
        'gender' => 'required',
       'caloriesintake' =>'required',
          ]);
    }
}
