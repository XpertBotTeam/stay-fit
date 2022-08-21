
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Client;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MealController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return view('components.home');
});
Route::get('/dashboard',[ClientController::class,'show']);
Route::get('/constultation',[ConsultationController::class,'booking']);

Route::get('register',[UserController::class,'create'])->middleware('guest');
Route::post('register',[UserController::class,'store'])->middleware('guest');
Route::get('login',[UserController::class,'login'])->middleware('guest');
Route::post('sessions',[UserController::class,'logsub'])->middleware('guest');
Route::get('logout',[UserController::class,'logout']);
Route::get('dashboard',[AdminController::class,'show']);
Route::get('customizedmeal',[ClientController::class,'show']);
Route::get('client',[ClientController::class,'create']);
Route::post('store',[ClientController::class,'store']);
Route::get('meal',[MealController::class,'show']);
