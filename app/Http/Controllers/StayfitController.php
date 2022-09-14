<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Muscle;
class StayfitController extends Controller
{
    //
 public function show(){

	/* $curl = curl_init();

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
       
       }
    }
	
}
*/



	return view('components.stayfit',[
		

	 'chest'=> Muscle::where('muscle','like','%chest%')->first(),
	'back'=> Muscle::where('muscle','like','%back%')->first(),

	'abs'=> Muscle::where('muscle','like','%abs%')->first(),
	'upperarms'=> Muscle::where('muscle','like','%upper arms%')->first(),
	
	'lowerarms'=>Muscle::where('muscle','like','%lower arms%')->first(),
	'upperlegs'=>Muscle::where('muscle','like','%upper legs%')->first(),
	'lowerlegs'=>Muscle::where('muscle','like','%lower legs%')->first(),
	'shoulders'=>Muscle::where('muscle','like','%shoulders%')->first(),
	'cardio'=>Muscle::where('muscle','like','%cardio%')->first(), 
	]);


 }
 public function exercices($muscle){




$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://exercisedb.p.rapidapi.com/exercises/bodyPart/$muscle",
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
 	$exerc=array();
	$i=0;
    for ($i;$i<4;$i++){
	 $exerc[$i]=$exercices[$i];

}
$exerc2=array();
for($j=4;$j<8;$j++){
	 $exerc2[$j]=$exercices[$j];
}
$exerc3=array();
for($h=8;$h<12;$h++){
	$exerc3[$h]=$exercices[$h];
}

   return view('components.workout',[
	'exercices'=>$exerc,
	'exercices2'=>$exerc2,
	'exercices3'=>$exerc3,
	]) ;
	
}



 
}


}
