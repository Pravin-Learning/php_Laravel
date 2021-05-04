<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newcontroller;
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
// $value=$_GET['url'];
// Route::get('/', function () {
  
//     return view("Home");
// // });
// Route::get('/contact', function () {
                                                                                            
//     return view('user');
// });
Route::view("about",'about');
Route::get("user", [newcontroller::class,'viewload']);
// // Route::get('user','Users@user');
// Route::get('user/{user}',[Users::class,'user']);
// Route::get('usernew',[Users::class,'loadviews']);