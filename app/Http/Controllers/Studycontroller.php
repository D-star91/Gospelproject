<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studycontroller extends Controller
{
    function Study_user(){
        return view('Study');
    }
    function Study_Home(){
        return view('Useraccount.Studyuser');
    }
}
