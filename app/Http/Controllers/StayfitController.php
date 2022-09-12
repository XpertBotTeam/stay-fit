<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StayfitController extends Controller
{
    //
 public function show(){
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://exercisedb.p.rapidapi.com/exercises/bodyPart/back",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: exercisedb.p.rapidapi.com",
		"X-RapidAPI-Key: d47bdf9affmsh640fed96af84362p121e15jsn8577b639f47b"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$exercices=json_decode($response,true);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    foreach($exercices as $exercice){
       if( strcmp($exercice['equipment'], 'body weight')==0){
        echo($exercice['equipment']);
       }
    }
	
}
 }


}
