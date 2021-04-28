<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    // Fatherhood
    function Fatherhood(){
        return view('Book.Fatherhood');
    }
    function Praytohim(){
        return view('Book.PraytoHim');
    }
}
