<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;


class ApiController extends Controller
{
    // $curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://edamam-recipe-search.p.rapidapi.com/search?q=cheese",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_FOLLOWLOCATION => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => [
// 		"X-RapidAPI-Host: edamam-recipe-search.p.rapidapi.com",
// 		"X-RapidAPI-Key: d47bdf9affmsh640fed96af84362p121e15jsn8577b639f47b"
// 	],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	echo $response;
// }
   public function fetch(){

  
        $curl = curl_init();

 curl_setopt_array($curl, [
 	CURLOPT_URL => "https://edamam-recipe-search.p.rapidapi.com/search?q=cheese",
 	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
CURLOPT_ENCODING => "",
 	CURLOPT_MAXREDIRS => 10,
 	CURLOPT_TIMEOUT => 30,
 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 	CURLOPT_CUSTOMREQUEST => "GET",
 	CURLOPT_HTTPHEADER => ["X-RapidAPI-Host: edamam-recipe-search.p.rapidapi.com",
 		"X-RapidAPI-Key: d47bdf9affmsh640fed96af84362p121e15jsn8577b639f47b"
 	],
 ]);

 $response= curl_exec($curl);
 $err = curl_error($curl);

// * transform returned data from string to json 
 $food = json_decode($response, true);
//  $labels= $manage['hits']['0']['recipe']['dietLabels']['0'];

 curl_close($curl);

 if ($err) {
 	echo "cURL Error #:" . $err;
 } else {
//  echo $hit[0]['recipe']['uri'];

    return view('components.api',[
		'food'=>$food,

	
       
    ]);
 }


}
}