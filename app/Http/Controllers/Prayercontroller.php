<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prayercontroller extends Controller
{
    function Prayer(){
        return view('Prayer');
    }
    function Prayer_form(){
        return "Work";
    }
}
