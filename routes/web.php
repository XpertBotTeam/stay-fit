
<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Models\Client;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MealController;
use App\Models\Shop;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StayfitController;
use Doctrine\DBAL\Driver\Middleware;
use App\Http\Controllers\HomeController;
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


 Route::get('/', [HomeController::class,'show']);
 Route::get('home2', [HomeController::class,'show2']);
//  Route::get('/',[StayfitController::class,'show']);

Route::get('/dashboard',[ClientController::class,'show']);
Route::get('/constultation',[ConsultationController::class,'booking']);

Route::get('register',[UserController::class,'create'])->middleware('guest');
Route::post('register',[UserController::class,'store'])->middleware('guest');
Route::get('login',[UserController::class,'login'])->middleware('guest');
Route::post('sessions',[UserController::class,'logsub'])->middleware('guest');
Route::get('logout',[UserController::class,'logout']);
 Route::middleware('can:admin')->group(function() {
    Route::get('dashboard',[AdminController::class,'show']);
   });


Route::get('customizedmeal',[ClientController::class,'show']);
Route::get('consultation',[ConsultationController::class,'show']);
Route::get('client',[ClientController::class,'create']);
Route::post('store',[ClientController::class,'store']);
Route::get('meal', [MealController::class, 'show'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('address',[AddressController::class,'show']);
Route::get('recipe',function(){
return view('components.form.recipegrid');

});
//here we used exercice db api to see exercice for each muscle
Route::get('shop',[ShopController::class,'show']);

Route::get('stayfit',[StayfitController::class,'show']); 
Route::get('/{muscle}',[StayfitController::class,'exercices']);


Route::get('api',[ApiController::class,'all']); 