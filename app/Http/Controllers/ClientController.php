<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function show(){
        return view('show',[
            'clients'=>Client::all()
        ]);
    }
}
