<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //57d2521f4263453086c11cb9bc9afda6
    public function show(){
    $response=Http::get('https://newsapi.org/v2/top-headlines?country=us&category=health&apiKey=57d2521f4263453086c11cb9bc9afda6');
 

$blogs=array();

for($i=1;$i<5;$i++){
    $blogs[$i]=$response['articles'][$i];

}
return view('components.home',[
    'blogs'=>$blogs,
]);
    }
    public function show2(){
        $response=Http::get('https://newsapi.org/v2/top-headlines?country=us&category=health&apiKey=57d2521f4263453086c11cb9bc9afda6');
     
    
    $blogs=array();

    for($i=5;$i<10;$i++){
        $blogs[$i]=$response['articles'][$i];
    
    }
    return view('components.home2',[
        'blogs'=>$blogs,
    ]);
        }
}
