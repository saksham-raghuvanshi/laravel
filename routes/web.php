<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/{name?}', function ($name = null) {
//     $demo = "<h2>NotatMRP</h2>";
//     $data = compact('name', 'demo'); 
//     return view('home')->with($data);
// });


// // Route::get('/demo',function() {
// //     return view('demo');
// // });


// Route::get('/demo/{name}/{id?}', function($name, $id = null ){
//     $data = compact('name','id');
//     return view('demo')->with($data);

// });


Route::get('/',[DemoController::class,'index']);


// Route::get('/about',function(){
//     return view('about');
// });

Route::get('/about','App\Http\Controllers\DemoController@about');

// Route::get('/about',[DemoController::class,'about']);

Route::get('/course',SingleActionController::class);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);