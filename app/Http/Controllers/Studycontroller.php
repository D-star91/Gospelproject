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
    function BFAM(){
        return view('Study.BFAM.BFAM');
    }
    function Con_1_1(){
        return view('Study.BFAM.1.lesson_1');
    }
}
