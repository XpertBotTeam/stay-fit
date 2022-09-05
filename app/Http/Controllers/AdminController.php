<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
use App\Models\Info;
//HCIaizXdaLYjtfHSMDu1YMrfmEwomvQ5Vnm3hjfJ


class AdminController extends Controller
{
    
    //
    public function show(){
        return view('admin.dashboard',[
             'clients'=>Client::all(),
            'users'=>User::all(),
         'infos'=>Info::all(),
        ]);
    }
}
