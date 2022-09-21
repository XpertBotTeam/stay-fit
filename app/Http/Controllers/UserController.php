<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class UserController extends Controller
{
    //
    public function welcome(){
        return view('welcome',[
            'users'=>User::all()
        ]);
    
    }
    public function create(){
return view('register.create');
    }

   public function store(){
    
    $attributes=request()->validate([
        'name'=>'required|max:255',
        'username'=>'required|max:255|unique:users,username',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:7|max:255',
       
   
    ]);
    $user= User::create($attributes);
    auth()->login($user);
    return redirect('/')->with('success','your account has been created');


}
public function login(){
    return view('register.login');
}
public function logsub(Request $request){
    $attributes = $request->validate([
        'email' =>'required|email',
    'password' =>'required',
    ]);
 if (Auth::attempt($attributes)){
   $request-> session()->regenerate();
    return redirect('/')->with('success','Welcome Back!');
   
}
return back()->withErrors([
    'email' => 'your provided credentials could not be verified',
])->onlyInput('email');
    

}

public function logout(){
    auth()->logout();
    return redirect('/')->with('success','Goodbye');
}

}
