<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biblecontroller extends Controller
{
    function Bible_Home(){
        return view('Bible');
    }
}
