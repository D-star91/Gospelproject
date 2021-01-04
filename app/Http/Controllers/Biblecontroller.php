<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biblecontroller extends Controller
{
    function Bible_Home(){
        return view('Bible');
    }

    // Old Testaments
    function Genesis_1(){
        return view('Bible.Old.Genesis.genesis_1');
    }
    function Genesis_2(){
        return view('Bible.Old.Genesis.genesis_2');
    }
}
