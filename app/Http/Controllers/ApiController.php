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
  /*  public function fetch(){

  
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
*/

public function calories(){
	

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/dailycalorie?age=25&gender=male&height=180&weight=70&activitylevel=level_1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: fitness-calculator.p.rapidapi.com",
		"X-RapidAPI-Key: d47bdf9affmsh640fed96af84362p121e15jsn8577b639f47b"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$calories=json_decode($response,true);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	return $calories;
}
}
public function bmi(){
	
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/bmi?age=25&weight=65&height=180",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: fitness-calculator.p.rapidapi.com",
		"X-RapidAPI-Key: d47bdf9affmsh640fed96af84362p121e15jsn8577b639f47b"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$bmi=json_decode($response,true);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
return $bmi;
}
}
public function macros(){
	
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/macrocalculator?age=25&gender=male&height=180&weight=70&activitylevel=5&goal=extremelose",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: fitness-calculator.p.rapidapi.com",
		"X-RapidAPI-Key: d47bdf9affmsh640fed96af84362p121e15jsn8577b639f47b"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$macros=json_decode($response,true);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	return $macros;
}
}
public function bodyfat(){
	

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/bodyfat?age=25&gender=male&weight=70&height=178&neck=50&waist=96&hip=92",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: fitness-calculator.p.rapidapi.com",
		"X-RapidAPI-Key: d47bdf9affmsh640fed96af84362p121e15jsn8577b639f47b"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$bodyfat=json_decode($response,true);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	return $bodyfat;
}
}
public function all(){
	$calories=$this->calories();
	$bmi=$this->bmi();
	$macros=$this->macros();
	$bodyfat=$this->bodyfat();

	return view('components.api',[
		'calories'=>$calories,
		'bmi'=>$bmi,
		'macros'=>$macros,
		'bodyfat'=>$bodyfat,
	]);
}
}