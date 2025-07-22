<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){

        return"this is my name";

        return view('user');
    }
     function abouttUser(){

        //return"this is me";
        return view('about', ['name'=>$name]);

    }



}
//to create a controller php artisan make:controller UserController on the terminal after cd blog