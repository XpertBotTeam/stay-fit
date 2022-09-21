<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;
class HealthController extends Controller
{
    //
    public function show(){
        return view('components.healthcoaching');
    }
    public function showcons(){
        return view('components.consultation');
    }
    public function infoshow(){
        return view('components.meeting');
        
    }
    public function submit(){
Meeting::create(array_merge($this->validateinfo(),[
'user_id'=>request()->user()->id ,
]));
return redirect('/')->with('success','your info saved! we will email you soon');
}
    protected function validateinfo(?Meeting $meeting=NULL) :array{
        $meeting ??=new Meeting();
        return request()->validate([
             'number' =>'required|max:256',
             'email' =>'required|max:256|email',
             'place'=>'required|max:256',
             'time'=>'required|max:256',
             'meeting'=>'required|max:256',
        ]);

    }
}
