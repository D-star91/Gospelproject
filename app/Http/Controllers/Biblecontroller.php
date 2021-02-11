<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biblecontroller extends Controller
{
    function Bible_Home(){
        return view('Bible');
    }

    // Old Testaments
    function Genesis_1(){return view('Bible.Old.Genesis.genesis_1');}
    function Genesis_2(){return view('Bible.Old.Genesis.genesis_2');}
    function Genesis_3(){return view('Bible.Old.Genesis.genesis_3');}
    function Genesis_4(){return view('Bible.Old.Genesis.genesis_4');}
    function Genesis_5(){return view('Bible.Old.Genesis.genesis_5');}
    function Genesis_6(){return view('Bible.Old.Genesis.genesis_6');}
    function Genesis_7(){return view('Bible.Old.Genesis.genesis_7');}
    function Genesis_8(){return view('Bible.Old.Genesis.genesis_8');}
    function Genesis_9(){return view('Bible.Old.Genesis.genesis_9');}
    function Genesis_10(){return view('Bible.Old.Genesis.genesis_10');}
}
