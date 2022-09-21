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
        Info::create(array_merge($this->validateInfo(),[
            'user_id'=>request()->user()->id,
        ]
        ));
        return redirect('/')->with('success','your info saved!we will send you an email soon');
    }

    protected function validateInfo(?Info  $info=null):array{
       $info ??= new Info();
       return request()->validate([
     'address'=>'max:256|required',
     'name'=>'max:256|required',
     'number'=>'required',
        ]);
   

    }
}
