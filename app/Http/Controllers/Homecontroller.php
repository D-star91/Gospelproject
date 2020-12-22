<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    // Home
    function index(){
        return view('index');
    }
    // Contact
    function Contact(){
        return view('Contact');
    }
    // About
    function About(){
        return view('About');
    }
    function Prayer(){
        return view('Prayer');
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
