<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcom', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
//path for the controller:
   use App\Http\Controllers\UserController;


Route::get('/about/{name}', function ($name) {
    
    return view('about', ["name" =>$name]);
});
//for the controller
route::get('user', [UserController ::class, 'getUser']);
route::get('about', [UserController ::class, 'abouttUser']);