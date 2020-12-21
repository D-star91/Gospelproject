<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    // Home
    function index(){
        return view('index');
    }

    // Sign up
    function Sign_up(){
        return view('Useraccount.Usersignup');
    }
    // Login
    function Login(){
        return view('Useraccount.Login');
    }
    // User Accout
    function Home(){
        return view('Useraccount.Home');
    }
}
