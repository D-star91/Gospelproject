<?php

namespace App\Http\Controllers;

use App\Models\Vpost;
use Illuminate\Http\Request;

class Biblecontroller extends Controller
{
    function Bible_Home(){
        return view('Bible');
    }
    // verses
    function Verses(){
        $vposts=Vpost::latest()->paginate(1);
        return view('Bible.Verses.dailyverses',['vposts'=>$vposts]);
    }
    function Vpost(){
        return view('Bible.Verses.vepost');
    }
    function Verpost(){
        $validation=request()->validate([
            "verse"=>"required",
            "vpost"=>"required",
        ]);
        if($validation){
            $verse=request('verse');
            $vpost=request('vpost');
            
            $vepost=new Vpost();
            $vepost->verse=$verse;
            $vepost->post=$vpost;
            $vepost->save();
            return redirect()->route("verse");
        }else{
            return back()->withErrors($validation);
        }
    }
    // Old Testaments
    // Genesis
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
    function Genesis_11(){return view('Bible.Old.Genesis.genesis_11');}
    function Genesis_12(){return view('Bible.Old.Genesis.genesis_12');}
    function Genesis_13(){return view('Bible.Old.Genesis.genesis_13');}
    function Genesis_14(){return view('Bible.Old.Genesis.genesis_14');}
    function Genesis_15(){return view('Bible.Old.Genesis.genesis_15');}
    function Genesis_16(){return view('Bible.Old.Genesis.genesis_16');}
    function Genesis_17(){return view('Bible.Old.Genesis.genesis_17');}
    function Genesis_18(){return view('Bible.Old.Genesis.genesis_18');}
    function Genesis_19(){return view('Bible.Old.Genesis.genesis_19');}
    function Genesis_20(){return view('Bible.Old.Genesis.genesis_20');}
    function Genesis_21(){return view('Bible.Old.Genesis.genesis_21');}
    function Genesis_22(){return view('Bible.Old.Genesis.genesis_22');}
    function Genesis_23(){return view('Bible.Old.Genesis.genesis_23');}
    function Genesis_24(){return view('Bible.Old.Genesis.genesis_24');}
    function Genesis_25(){return view('Bible.Old.Genesis.genesis_25');}
    function Genesis_26(){return view('Bible.Old.Genesis.genesis_26');}
    function Genesis_27(){return view('Bible.Old.Genesis.genesis_27');}
    function Genesis_28(){return view('Bible.Old.Genesis.genesis_28');}
    function Genesis_29(){return view('Bible.Old.Genesis.genesis_29');}
    function Genesis_30(){return view('Bible.Old.Genesis.genesis_30');}
    function Genesis_31(){return view('Bible.Old.Genesis.genesis_31');}
    function Genesis_32(){return view('Bible.Old.Genesis.genesis_32');}
    function Genesis_33(){return view('Bible.Old.Genesis.genesis_33');}
    function Genesis_34(){return view('Bible.Old.Genesis.genesis_34');}
    function Genesis_35(){return view('Bible.Old.Genesis.genesis_35');}
    function Genesis_36(){return view('Bible.Old.Genesis.genesis_36');}
    function Genesis_37(){return view('Bible.Old.Genesis.genesis_37');}
    function Genesis_38(){return view('Bible.Old.Genesis.genesis_38');}
    function Genesis_39(){return view('Bible.Old.Genesis.genesis_39');}
    function Genesis_40(){return view('Bible.Old.Genesis.genesis_40');}
    function Genesis_41(){return view('Bible.Old.Genesis.genesis_41');}
    function Genesis_42(){return view('Bible.Old.Genesis.genesis_42');}
    function Genesis_43(){return view('Bible.Old.Genesis.genesis_43');}
    function Genesis_44(){return view('Bible.Old.Genesis.genesis_44');}
    function Genesis_45(){return view('Bible.Old.Genesis.genesis_45');}
    function Genesis_46(){return view('Bible.Old.Genesis.genesis_46');}
    function Genesis_47(){return view('Bible.Old.Genesis.genesis_47');}
    function Genesis_48(){return view('Bible.Old.Genesis.genesis_48');}
    function Genesis_49(){return view('Bible.Old.Genesis.genesis_49');}
    function Genesis_50(){return view('Bible.Old.Genesis.genesis_50');}
    // Genesis
    // Exodus
    function Exodus_1(){return view('Bible.Old.Exodus.exodus_1');}
    function Exodus_2(){return view('Bible.Old.Exodus.exodus_2');}
    function Exodus_3(){return view('Bible.Old.Exodus.exodus_3');}
    function Exodus_4(){return view('Bible.Old.Exodus.exodus_4');}
    function Exodus_5(){return view('Bible.Old.Exodus.exodus_5');}
    function Exodus_6(){return view('Bible.Old.Exodus.exodus_6');}
    function Exodus_7(){return view('Bible.Old.Exodus.exodus_7');}
    function Exodus_8(){return view('Bible.Old.Exodus.exodus_8');}
    function Exodus_9(){return view('Bible.Old.Exodus.exodus_9');}
    function Exodus_10(){return view('Bible.Old.Exodus.Exodus_10');}
    function Exodus_11(){return view('Bible.Old.Exodus.Exodus_11');}
    function Exodus_12(){return view('Bible.Old.Exodus.Exodus_12');}
    function Exodus_13(){return view('Bible.Old.Exodus.Exodus_13');}
    function Exodus_14(){return view('Bible.Old.Exodus.Exodus_14');}
    function Exodus_15(){return view('Bible.Old.Exodus.Exodus_15');}
    function Exodus_16(){return view('Bible.Old.Exodus.Exodus_16');}
    function Exodus_17(){return view('Bible.Old.Exodus.Exodus_17');}
    function Exodus_18(){return view('Bible.Old.Exodus.Exodus_18');}
    function Exodus_19(){return view('Bible.Old.Exodus.Exodus_19');}
    function Exodus_20(){return view('Bible.Old.Exodus.Exodus_20');}
    function Exodus_21(){return view('Bible.Old.Exodus.Exodus_21');}
    function Exodus_22(){return view('Bible.Old.Exodus.Exodus_22');}
    function Exodus_23(){return view('Bible.Old.Exodus.Exodus_23');}
    function Exodus_24(){return view('Bible.Old.Exodus.Exodus_24');}
    function Exodus_25(){return view('Bible.Old.Exodus.Exodus_25');}
    function Exodus_26(){return view('Bible.Old.Exodus.Exodus_26');}
    function Exodus_27(){return view('Bible.Old.Exodus.Exodus_27');}
    function Exodus_28(){return view('Bible.Old.Exodus.Exodus_28');}
    function Exodus_29(){return view('Bible.Old.Exodus.Exodus_29');}
    function Exodus_30(){return view('Bible.Old.Exodus.Exodus_30');}
    function Exodus_31(){return view('Bible.Old.Exodus.Exodus_31');}
    function Exodus_32(){return view('Bible.Old.Exodus.Exodus_32');}
    function Exodus_33(){return view('Bible.Old.Exodus.Exodus_33');}
    function Exodus_34(){return view('Bible.Old.Exodus.Exodus_34');}
    function Exodus_35(){return view('Bible.Old.Exodus.Exodus_35');}
    function Exodus_36(){return view('Bible.Old.Exodus.Exodus_36');}
    function Exodus_37(){return view('Bible.Old.Exodus.Exodus_37');}
    function Exodus_38(){return view('Bible.Old.Exodus.Exodus_38');}
    function Exodus_39(){return view('Bible.Old.Exodus.Exodus_39');}
    function Exodus_40(){return view('Bible.Old.Exodus.Exodus_40');}
    // Exodus
    // Leviticus
    function Leviticus_1(){return view('Bible.Old.Leviticus.leviticus_1');}
    function Leviticus_2(){return view('Bible.Old.Leviticus.leviticus_2');}
    function Leviticus_3(){return view('Bible.Old.Leviticus.leviticus_3');}
    function Leviticus_4(){return view('Bible.Old.Leviticus.leviticus_4');}
    function Leviticus_5(){return view('Bible.Old.Leviticus.leviticus_5');}
    function Leviticus_6(){return view('Bible.Old.Leviticus.leviticus_6');}
    function Leviticus_7(){return view('Bible.Old.Leviticus.leviticus_7');}
    function Leviticus_8(){return view('Bible.Old.Leviticus.leviticus_8');}
    function Leviticus_9(){return view('Bible.Old.Leviticus.leviticus_9');}
    function Leviticus_10(){return view('Bible.Old.Leviticus.leviticus_10');}
    function Leviticus_11(){return view('Bible.Old.Leviticus.leviticus_11');}
    function Leviticus_12(){return view('Bible.Old.Leviticus.leviticus_12');}
    function Leviticus_13(){return view('Bible.Old.Leviticus.leviticus_13');}
    function Leviticus_14(){return view('Bible.Old.Leviticus.leviticus_14');}
    function Leviticus_15(){return view('Bible.Old.Leviticus.leviticus_15');}
    function Leviticus_16(){return view('Bible.Old.Leviticus.leviticus_16');}
    function Leviticus_17(){return view('Bible.Old.Leviticus.leviticus_17');}
    function Leviticus_18(){return view('Bible.Old.Leviticus.leviticus_18');}
    function Leviticus_19(){return view('Bible.Old.Leviticus.leviticus_19');}
    function Leviticus_20(){return view('Bible.Old.Leviticus.leviticus_20');}
    function Leviticus_21(){return view('Bible.Old.Leviticus.leviticus_21');}
    function Leviticus_22(){return view('Bible.Old.Leviticus.leviticus_22');}
    function Leviticus_23(){return view('Bible.Old.Leviticus.leviticus_23');}
    function Leviticus_24(){return view('Bible.Old.Leviticus.leviticus_24');}
    function Leviticus_25(){return view('Bible.Old.Leviticus.leviticus_25');}
    function Leviticus_26(){return view('Bible.Old.Leviticus.leviticus_26');}
    function Leviticus_27(){return view('Bible.Old.Leviticus.leviticus_27');}
    // Leviticus
    // Numbers
    function Numbers_1(){return view('Bible.Old.Numbers.numbers_1');}
    function Numbers_2(){return view('Bible.Old.Numbers.numbers_2');}
    function Numbers_3(){return view('Bible.Old.Numbers.numbers_3');}
    function Numbers_4(){return view('Bible.Old.Numbers.numbers_4');}
    function Numbers_5(){return view('Bible.Old.Numbers.numbers_5');}
    function Numbers_6(){return view('Bible.Old.Numbers.numbers_6');}
    function Numbers_7(){return view('Bible.Old.Numbers.numbers_7');}
    function Numbers_8(){return view('Bible.Old.Numbers.numbers_8');}
    function Numbers_9(){return view('Bible.Old.Numbers.numbers_9');}
    function Numbers_10(){return view('Bible.Old.Numbers.numbers_10');}
    function Numbers_11(){return view('Bible.Old.Numbers.numbers_11');}
    function Numbers_12(){return view('Bible.Old.Numbers.numbers_12');}
    function Numbers_13(){return view('Bible.Old.Numbers.numbers_13');}
    function Numbers_14(){return view('Bible.Old.Numbers.numbers_14');}
    function Numbers_15(){return view('Bible.Old.Numbers.numbers_15');}
    function Numbers_16(){return view('Bible.Old.Numbers.numbers_16');}
    function Numbers_17(){return view('Bible.Old.Numbers.numbers_17');}
    function Numbers_18(){return view('Bible.Old.Numbers.numbers_18');}
    function Numbers_19(){return view('Bible.Old.Numbers.numbers_19');}
    function Numbers_20(){return view('Bible.Old.Numbers.numbers_20');}
    function Numbers_21(){return view('Bible.Old.Numbers.numbers_21');}
    function Numbers_22(){return view('Bible.Old.Numbers.numbers_22');}
    function Numbers_23(){return view('Bible.Old.Numbers.numbers_23');}
    function Numbers_24(){return view('Bible.Old.Numbers.numbers_24');}
    function Numbers_25(){return view('Bible.Old.Numbers.numbers_25');}
    function Numbers_26(){return view('Bible.Old.Numbers.numbers_26');}
    function Numbers_27(){return view('Bible.Old.Numbers.numbers_27');}
    function Numbers_28(){return view('Bible.Old.Numbers.numbers_28');}
    function Numbers_29(){return view('Bible.Old.Numbers.numbers_29');}
    function Numbers_30(){return view('Bible.Old.Numbers.numbers_30');}
    function Numbers_31(){return view('Bible.Old.Numbers.numbers_31');}
    function Numbers_32(){return view('Bible.Old.Numbers.numbers_32');}
    function Numbers_33(){return view('Bible.Old.Numbers.numbers_33');}
    function Numbers_34(){return view('Bible.Old.Numbers.numbers_34');}
    function Numbers_35(){return view('Bible.Old.Numbers.numbers_35');}
    function Numbers_36(){return view('Bible.Old.Numbers.numbers_36');}
    // Numbers
    // Deuteronomy
    function Deuteronomy_1(){return view('Bible.Old.Deuteronomy.deuteronomy_1');}
    function Deuteronomy_2(){return view('Bible.Old.Deuteronomy.deuteronomy_2');}
    function Deuteronomy_3(){return view('Bible.Old.Deuteronomy.deuteronomy_3');}
    function Deuteronomy_4(){return view('Bible.Old.Deuteronomy.deuteronomy_4');}
    function Deuteronomy_5(){return view('Bible.Old.Deuteronomy.deuteronomy_5');}
    function Deuteronomy_6(){return view('Bible.Old.Deuteronomy.deuteronomy_6');}
    function Deuteronomy_7(){return view('Bible.Old.Deuteronomy.deuteronomy_7');}
    function Deuteronomy_8(){return view('Bible.Old.Deuteronomy.deuteronomy_8');}
    function Deuteronomy_9(){return view('Bible.Old.Deuteronomy.deuteronomy_9');}
    function Deuteronomy_10(){return view('Bible.Old.Deuteronomy.deuteronomy_10');}
    function Deuteronomy_11(){return view('Bible.Old.Deuteronomy.deuteronomy_11');}
    function Deuteronomy_12(){return view('Bible.Old.Deuteronomy.deuteronomy_12');}
    function Deuteronomy_13(){return view('Bible.Old.Deuteronomy.deuteronomy_13');}
    function Deuteronomy_14(){return view('Bible.Old.Deuteronomy.deuteronomy_14');}
    function Deuteronomy_15(){return view('Bible.Old.Deuteronomy.deuteronomy_15');}
    function Deuteronomy_16(){return view('Bible.Old.Deuteronomy.deuteronomy_16');}
    function Deuteronomy_17(){return view('Bible.Old.Deuteronomy.deuteronomy_17');}
    function Deuteronomy_18(){return view('Bible.Old.Deuteronomy.deuteronomy_18');}
    function Deuteronomy_19(){return view('Bible.Old.Deuteronomy.deuteronomy_19');}
    function Deuteronomy_20(){return view('Bible.Old.Deuteronomy.deuteronomy_20');}
    function Deuteronomy_21(){return view('Bible.Old.Deuteronomy.deuteronomy_21');}
    function Deuteronomy_22(){return view('Bible.Old.Deuteronomy.deuteronomy_22');}
    function Deuteronomy_23(){return view('Bible.Old.Deuteronomy.deuteronomy_23');}
    function Deuteronomy_24(){return view('Bible.Old.Deuteronomy.deuteronomy_24');}
    function Deuteronomy_25(){return view('Bible.Old.Deuteronomy.deuteronomy_25');}
    function Deuteronomy_26(){return view('Bible.Old.Deuteronomy.deuteronomy_26');}
    function Deuteronomy_27(){return view('Bible.Old.Deuteronomy.deuteronomy_27');}
    function Deuteronomy_28(){return view('Bible.Old.Deuteronomy.deuteronomy_28');}
    function Deuteronomy_29(){return view('Bible.Old.Deuteronomy.deuteronomy_29');}
    function Deuteronomy_30(){return view('Bible.Old.Deuteronomy.deuteronomy_30');}
    function Deuteronomy_31(){return view('Bible.Old.Deuteronomy.deuteronomy_31');}
    function Deuteronomy_32(){return view('Bible.Old.Deuteronomy.deuteronomy_32');}
    function Deuteronomy_33(){return view('Bible.Old.Deuteronomy.deuteronomy_33');}
    function Deuteronomy_34(){return view('Bible.Old.Deuteronomy.deuteronomy_34');}
    // Deuteronomy
    // Joshua
    function Joshua_1(){return view('Bible.Old.Joshua.joshua_1');}
    function Joshua_2(){return view('Bible.Old.Joshua.joshua_2');}
    function Joshua_3(){return view('Bible.Old.Joshua.joshua_3');}
    function Joshua_4(){return view('Bible.Old.Joshua.joshua_4');}
    function Joshua_5(){return view('Bible.Old.Joshua.joshua_5');}
    function Joshua_6(){return view('Bible.Old.Joshua.joshua_6');}
    function Joshua_7(){return view('Bible.Old.Joshua.joshua_7');}
    function Joshua_8(){return view('Bible.Old.Joshua.joshua_8');}
    function Joshua_9(){return view('Bible.Old.Joshua.joshua_9');}
    function Joshua_10(){return view('Bible.Old.Joshua.joshua_10');}
    function Joshua_11(){return view('Bible.Old.Joshua.joshua_11');}
    function Joshua_12(){return view('Bible.Old.Joshua.joshua_12');}
    function Joshua_13(){return view('Bible.Old.Joshua.joshua_13');}
    function Joshua_14(){return view('Bible.Old.Joshua.joshua_14');}
    function Joshua_15(){return view('Bible.Old.Joshua.joshua_15');}
    function Joshua_16(){return view('Bible.Old.Joshua.joshua_16');}
    function Joshua_17(){return view('Bible.Old.Joshua.joshua_17');}
    function Joshua_18(){return view('Bible.Old.Joshua.joshua_18');}
    function Joshua_19(){return view('Bible.Old.Joshua.joshua_19');}
    function Joshua_20(){return view('Bible.Old.Joshua.joshua_20');}
    function Joshua_21(){return view('Bible.Old.Joshua.joshua_21');}
    function Joshua_22(){return view('Bible.Old.Joshua.joshua_22');}
    function Joshua_23(){return view('Bible.Old.Joshua.joshua_23');}
    function Joshua_24(){return view('Bible.Old.Joshua.joshua_24');}
    // Joshua
    // Judges
    function Judges_1(){return view('Bible.Old.Judges.judges_1');}
    function Judges_2(){return view('Bible.Old.Judges.judges_2');}
    function Judges_3(){return view('Bible.Old.Judges.judges_3');}
    function Judges_4(){return view('Bible.Old.Judges.judges_4');}
    function Judges_5(){return view('Bible.Old.Judges.judges_5');}
    function Judges_6(){return view('Bible.Old.Judges.judges_6');}
    function Judges_7(){return view('Bible.Old.Judges.judges_7');}
    function Judges_8(){return view('Bible.Old.Judges.judges_8');}
    function Judges_9(){return view('Bible.Old.Judges.judges_9');}
    function Judges_10(){return view('Bible.Old.Judges.judges_10');}
    function Judges_11(){return view('Bible.Old.Judges.judges_11');}
    function Judges_12(){return view('Bible.Old.Judges.judges_12');}
    function Judges_13(){return view('Bible.Old.Judges.judges_13');}
    function Judges_14(){return view('Bible.Old.Judges.judges_14');}
    function Judges_15(){return view('Bible.Old.Judges.judges_15');}
    function Judges_16(){return view('Bible.Old.Judges.judges_16');}
    function Judges_17(){return view('Bible.Old.Judges.judges_17');}
    function Judges_18(){return view('Bible.Old.Judges.judges_18');}
    function Judges_19(){return view('Bible.Old.Judges.judges_19');}
    function Judges_20(){return view('Bible.Old.Judges.judges_20');}
    function Judges_21(){return view('Bible.Old.Judges.judges_21');}
    // Judges
    // Ruth
    function Ruth_1(){return view('Bible.Old.Ruth.ruth_1');}
    function Ruth_2(){return view('Bible.Old.Ruth.ruth_2');}
    function Ruth_3(){return view('Bible.Old.Ruth.ruth_3');}
    function Ruth_4(){return view('Bible.Old.Ruth.ruth_4');}
    // Ruth
    // 1 Samuel
    function Samuel_1_1(){return view('Bible.Old.Samuel1.samuel1_1');}
    function Samuel_1_2(){return view('Bible.Old.Samuel1.samuel1_2');}
    function Samuel_1_3(){return view('Bible.Old.Samuel1.samuel1_3');}
    function Samuel_1_4(){return view('Bible.Old.Samuel1.samuel1_4');}
    function Samuel_1_5(){return view('Bible.Old.Samuel1.samuel1_5');}
    function Samuel_1_6(){return view('Bible.Old.Samuel1.samuel1_6');}
    function Samuel_1_7(){return view('Bible.Old.Samuel1.samuel1_7');}
    function Samuel_1_8(){return view('Bible.Old.Samuel1.samuel1_8');}
    function Samuel_1_9(){return view('Bible.Old.Samuel1.samuel1_9');}
    function Samuel_1_10(){return view('Bible.Old.Samuel1.samuel1_10');}
    function Samuel_1_11(){return view('Bible.Old.Samuel1.samuel1_11');}
    function Samuel_1_12(){return view('Bible.Old.Samuel1.samuel1_12');}
    function Samuel_1_13(){return view('Bible.Old.Samuel1.samuel1_13');}
    function Samuel_1_14(){return view('Bible.Old.Samuel1.samuel1_14');}
    function Samuel_1_15(){return view('Bible.Old.Samuel1.samuel1_15');}
    function Samuel_1_16(){return view('Bible.Old.Samuel1.samuel1_16');}
    function Samuel_1_17(){return view('Bible.Old.Samuel1.samuel1_17');}
    function Samuel_1_18(){return view('Bible.Old.Samuel1.samuel1_18');}
    function Samuel_1_19(){return view('Bible.Old.Samuel1.samuel1_19');}
    function Samuel_1_20(){return view('Bible.Old.Samuel1.samuel1_20');}
    function Samuel_1_21(){return view('Bible.Old.Samuel1.samuel1_21');}
    function Samuel_1_22(){return view('Bible.Old.Samuel1.samuel1_22');}
    function Samuel_1_23(){return view('Bible.Old.Samuel1.samuel1_23');}
    function Samuel_1_24(){return view('Bible.Old.Samuel1.samuel1_24');}
    function Samuel_1_25(){return view('Bible.Old.Samuel1.samuel1_25');}
    function Samuel_1_26(){return view('Bible.Old.Samuel1.samuel1_26');}
    function Samuel_1_27(){return view('Bible.Old.Samuel1.samuel1_27');}
    function Samuel_1_28(){return view('Bible.Old.Samuel1.samuel1_28');}
    function Samuel_1_29(){return view('Bible.Old.Samuel1.samuel1_29');}
    function Samuel_1_30(){return view('Bible.Old.Samuel1.samuel1_30');}
    function Samuel_1_31(){return view('Bible.Old.Samuel1.samuel1_31');}
    // 1 Samuel
    // 2 Samuel
    function Samuel_2_1(){return view('Bible.Old.Samuel2.samuel2_1');}
    function Samuel_2_2(){return view('Bible.Old.Samuel2.samuel2_2');}
    function Samuel_2_3(){return view('Bible.Old.Samuel2.samuel2_3');}
    function Samuel_2_4(){return view('Bible.Old.Samuel2.samuel2_4');}
    function Samuel_2_5(){return view('Bible.Old.Samuel2.samuel2_5');}
    function Samuel_2_6(){return view('Bible.Old.Samuel2.samuel2_6');}
    function Samuel_2_7(){return view('Bible.Old.Samuel2.samuel2_7');}
    function Samuel_2_8(){return view('Bible.Old.Samuel2.samuel2_8');}
    function Samuel_2_9(){return view('Bible.Old.Samuel2.samuel2_9');}
    function Samuel_2_10(){return view('Bible.Old.Samuel2.samuel2_10');}
    function Samuel_2_11(){return view('Bible.Old.Samuel2.samuel2_11');}
    function Samuel_2_12(){return view('Bible.Old.Samuel2.samuel2_12');}
    function Samuel_2_13(){return view('Bible.Old.Samuel2.samuel2_13');}
    function Samuel_2_14(){return view('Bible.Old.Samuel2.samuel2_14');}
    function Samuel_2_15(){return view('Bible.Old.Samuel2.samuel2_15');}
    function Samuel_2_16(){return view('Bible.Old.Samuel2.samuel2_16');}
    function Samuel_2_17(){return view('Bible.Old.Samuel2.samuel2_17');}
    function Samuel_2_18(){return view('Bible.Old.Samuel2.samuel2_18');}
    function Samuel_2_19(){return view('Bible.Old.Samuel2.samuel2_19');}
    function Samuel_2_20(){return view('Bible.Old.Samuel2.samuel2_20');}
    function Samuel_2_21(){return view('Bible.Old.Samuel2.samuel2_21');}
    function Samuel_2_22(){return view('Bible.Old.Samuel2.samuel2_22');}
    function Samuel_2_23(){return view('Bible.Old.Samuel2.samuel2_23');}
    function Samuel_2_24(){return view('Bible.Old.Samuel2.samuel2_24');}
    // 2 Samuel
    // 1 Kings
    function Kings_1_1(){return view('Bible.Old.Kings1.Kings1_1');}
    function Kings_1_2(){return view('Bible.Old.Kings1.Kings1_2');}
    function Kings_1_3(){return view('Bible.Old.Kings1.Kings1_3');}
    function Kings_1_4(){return view('Bible.Old.Kings1.Kings1_4');}
    function Kings_1_5(){return view('Bible.Old.Kings1.Kings1_5');}
    function Kings_1_6(){return view('Bible.Old.Kings1.Kings1_6');}
    function Kings_1_7(){return view('Bible.Old.Kings1.Kings1_7');}
    function Kings_1_8(){return view('Bible.Old.Kings1.Kings1_8');}
    function Kings_1_9(){return view('Bible.Old.Kings1.Kings1_9');}
    function Kings_1_10(){return view('Bible.Old.Kings1.Kings1_10');}
    function Kings_1_11(){return view('Bible.Old.Kings1.Kings1_11');}
    function Kings_1_12(){return view('Bible.Old.Kings1.Kings1_12');}
    function Kings_1_13(){return view('Bible.Old.Kings1.Kings1_13');}
    function Kings_1_14(){return view('Bible.Old.Kings1.Kings1_14');}
    function Kings_1_15(){return view('Bible.Old.Kings1.Kings1_15');}
    function Kings_1_16(){return view('Bible.Old.Kings1.Kings1_16');}
    function Kings_1_17(){return view('Bible.Old.Kings1.Kings1_17');}
    function Kings_1_18(){return view('Bible.Old.Kings1.Kings1_18');}
    function Kings_1_19(){return view('Bible.Old.Kings1.Kings1_19');}
    function Kings_1_20(){return view('Bible.Old.Kings1.Kings1_20');}
    function Kings_1_21(){return view('Bible.Old.Kings1.Kings1_21');}
    function Kings_1_22(){return view('Bible.Old.Kings1.Kings1_22');}
    // 1 Kings
    // 2 Kings
    function Kings_2_1(){return view('Bible.Old.Kings2.Kings2_1');}
    function Kings_2_2(){return view('Bible.Old.Kings2.Kings2_2');}
    function Kings_2_3(){return view('Bible.Old.Kings2.Kings2_3');}
    function Kings_2_4(){return view('Bible.Old.Kings2.Kings2_4');}
    function Kings_2_5(){return view('Bible.Old.Kings2.Kings2_5');}
    function Kings_2_6(){return view('Bible.Old.Kings2.Kings2_6');}
    function Kings_2_7(){return view('Bible.Old.Kings2.Kings2_7');}
    function Kings_2_8(){return view('Bible.Old.Kings2.Kings2_8');}
    function Kings_2_9(){return view('Bible.Old.Kings2.Kings2_9');}
    function Kings_2_10(){return view('Bible.Old.Kings2.Kings2_10');}
    function Kings_2_11(){return view('Bible.Old.Kings2.Kings2_11');}
    function Kings_2_12(){return view('Bible.Old.Kings2.Kings2_12');}
    function Kings_2_13(){return view('Bible.Old.Kings2.Kings2_13');}
    function Kings_2_14(){return view('Bible.Old.Kings2.Kings2_14');}
    function Kings_2_15(){return view('Bible.Old.Kings2.Kings2_15');}
    function Kings_2_16(){return view('Bible.Old.Kings2.Kings2_16');}
    function Kings_2_17(){return view('Bible.Old.Kings2.Kings2_17');}
    function Kings_2_18(){return view('Bible.Old.Kings2.Kings2_18');}
    function Kings_2_19(){return view('Bible.Old.Kings2.Kings2_19');}
    function Kings_2_20(){return view('Bible.Old.Kings2.Kings2_20');}
    function Kings_2_21(){return view('Bible.Old.Kings2.Kings2_21');}
    function Kings_2_22(){return view('Bible.Old.Kings2.Kings2_22');}
    function Kings_2_23(){return view('Bible.Old.Kings2.Kings2_23');}
    function Kings_2_24(){return view('Bible.Old.Kings2.Kings2_24');}
    function Kings_2_25(){return view('Bible.Old.Kings2.Kings2_25');}
    // 2 Kings
    // 1 Chronicles
    function Chronicles_1_1(){return view('Bible.Old.Chronicles1.chronicles1_1');}
    function Chronicles_1_2(){return view('Bible.Old.Chronicles1.chronicles1_2');}
    function Chronicles_1_3(){return view('Bible.Old.Chronicles1.chronicles1_3');}
    function Chronicles_1_4(){return view('Bible.Old.Chronicles1.chronicles1_4');}
    function Chronicles_1_5(){return view('Bible.Old.Chronicles1.chronicles1_5');}
    function Chronicles_1_6(){return view('Bible.Old.Chronicles1.chronicles1_6');}
    function Chronicles_1_7(){return view('Bible.Old.Chronicles1.chronicles1_7');}
    function Chronicles_1_8(){return view('Bible.Old.Chronicles1.chronicles1_8');}
    function Chronicles_1_9(){return view('Bible.Old.Chronicles1.chronicles1_9');}
    function Chronicles_1_10(){return view('Bible.Old.Chronicles1.chronicles1_10');}
    function Chronicles_1_11(){return view('Bible.Old.Chronicles1.chronicles1_11');}
    function Chronicles_1_12(){return view('Bible.Old.Chronicles1.chronicles1_12');}
    function Chronicles_1_13(){return view('Bible.Old.Chronicles1.chronicles1_13');}
    function Chronicles_1_14(){return view('Bible.Old.Chronicles1.chronicles1_14');}
    function Chronicles_1_15(){return view('Bible.Old.Chronicles1.chronicles1_15');}
    function Chronicles_1_16(){return view('Bible.Old.Chronicles1.chronicles1_16');}
    function Chronicles_1_17(){return view('Bible.Old.Chronicles1.chronicles1_17');}
    function Chronicles_1_18(){return view('Bible.Old.Chronicles1.chronicles1_18');}
    function Chronicles_1_19(){return view('Bible.Old.Chronicles1.chronicles1_19');}
    function Chronicles_1_20(){return view('Bible.Old.Chronicles1.chronicles1_20');}
    function Chronicles_1_21(){return view('Bible.Old.Chronicles1.chronicles1_21');}
    function Chronicles_1_22(){return view('Bible.Old.Chronicles1.chronicles1_22');}
    function Chronicles_1_23(){return view('Bible.Old.Chronicles1.chronicles1_23');}
    function Chronicles_1_24(){return view('Bible.Old.Chronicles1.chronicles1_24');}
    function Chronicles_1_25(){return view('Bible.Old.Chronicles1.chronicles1_25');}
    function Chronicles_1_26(){return view('Bible.Old.Chronicles1.chronicles1_26');}
    function Chronicles_1_27(){return view('Bible.Old.Chronicles1.chronicles1_27');}
    function Chronicles_1_28(){return view('Bible.Old.Chronicles1.chronicles1_28');}
    function Chronicles_1_29(){return view('Bible.Old.Chronicles1.chronicles1_29');}
    // 1 Chronicles
    // 2 Chronicles
    function Chronicles_2_1(){return view('Bible.Old.Chronicles2.chronicles2_1');}
    function Chronicles_2_2(){return view('Bible.Old.Chronicles2.chronicles2_2');}
    function Chronicles_2_3(){return view('Bible.Old.Chronicles2.chronicles2_3');}
    function Chronicles_2_4(){return view('Bible.Old.Chronicles2.chronicles2_4');}
    function Chronicles_2_5(){return view('Bible.Old.Chronicles2.chronicles2_5');}
    function Chronicles_2_6(){return view('Bible.Old.Chronicles2.chronicles2_6');}
    function Chronicles_2_7(){return view('Bible.Old.Chronicles2.chronicles2_7');}
    function Chronicles_2_8(){return view('Bible.Old.Chronicles2.chronicles2_8');}
    function Chronicles_2_9(){return view('Bible.Old.Chronicles2.chronicles2_9');}
    function Chronicles_2_10(){return view('Bible.Old.Chronicles2.chronicles2_10');}
    function Chronicles_2_11(){return view('Bible.Old.Chronicles2.chronicles2_11');}
    function Chronicles_2_12(){return view('Bible.Old.Chronicles2.chronicles2_12');}
    function Chronicles_2_13(){return view('Bible.Old.Chronicles2.chronicles2_13');}
    function Chronicles_2_14(){return view('Bible.Old.Chronicles2.chronicles2_14');}
    function Chronicles_2_15(){return view('Bible.Old.Chronicles2.chronicles2_15');}
    function Chronicles_2_16(){return view('Bible.Old.Chronicles2.chronicles2_16');}
    function Chronicles_2_17(){return view('Bible.Old.Chronicles2.chronicles2_17');}
    function Chronicles_2_18(){return view('Bible.Old.Chronicles2.chronicles2_18');}
    function Chronicles_2_19(){return view('Bible.Old.Chronicles2.chronicles2_19');}
    function Chronicles_2_20(){return view('Bible.Old.Chronicles2.chronicles2_20');}
    function Chronicles_2_21(){return view('Bible.Old.Chronicles2.chronicles2_21');}
    function Chronicles_2_22(){return view('Bible.Old.Chronicles2.chronicles2_22');}
    function Chronicles_2_23(){return view('Bible.Old.Chronicles2.chronicles2_23');}
    function Chronicles_2_24(){return view('Bible.Old.Chronicles2.chronicles2_24');}
    function Chronicles_2_25(){return view('Bible.Old.Chronicles2.chronicles2_25');}
    function Chronicles_2_26(){return view('Bible.Old.Chronicles2.chronicles2_26');}
    function Chronicles_2_27(){return view('Bible.Old.Chronicles2.chronicles2_27');}
    function Chronicles_2_28(){return view('Bible.Old.Chronicles2.chronicles2_28');}
    function Chronicles_2_29(){return view('Bible.Old.Chronicles2.chronicles2_29');}
    function Chronicles_2_30(){return view('Bible.Old.Chronicles2.chronicles2_30');}
    function Chronicles_2_31(){return view('Bible.Old.Chronicles2.chronicles2_31');}
    function Chronicles_2_32(){return view('Bible.Old.Chronicles2.chronicles2_32');}
    function Chronicles_2_33(){return view('Bible.Old.Chronicles2.chronicles2_33');}
    function Chronicles_2_34(){return view('Bible.Old.Chronicles2.chronicles2_34');}
    function Chronicles_2_35(){return view('Bible.Old.Chronicles2.chronicles2_35');}
    function Chronicles_2_36(){return view('Bible.Old.Chronicles2.chronicles2_36');}
    // 2 Chronicles
    // Ezra
    function Ezra_1(){return view('Bible.Old.Ezra.ezra_1');}
    function Ezra_2(){return view('Bible.Old.Ezra.ezra_2');}
    function Ezra_3(){return view('Bible.Old.Ezra.ezra_3');}
    function Ezra_4(){return view('Bible.Old.Ezra.ezra_4');}
    function Ezra_5(){return view('Bible.Old.Ezra.ezra_5');}
    function Ezra_6(){return view('Bible.Old.Ezra.ezra_6');}
    function Ezra_7(){return view('Bible.Old.Ezra.ezra_7');}
    function Ezra_8(){return view('Bible.Old.Ezra.ezra_8');}
    function Ezra_9(){return view('Bible.Old.Ezra.ezra_9');}
    function Ezra_10(){return view('Bible.Old.Ezra.ezra_10');}
    // Ezra
    // Nehemiah
    function Nehemiah_1(){return view('Bible.Old.Nehemiah.nehemiah_1');}
    function Nehemiah_2(){return view('Bible.Old.Nehemiah.nehemiah_2');}
    function Nehemiah_3(){return view('Bible.Old.Nehemiah.nehemiah_3');}
    function Nehemiah_4(){return view('Bible.Old.Nehemiah.nehemiah_4');}
    function Nehemiah_5(){return view('Bible.Old.Nehemiah.nehemiah_5');}
    function Nehemiah_6(){return view('Bible.Old.Nehemiah.nehemiah_6');}
    function Nehemiah_7(){return view('Bible.Old.Nehemiah.nehemiah_7');}
    function Nehemiah_8(){return view('Bible.Old.Nehemiah.nehemiah_8');}
    function Nehemiah_9(){return view('Bible.Old.Nehemiah.nehemiah_9');}
    function Nehemiah_10(){return view('Bible.Old.Nehemiah.nehemiah_10');}
    function Nehemiah_11(){return view('Bible.Old.Nehemiah.nehemiah_11');}
    function Nehemiah_12(){return view('Bible.Old.Nehemiah.nehemiah_12');}
    function Nehemiah_13(){return view('Bible.Old.Nehemiah.nehemiah_13');}
    // Nehemiah
    // Esther
    function Esther_1(){return view('Bible.Old.Esther.esther_1');}
    function Esther_2(){return view('Bible.Old.Esther.esther_2');}
    function Esther_3(){return view('Bible.Old.Esther.esther_3');}
    function Esther_4(){return view('Bible.Old.Esther.esther_4');}
    function Esther_5(){return view('Bible.Old.Esther.esther_5');}
    function Esther_6(){return view('Bible.Old.Esther.esther_6');}
    function Esther_7(){return view('Bible.Old.Esther.esther_7');}
    function Esther_8(){return view('Bible.Old.Esther.esther_8');}
    function Esther_9(){return view('Bible.Old.Esther.esther_9');}
    function Esther_10(){return view('Bible.Old.Esther.esther_10');}
    // Esther
    // Job
    function Job_1(){return view('Bible.Old.Job.job_1');}
    function Job_2(){return view('Bible.Old.Job.job_2');}
    function Job_3(){return view('Bible.Old.Job.job_3');}
    function Job_4(){return view('Bible.Old.Job.job_4');}
    function Job_5(){return view('Bible.Old.Job.job_5');}
    function Job_6(){return view('Bible.Old.Job.job_6');}
    function Job_7(){return view('Bible.Old.Job.job_7');}
    function Job_8(){return view('Bible.Old.Job.job_8');}
    function Job_9(){return view('Bible.Old.Job.job_9');}
    function Job_10(){return view('Bible.Old.Job.job_10');}
    function Job_11(){return view('Bible.Old.Job.job_11');}
    function Job_12(){return view('Bible.Old.Job.job_12');}
    function Job_13(){return view('Bible.Old.Job.job_13');}
    function Job_14(){return view('Bible.Old.Job.job_14');}
    function Job_15(){return view('Bible.Old.Job.job_15');}
    function Job_16(){return view('Bible.Old.Job.job_16');}
    function Job_17(){return view('Bible.Old.Job.job_17');}
    function Job_18(){return view('Bible.Old.Job.job_18');}
    function Job_19(){return view('Bible.Old.Job.job_19');}
    function Job_20(){return view('Bible.Old.Job.job_20');}
    function Job_21(){return view('Bible.Old.Job.job_21');}
    function Job_22(){return view('Bible.Old.Job.job_22');}
    function Job_23(){return view('Bible.Old.Job.job_23');}
    function Job_24(){return view('Bible.Old.Job.job_24');}
    function Job_25(){return view('Bible.Old.Job.job_25');}
    function Job_26(){return view('Bible.Old.Job.job_26');}
    function Job_27(){return view('Bible.Old.Job.job_27');}
    function Job_28(){return view('Bible.Old.Job.job_28');}
    function Job_29(){return view('Bible.Old.Job.job_29');}
    function Job_30(){return view('Bible.Old.Job.job_30');}
    function Job_31(){return view('Bible.Old.Job.job_31');}
    function Job_32(){return view('Bible.Old.Job.job_32');}
    function Job_33(){return view('Bible.Old.Job.job_33');}
    function Job_34(){return view('Bible.Old.Job.job_34');}
    function Job_35(){return view('Bible.Old.Job.job_35');}
    function Job_36(){return view('Bible.Old.Job.job_36');}
    function Job_37(){return view('Bible.Old.Job.job_37');}
    function Job_38(){return view('Bible.Old.Job.job_38');}
    function Job_39(){return view('Bible.Old.Job.job_39');}
    function Job_40(){return view('Bible.Old.Job.job_40');}
    function Job_41(){return view('Bible.Old.Job.job_41');}
    function Job_42(){return view('Bible.Old.Job.job_42');}
    // Job
    // Psalms
    function Psalms_1(){return view('Bible.Old.Psalms.psalms_1');}
    function Psalms_2(){return view('Bible.Old.Psalms.psalms_2');}
    function Psalms_3(){return view('Bible.Old.Psalms.psalms_3');}
    function Psalms_4(){return view('Bible.Old.Psalms.psalms_4');}
    function Psalms_5(){return view('Bible.Old.Psalms.psalms_5');}
    function Psalms_6(){return view('Bible.Old.Psalms.psalms_6');}
    function Psalms_7(){return view('Bible.Old.Psalms.psalms_7');}
    function Psalms_8(){return view('Bible.Old.Psalms.psalms_8');}
    function Psalms_9(){return view('Bible.Old.Psalms.psalms_9');}
    function Psalms_10(){return view('Bible.Old.Psalms.psalms_10');}
    function Psalms_11(){return view('Bible.Old.Psalms.psalms_11');}
    function Psalms_12(){return view('Bible.Old.Psalms.psalms_12');}
    function Psalms_13(){return view('Bible.Old.Psalms.psalms_13');}
    function Psalms_14(){return view('Bible.Old.Psalms.psalms_14');}
    function Psalms_15(){return view('Bible.Old.Psalms.psalms_15');}
    function Psalms_16(){return view('Bible.Old.Psalms.psalms_16');}
    function Psalms_17(){return view('Bible.Old.Psalms.psalms_17');}
    function Psalms_18(){return view('Bible.Old.Psalms.psalms_18');}
    function Psalms_19(){return view('Bible.Old.Psalms.psalms_19');}
    function Psalms_20(){return view('Bible.Old.Psalms.psalms_20');}
    function Psalms_21(){return view('Bible.Old.Psalms.psalms_21');}
    function Psalms_22(){return view('Bible.Old.Psalms.psalms_22');}
    function Psalms_23(){return view('Bible.Old.Psalms.psalms_23');}
    function Psalms_24(){return view('Bible.Old.Psalms.psalms_24');}
    function Psalms_25(){return view('Bible.Old.Psalms.psalms_25');}
    function Psalms_26(){return view('Bible.Old.Psalms.psalms_26');}
    function Psalms_27(){return view('Bible.Old.Psalms.psalms_27');}
    function Psalms_28(){return view('Bible.Old.Psalms.psalms_28');}
    function Psalms_29(){return view('Bible.Old.Psalms.psalms_29');}
    function Psalms_30(){return view('Bible.Old.Psalms.psalms_30');}
    function Psalms_31(){return view('Bible.Old.Psalms.psalms_31');}
    function Psalms_32(){return view('Bible.Old.Psalms.psalms_32');}
    function Psalms_33(){return view('Bible.Old.Psalms.psalms_33');}
    function Psalms_34(){return view('Bible.Old.Psalms.psalms_34');}
    function Psalms_35(){return view('Bible.Old.Psalms.psalms_35');}
    function Psalms_36(){return view('Bible.Old.Psalms.psalms_36');}
    function Psalms_37(){return view('Bible.Old.Psalms.psalms_37');}
    function Psalms_38(){return view('Bible.Old.Psalms.psalms_38');}
    function Psalms_39(){return view('Bible.Old.Psalms.psalms_39');}
    function Psalms_40(){return view('Bible.Old.Psalms.psalms_40');}
    function Psalms_41(){return view('Bible.Old.Psalms.psalms_41');}
    function Psalms_42(){return view('Bible.Old.Psalms.psalms_42');}
    function Psalms_43(){return view('Bible.Old.Psalms.psalms_43');}
    function Psalms_44(){return view('Bible.Old.Psalms.psalms_44');}
    function Psalms_45(){return view('Bible.Old.Psalms.psalms_45');}
    function Psalms_46(){return view('Bible.Old.Psalms.psalms_46');}
    function Psalms_47(){return view('Bible.Old.Psalms.psalms_47');}
    function Psalms_48(){return view('Bible.Old.Psalms.psalms_48');}
    function Psalms_49(){return view('Bible.Old.Psalms.psalms_49');}
    function Psalms_50(){return view('Bible.Old.Psalms.psalms_50');}
    function Psalms_51(){return view('Bible.Old.Psalms.psalms_51');}
    function Psalms_52(){return view('Bible.Old.Psalms.psalms_52');}
    function Psalms_53(){return view('Bible.Old.Psalms.psalms_53');}
    function Psalms_54(){return view('Bible.Old.Psalms.psalms_54');}
    function Psalms_55(){return view('Bible.Old.Psalms.psalms_55');}
    function Psalms_56(){return view('Bible.Old.Psalms.psalms_56');}
    function Psalms_57(){return view('Bible.Old.Psalms.psalms_57');}
    function Psalms_58(){return view('Bible.Old.Psalms.psalms_58');}
    function Psalms_59(){return view('Bible.Old.Psalms.psalms_59');}
    function Psalms_60(){return view('Bible.Old.Psalms.psalms_60');}
    function Psalms_61(){return view('Bible.Old.Psalms.psalms_61');}
    function Psalms_62(){return view('Bible.Old.Psalms.psalms_62');}
    function Psalms_63(){return view('Bible.Old.Psalms.psalms_63');}
    function Psalms_64(){return view('Bible.Old.Psalms.psalms_64');}
    function Psalms_65(){return view('Bible.Old.Psalms.psalms_65');}
    function Psalms_66(){return view('Bible.Old.Psalms.psalms_66');}
    function Psalms_67(){return view('Bible.Old.Psalms.psalms_67');}
    function Psalms_68(){return view('Bible.Old.Psalms.psalms_68');}
    function Psalms_69(){return view('Bible.Old.Psalms.psalms_69');}
    function Psalms_70(){return view('Bible.Old.Psalms.psalms_70');}
    function Psalms_71(){return view('Bible.Old.Psalms.psalms_71');}
    function Psalms_72(){return view('Bible.Old.Psalms.psalms_72');}
    function Psalms_73(){return view('Bible.Old.Psalms.psalms_73');}
    function Psalms_74(){return view('Bible.Old.Psalms.psalms_74');}
    function Psalms_75(){return view('Bible.Old.Psalms.psalms_75');}
    function Psalms_76(){return view('Bible.Old.Psalms.psalms_76');}
    function Psalms_77(){return view('Bible.Old.Psalms.psalms_77');}
    function Psalms_78(){return view('Bible.Old.Psalms.psalms_78');}
    function Psalms_79(){return view('Bible.Old.Psalms.psalms_79');}
    function Psalms_80(){return view('Bible.Old.Psalms.psalms_80');}
    function Psalms_81(){return view('Bible.Old.Psalms.psalms_81');}
    function Psalms_82(){return view('Bible.Old.Psalms.psalms_82');}
    function Psalms_83(){return view('Bible.Old.Psalms.psalms_83');}
    function Psalms_84(){return view('Bible.Old.Psalms.psalms_84');}
    function Psalms_85(){return view('Bible.Old.Psalms.psalms_85');}
    function Psalms_86(){return view('Bible.Old.Psalms.psalms_86');}
    function Psalms_87(){return view('Bible.Old.Psalms.psalms_87');}
    function Psalms_88(){return view('Bible.Old.Psalms.psalms_88');}
    function Psalms_89(){return view('Bible.Old.Psalms.psalms_89');}
    function Psalms_90(){return view('Bible.Old.Psalms.psalms_90');}
    function Psalms_91(){return view('Bible.Old.Psalms.psalms_91');}
    function Psalms_92(){return view('Bible.Old.Psalms.psalms_92');}
    function Psalms_93(){return view('Bible.Old.Psalms.psalms_93');}
    function Psalms_94(){return view('Bible.Old.Psalms.psalms_94');}
    function Psalms_95(){return view('Bible.Old.Psalms.psalms_95');}
    function Psalms_96(){return view('Bible.Old.Psalms.psalms_96');}
    function Psalms_97(){return view('Bible.Old.Psalms.psalms_97');}
    function Psalms_98(){return view('Bible.Old.Psalms.psalms_98');}
    function Psalms_99(){return view('Bible.Old.Psalms.psalms_99');}
    function Psalms_100(){return view('Bible.Old.Psalms.psalms_100');}
    function Psalms_101(){return view('Bible.Old.Psalms.psalms_101');}
    function Psalms_102(){return view('Bible.Old.Psalms.psalms_102');}
    function Psalms_103(){return view('Bible.Old.Psalms.psalms_103');}
    function Psalms_104(){return view('Bible.Old.Psalms.psalms_104');}
    function Psalms_105(){return view('Bible.Old.Psalms.psalms_105');}
    function Psalms_106(){return view('Bible.Old.Psalms.psalms_106');}
    function Psalms_107(){return view('Bible.Old.Psalms.psalms_107');}
    function Psalms_108(){return view('Bible.Old.Psalms.psalms_108');}
    function Psalms_109(){return view('Bible.Old.Psalms.psalms_109');}
    function Psalms_110(){return view('Bible.Old.Psalms.psalms_110');}
    function Psalms_111(){return view('Bible.Old.Psalms.psalms_111');}
    function Psalms_112(){return view('Bible.Old.Psalms.psalms_112');}
    function Psalms_113(){return view('Bible.Old.Psalms.psalms_113');}
    function Psalms_114(){return view('Bible.Old.Psalms.psalms_114');}
    function Psalms_115(){return view('Bible.Old.Psalms.psalms_115');}
    function Psalms_116(){return view('Bible.Old.Psalms.psalms_116');}
    function Psalms_117(){return view('Bible.Old.Psalms.psalms_117');}
    function Psalms_118(){return view('Bible.Old.Psalms.psalms_118');}
    function Psalms_119(){return view('Bible.Old.Psalms.psalms_119');}
    function Psalms_120(){return view('Bible.Old.Psalms.psalms_120');}
    function Psalms_121(){return view('Bible.Old.Psalms.psalms_121');}
    function Psalms_122(){return view('Bible.Old.Psalms.psalms_122');}
    function Psalms_123(){return view('Bible.Old.Psalms.psalms_123');}
    function Psalms_124(){return view('Bible.Old.Psalms.psalms_124');}
    function Psalms_125(){return view('Bible.Old.Psalms.psalms_125');}
    function Psalms_126(){return view('Bible.Old.Psalms.psalms_126');}
    function Psalms_127(){return view('Bible.Old.Psalms.psalms_127');}
    function Psalms_128(){return view('Bible.Old.Psalms.psalms_128');}
    function Psalms_129(){return view('Bible.Old.Psalms.psalms_129');}
    function Psalms_130(){return view('Bible.Old.Psalms.psalms_130');}
    function Psalms_131(){return view('Bible.Old.Psalms.psalms_131');}
    function Psalms_132(){return view('Bible.Old.Psalms.psalms_132');}
    function Psalms_133(){return view('Bible.Old.Psalms.psalms_133');}
    function Psalms_134(){return view('Bible.Old.Psalms.psalms_134');}
    function Psalms_135(){return view('Bible.Old.Psalms.psalms_135');}
    function Psalms_136(){return view('Bible.Old.Psalms.psalms_136');}
    function Psalms_137(){return view('Bible.Old.Psalms.psalms_137');}
    function Psalms_138(){return view('Bible.Old.Psalms.psalms_138');}
    function Psalms_139(){return view('Bible.Old.Psalms.psalms_139');}
    function Psalms_140(){return view('Bible.Old.Psalms.psalms_140');}
    function Psalms_141(){return view('Bible.Old.Psalms.psalms_141');}
    function Psalms_142(){return view('Bible.Old.Psalms.psalms_142');}
    function Psalms_143(){return view('Bible.Old.Psalms.psalms_143');}
    function Psalms_144(){return view('Bible.Old.Psalms.psalms_144');}
    function Psalms_145(){return view('Bible.Old.Psalms.psalms_145');}
    function Psalms_146(){return view('Bible.Old.Psalms.psalms_146');}
    function Psalms_147(){return view('Bible.Old.Psalms.psalms_147');}
    function Psalms_148(){return view('Bible.Old.Psalms.psalms_148');}
    function Psalms_149(){return view('Bible.Old.Psalms.psalms_149');}
    function Psalms_150(){return view('Bible.Old.Psalms.psalms_150');}
    // Psalms
    // Proverbs
    function Proverbs_1(){return view('Bible.Old.Proverbs.proverbs_1');}
    function Proverbs_2(){return view('Bible.Old.Proverbs.proverbs_2');}
    function Proverbs_3(){return view('Bible.Old.Proverbs.proverbs_3');}
    function Proverbs_4(){return view('Bible.Old.Proverbs.proverbs_4');}
    function Proverbs_5(){return view('Bible.Old.Proverbs.proverbs_5');}
    function Proverbs_6(){return view('Bible.Old.Proverbs.proverbs_6');}
    function Proverbs_7(){return view('Bible.Old.Proverbs.proverbs_7');}
    function Proverbs_8(){return view('Bible.Old.Proverbs.proverbs_8');}
    function Proverbs_9(){return view('Bible.Old.Proverbs.proverbs_9');}
    function Proverbs_10(){return view('Bible.Old.Proverbs.proverbs_10');}
    function Proverbs_11(){return view('Bible.Old.Proverbs.proverbs_11');}
    function Proverbs_12(){return view('Bible.Old.Proverbs.proverbs_12');}
    function Proverbs_13(){return view('Bible.Old.Proverbs.proverbs_13');}
    function Proverbs_14(){return view('Bible.Old.Proverbs.proverbs_14');}
    function Proverbs_15(){return view('Bible.Old.Proverbs.proverbs_15');}
    function Proverbs_16(){return view('Bible.Old.Proverbs.proverbs_16');}
    function Proverbs_17(){return view('Bible.Old.Proverbs.proverbs_17');}
    function Proverbs_18(){return view('Bible.Old.Proverbs.proverbs_18');}
    function Proverbs_19(){return view('Bible.Old.Proverbs.proverbs_19');}
    function Proverbs_20(){return view('Bible.Old.Proverbs.proverbs_20');}
    function Proverbs_21(){return view('Bible.Old.Proverbs.proverbs_21');}
    function Proverbs_22(){return view('Bible.Old.Proverbs.proverbs_22');}
    function Proverbs_23(){return view('Bible.Old.Proverbs.proverbs_23');}
    function Proverbs_24(){return view('Bible.Old.Proverbs.proverbs_24');}
    function Proverbs_25(){return view('Bible.Old.Proverbs.proverbs_25');}
    function Proverbs_26(){return view('Bible.Old.Proverbs.proverbs_26');}
    function Proverbs_27(){return view('Bible.Old.Proverbs.proverbs_27');}
    function Proverbs_28(){return view('Bible.Old.Proverbs.proverbs_28');}
    function Proverbs_29(){return view('Bible.Old.Proverbs.proverbs_29');}
    function Proverbs_30(){return view('Bible.Old.Proverbs.proverbs_30');}
    function Proverbs_31(){return view('Bible.Old.Proverbs.proverbs_31');}
    // Proverbs
    // Ecclesiastes
    function Ecclesiastes_1(){return view('Bible.Old.Ecclesiastes.ecclesiastes_1');}
    function Ecclesiastes_2(){return view('Bible.Old.Ecclesiastes.ecclesiastes_2');}
    function Ecclesiastes_3(){return view('Bible.Old.Ecclesiastes.ecclesiastes_3');}
    function Ecclesiastes_4(){return view('Bible.Old.Ecclesiastes.ecclesiastes_4');}
    function Ecclesiastes_5(){return view('Bible.Old.Ecclesiastes.ecclesiastes_5');}
    function Ecclesiastes_6(){return view('Bible.Old.Ecclesiastes.ecclesiastes_6');}
    function Ecclesiastes_7(){return view('Bible.Old.Ecclesiastes.ecclesiastes_7');}
    function Ecclesiastes_8(){return view('Bible.Old.Ecclesiastes.ecclesiastes_8');}
    function Ecclesiastes_9(){return view('Bible.Old.Ecclesiastes.ecclesiastes_9');}
    function Ecclesiastes_10(){return view('Bible.Old.Ecclesiastes.ecclesiastes_10');}
    function Ecclesiastes_11(){return view('Bible.Old.Ecclesiastes.ecclesiastes_11');}
    function Ecclesiastes_12(){return view('Bible.Old.Ecclesiastes.ecclesiastes_12');}
    // Ecclesiastes
    // Song of Solomon
    function Song_of_Solomon_1(){return view('Bible.Old.SongofSolomon.songofsolomon_1');}
    function Song_of_Solomon_2(){return view('Bible.Old.SongofSolomon.songofsolomon_2');}
    function Song_of_Solomon_3(){return view('Bible.Old.SongofSolomon.songofsolomon_3');}
    function Song_of_Solomon_4(){return view('Bible.Old.SongofSolomon.songofsolomon_4');}
    function Song_of_Solomon_5(){return view('Bible.Old.SongofSolomon.songofsolomon_5');}
    function Song_of_Solomon_6(){return view('Bible.Old.SongofSolomon.songofsolomon_6');}
    function Song_of_Solomon_7(){return view('Bible.Old.SongofSolomon.songofsolomon_7');}
    function Song_of_Solomon_8(){return view('Bible.Old.SongofSolomon.songofsolomon_8');}
    // Song of Solomon
    // Isaiah
    function Isaiah_1(){return view('Bible.Old.Isaiah.isaiah_1');}
    function Isaiah_2(){return view('Bible.Old.Isaiah.isaiah_2');}
    function Isaiah_3(){return view('Bible.Old.Isaiah.isaiah_3');}
    function Isaiah_4(){return view('Bible.Old.Isaiah.isaiah_4');}
    function Isaiah_5(){return view('Bible.Old.Isaiah.isaiah_5');}
    function Isaiah_6(){return view('Bible.Old.Isaiah.isaiah_6');}
    function Isaiah_7(){return view('Bible.Old.Isaiah.isaiah_7');}
    function Isaiah_8(){return view('Bible.Old.Isaiah.isaiah_8');}
    function Isaiah_9(){return view('Bible.Old.Isaiah.isaiah_9');}
    function Isaiah_10(){return view('Bible.Old.Isaiah.isaiah_10');}
    function Isaiah_11(){return view('Bible.Old.Isaiah.isaiah_11');}
    function Isaiah_12(){return view('Bible.Old.Isaiah.isaiah_12');}
    function Isaiah_13(){return view('Bible.Old.Isaiah.isaiah_13');}
    function Isaiah_14(){return view('Bible.Old.Isaiah.isaiah_14');}
    function Isaiah_15(){return view('Bible.Old.Isaiah.isaiah_15');}
    function Isaiah_16(){return view('Bible.Old.Isaiah.isaiah_16');}
    function Isaiah_17(){return view('Bible.Old.Isaiah.isaiah_17');}
    function Isaiah_18(){return view('Bible.Old.Isaiah.isaiah_18');}
    function Isaiah_19(){return view('Bible.Old.Isaiah.isaiah_19');}
    function Isaiah_20(){return view('Bible.Old.Isaiah.isaiah_20');}
    function Isaiah_21(){return view('Bible.Old.Isaiah.isaiah_21');}
    function Isaiah_22(){return view('Bible.Old.Isaiah.isaiah_22');}
    function Isaiah_23(){return view('Bible.Old.Isaiah.isaiah_23');}
    function Isaiah_24(){return view('Bible.Old.Isaiah.isaiah_24');}
    function Isaiah_25(){return view('Bible.Old.Isaiah.isaiah_25');}
    function Isaiah_26(){return view('Bible.Old.Isaiah.isaiah_26');}
    function Isaiah_27(){return view('Bible.Old.Isaiah.isaiah_27');}
    function Isaiah_28(){return view('Bible.Old.Isaiah.isaiah_28');}
    function Isaiah_29(){return view('Bible.Old.Isaiah.isaiah_29');}
    function Isaiah_30(){return view('Bible.Old.Isaiah.isaiah_30');}
    function Isaiah_31(){return view('Bible.Old.Isaiah.isaiah_31');}
    function Isaiah_32(){return view('Bible.Old.Isaiah.isaiah_32');}
    function Isaiah_33(){return view('Bible.Old.Isaiah.isaiah_33');}
    function Isaiah_34(){return view('Bible.Old.Isaiah.isaiah_34');}
    function Isaiah_35(){return view('Bible.Old.Isaiah.isaiah_35');}
    function Isaiah_36(){return view('Bible.Old.Isaiah.isaiah_36');}
    function Isaiah_37(){return view('Bible.Old.Isaiah.isaiah_37');}
    function Isaiah_38(){return view('Bible.Old.Isaiah.isaiah_38');}
    function Isaiah_39(){return view('Bible.Old.Isaiah.isaiah_39');}
    function Isaiah_40(){return view('Bible.Old.Isaiah.isaiah_40');}
    function Isaiah_41(){return view('Bible.Old.Isaiah.isaiah_41');}
    function Isaiah_42(){return view('Bible.Old.Isaiah.isaiah_42');}
    function Isaiah_43(){return view('Bible.Old.Isaiah.isaiah_43');}
    function Isaiah_44(){return view('Bible.Old.Isaiah.isaiah_44');}
    function Isaiah_45(){return view('Bible.Old.Isaiah.isaiah_45');}
    function Isaiah_46(){return view('Bible.Old.Isaiah.isaiah_46');}
    function Isaiah_47(){return view('Bible.Old.Isaiah.isaiah_47');}
    function Isaiah_48(){return view('Bible.Old.Isaiah.isaiah_48');}
    function Isaiah_49(){return view('Bible.Old.Isaiah.isaiah_49');}
    function Isaiah_50(){return view('Bible.Old.Isaiah.isaiah_50');}
    function Isaiah_51(){return view('Bible.Old.Isaiah.isaiah_51');}
    function Isaiah_52(){return view('Bible.Old.Isaiah.isaiah_52');}
    function Isaiah_53(){return view('Bible.Old.Isaiah.isaiah_53');}
    function Isaiah_54(){return view('Bible.Old.Isaiah.isaiah_54');}
    function Isaiah_55(){return view('Bible.Old.Isaiah.isaiah_55');}
    function Isaiah_56(){return view('Bible.Old.Isaiah.isaiah_56');}
    function Isaiah_57(){return view('Bible.Old.Isaiah.isaiah_57');}
    function Isaiah_58(){return view('Bible.Old.Isaiah.isaiah_58');}
    function Isaiah_59(){return view('Bible.Old.Isaiah.isaiah_59');}
    function Isaiah_60(){return view('Bible.Old.Isaiah.isaiah_60');}
    function Isaiah_61(){return view('Bible.Old.Isaiah.isaiah_61');}
    function Isaiah_62(){return view('Bible.Old.Isaiah.isaiah_62');}
    function Isaiah_63(){return view('Bible.Old.Isaiah.isaiah_63');}
    function Isaiah_64(){return view('Bible.Old.Isaiah.isaiah_64');}
    function Isaiah_65(){return view('Bible.Old.Isaiah.isaiah_65');}
    function Isaiah_66(){return view('Bible.Old.Isaiah.isaiah_66');}
    // Isaiah
    // Jeremiah
    function Jeremiah_1(){return view('Bible.Old.Jeremiah.jeremiah_1');}
    function Jeremiah_2(){return view('Bible.Old.Jeremiah.jeremiah_2');}
    function Jeremiah_3(){return view('Bible.Old.Jeremiah.jeremiah_3');}
    function Jeremiah_4(){return view('Bible.Old.Jeremiah.jeremiah_4');}
    function Jeremiah_5(){return view('Bible.Old.Jeremiah.jeremiah_5');}
    function Jeremiah_6(){return view('Bible.Old.Jeremiah.jeremiah_6');}
    function Jeremiah_7(){return view('Bible.Old.Jeremiah.jeremiah_7');}
    function Jeremiah_8(){return view('Bible.Old.Jeremiah.jeremiah_8');}
    function Jeremiah_9(){return view('Bible.Old.Jeremiah.jeremiah_9');}
    function Jeremiah_10(){return view('Bible.Old.Jeremiah.jeremiah_10');}
    function Jeremiah_11(){return view('Bible.Old.Jeremiah.jeremiah_11');}
    function Jeremiah_12(){return view('Bible.Old.Jeremiah.jeremiah_12');}
    function Jeremiah_13(){return view('Bible.Old.Jeremiah.jeremiah_13');}
    function Jeremiah_14(){return view('Bible.Old.Jeremiah.jeremiah_14');}
    function Jeremiah_15(){return view('Bible.Old.Jeremiah.jeremiah_15');}
    function Jeremiah_16(){return view('Bible.Old.Jeremiah.jeremiah_16');}
    function Jeremiah_17(){return view('Bible.Old.Jeremiah.jeremiah_17');}
    function Jeremiah_18(){return view('Bible.Old.Jeremiah.jeremiah_18');}
    function Jeremiah_19(){return view('Bible.Old.Jeremiah.jeremiah_19');}
    function Jeremiah_20(){return view('Bible.Old.Jeremiah.jeremiah_20');}
    function Jeremiah_21(){return view('Bible.Old.Jeremiah.jeremiah_21');}
    function Jeremiah_22(){return view('Bible.Old.Jeremiah.jeremiah_22');}
    function Jeremiah_23(){return view('Bible.Old.Jeremiah.jeremiah_23');}
    function Jeremiah_24(){return view('Bible.Old.Jeremiah.jeremiah_24');}
    function Jeremiah_25(){return view('Bible.Old.Jeremiah.jeremiah_25');}
    function Jeremiah_26(){return view('Bible.Old.Jeremiah.jeremiah_26');}
    function Jeremiah_27(){return view('Bible.Old.Jeremiah.jeremiah_27');}
    function Jeremiah_28(){return view('Bible.Old.Jeremiah.jeremiah_28');}
    function Jeremiah_29(){return view('Bible.Old.Jeremiah.jeremiah_29');}
    function Jeremiah_30(){return view('Bible.Old.Jeremiah.jeremiah_30');}
    function Jeremiah_31(){return view('Bible.Old.Jeremiah.jeremiah_31');}
    function Jeremiah_32(){return view('Bible.Old.Jeremiah.jeremiah_32');}
    function Jeremiah_33(){return view('Bible.Old.Jeremiah.jeremiah_33');}
    function Jeremiah_34(){return view('Bible.Old.Jeremiah.jeremiah_34');}
    function Jeremiah_35(){return view('Bible.Old.Jeremiah.jeremiah_35');}
    function Jeremiah_36(){return view('Bible.Old.Jeremiah.jeremiah_36');}
    function Jeremiah_37(){return view('Bible.Old.Jeremiah.jeremiah_37');}
    function Jeremiah_38(){return view('Bible.Old.Jeremiah.jeremiah_38');}
    function Jeremiah_39(){return view('Bible.Old.Jeremiah.jeremiah_39');}
    function Jeremiah_40(){return view('Bible.Old.Jeremiah.jeremiah_40');}
    function Jeremiah_41(){return view('Bible.Old.Jeremiah.jeremiah_41');}
    function Jeremiah_42(){return view('Bible.Old.Jeremiah.jeremiah_42');}
    function Jeremiah_43(){return view('Bible.Old.Jeremiah.jeremiah_43');}
    function Jeremiah_44(){return view('Bible.Old.Jeremiah.jeremiah_44');}
    function Jeremiah_45(){return view('Bible.Old.Jeremiah.jeremiah_45');}
    function Jeremiah_46(){return view('Bible.Old.Jeremiah.jeremiah_46');}
    function Jeremiah_47(){return view('Bible.Old.Jeremiah.jeremiah_47');}
    function Jeremiah_48(){return view('Bible.Old.Jeremiah.jeremiah_48');}
    function Jeremiah_49(){return view('Bible.Old.Jeremiah.jeremiah_49');}
    function Jeremiah_50(){return view('Bible.Old.Jeremiah.jeremiah_50');}
    function Jeremiah_51(){return view('Bible.Old.Jeremiah.jeremiah_51');}
    function Jeremiah_52(){return view('Bible.Old.Jeremiah.jeremiah_52');}
    // Jeremiah
    // Lamentations
    function Lamentations_1(){return view('Bible.Old.Lamentations.lamentations_1');}
    function Lamentations_2(){return view('Bible.Old.Lamentations.lamentations_2');}
    function Lamentations_3(){return view('Bible.Old.Lamentations.lamentations_3');}
    function Lamentations_4(){return view('Bible.Old.Lamentations.lamentations_4');}
    function Lamentations_5(){return view('Bible.Old.Lamentations.lamentations_5');}
    // Lamentations
    // Ezekiel
    function Ezekiel_1(){return view('Bible.Old.Ezekiel.ezekiel_1');}
    function Ezekiel_2(){return view('Bible.Old.Ezekiel.ezekiel_2');}
    function Ezekiel_3(){return view('Bible.Old.Ezekiel.ezekiel_3');}
    function Ezekiel_4(){return view('Bible.Old.Ezekiel.ezekiel_4');}
    function Ezekiel_5(){return view('Bible.Old.Ezekiel.ezekiel_5');}
    function Ezekiel_6(){return view('Bible.Old.Ezekiel.ezekiel_6');}
    function Ezekiel_7(){return view('Bible.Old.Ezekiel.ezekiel_7');}
    function Ezekiel_8(){return view('Bible.Old.Ezekiel.ezekiel_8');}
    function Ezekiel_9(){return view('Bible.Old.Ezekiel.ezekiel_9');}
    function Ezekiel_10(){return view('Bible.Old.Ezekiel.ezekiel_10');}
    function Ezekiel_11(){return view('Bible.Old.Ezekiel.ezekiel_11');}
    function Ezekiel_12(){return view('Bible.Old.Ezekiel.ezekiel_12');}
    function Ezekiel_13(){return view('Bible.Old.Ezekiel.ezekiel_13');}
    function Ezekiel_14(){return view('Bible.Old.Ezekiel.ezekiel_14');}
    function Ezekiel_15(){return view('Bible.Old.Ezekiel.ezekiel_15');}
    function Ezekiel_16(){return view('Bible.Old.Ezekiel.ezekiel_16');}
    function Ezekiel_17(){return view('Bible.Old.Ezekiel.ezekiel_17');}
    function Ezekiel_18(){return view('Bible.Old.Ezekiel.ezekiel_18');}
    function Ezekiel_19(){return view('Bible.Old.Ezekiel.ezekiel_19');}
    function Ezekiel_20(){return view('Bible.Old.Ezekiel.ezekiel_20');}
    function Ezekiel_21(){return view('Bible.Old.Ezekiel.ezekiel_21');}
    function Ezekiel_22(){return view('Bible.Old.Ezekiel.ezekiel_22');}
    function Ezekiel_23(){return view('Bible.Old.Ezekiel.ezekiel_23');}
    function Ezekiel_24(){return view('Bible.Old.Ezekiel.ezekiel_24');}
    function Ezekiel_25(){return view('Bible.Old.Ezekiel.ezekiel_25');}
    function Ezekiel_26(){return view('Bible.Old.Ezekiel.ezekiel_26');}
    function Ezekiel_27(){return view('Bible.Old.Ezekiel.ezekiel_27');}
    function Ezekiel_28(){return view('Bible.Old.Ezekiel.ezekiel_28');}
    function Ezekiel_29(){return view('Bible.Old.Ezekiel.ezekiel_29');}
    function Ezekiel_30(){return view('Bible.Old.Ezekiel.ezekiel_30');}
    function Ezekiel_31(){return view('Bible.Old.Ezekiel.ezekiel_31');}
    function Ezekiel_32(){return view('Bible.Old.Ezekiel.ezekiel_32');}
    function Ezekiel_33(){return view('Bible.Old.Ezekiel.ezekiel_33');}
    function Ezekiel_34(){return view('Bible.Old.Ezekiel.ezekiel_34');}
    function Ezekiel_35(){return view('Bible.Old.Ezekiel.ezekiel_35');}
    function Ezekiel_36(){return view('Bible.Old.Ezekiel.ezekiel_36');}
    function Ezekiel_37(){return view('Bible.Old.Ezekiel.ezekiel_37');}
    function Ezekiel_38(){return view('Bible.Old.Ezekiel.ezekiel_38');}
    function Ezekiel_39(){return view('Bible.Old.Ezekiel.ezekiel_39');}
    function Ezekiel_40(){return view('Bible.Old.Ezekiel.ezekiel_40');}
    function Ezekiel_41(){return view('Bible.Old.Ezekiel.ezekiel_41');}
    function Ezekiel_42(){return view('Bible.Old.Ezekiel.ezekiel_42');}
    function Ezekiel_43(){return view('Bible.Old.Ezekiel.ezekiel_43');}
    function Ezekiel_44(){return view('Bible.Old.Ezekiel.ezekiel_44');}
    function Ezekiel_45(){return view('Bible.Old.Ezekiel.ezekiel_45');}
    function Ezekiel_46(){return view('Bible.Old.Ezekiel.ezekiel_46');}
    function Ezekiel_47(){return view('Bible.Old.Ezekiel.ezekiel_47');}
    function Ezekiel_48(){return view('Bible.Old.Ezekiel.ezekiel_48');}
    // Exekiel
    // Danile
    function Daniel_1(){return view('Bible.Old.Daniel.daniel_1');}
    function Daniel_2(){return view('Bible.Old.Daniel.daniel_2');}
    function Daniel_3(){return view('Bible.Old.Daniel.daniel_3');}
    function Daniel_4(){return view('Bible.Old.Daniel.daniel_4');}
    function Daniel_5(){return view('Bible.Old.Daniel.daniel_5');}
    function Daniel_6(){return view('Bible.Old.Daniel.daniel_6');}
    function Daniel_7(){return view('Bible.Old.Daniel.daniel_7');}
    function Daniel_8(){return view('Bible.Old.Daniel.daniel_8');}
    function Daniel_9(){return view('Bible.Old.Daniel.daniel_9');}
    function Daniel_10(){return view('Bible.Old.Daniel.daniel_10');}
    function Daniel_11(){return view('Bible.Old.Daniel.daniel_11');}
    function Daniel_12(){return view('Bible.Old.Daniel.daniel_12');}
    // Daniel
    // Hosea
    function Hosea_1(){return view('Bible.Old.Hosea.hosea_1');}
    function Hosea_2(){return view('Bible.Old.Hosea.hosea_2');}
    function Hosea_3(){return view('Bible.Old.Hosea.hosea_3');}
    function Hosea_4(){return view('Bible.Old.Hosea.hosea_4');}
    function Hosea_5(){return view('Bible.Old.Hosea.hosea_5');}
    function Hosea_6(){return view('Bible.Old.Hosea.hosea_6');}
    function Hosea_7(){return view('Bible.Old.Hosea.hosea_7');}
    function Hosea_8(){return view('Bible.Old.Hosea.hosea_8');}
    function Hosea_9(){return view('Bible.Old.Hosea.hosea_9');}
    function Hosea_10(){return view('Bible.Old.Hosea.hosea_10');}
    function Hosea_11(){return view('Bible.Old.Hosea.hosea_11');}
    function Hosea_12(){return view('Bible.Old.Hosea.hosea_12');}
    function Hosea_13(){return view('Bible.Old.Hosea.hosea_13');}
    function Hosea_14(){return view('Bible.Old.Hosea.hosea_14');}
    // Hosea
    // Joel
    function Joel_1(){return view('Bible.Old.Joel.joel_1');}
    function Joel_2(){return view('Bible.Old.Joel.joel_2');}
    function Joel_3(){return view('Bible.Old.Joel.joel_3');}
    // Joel
    // Amos
    function Amos_1(){return view('Bible.Old.Amos.amos_1');}
    function Amos_2(){return view('Bible.Old.Amos.amos_2');}
    function Amos_3(){return view('Bible.Old.Amos.amos_3');}
    function Amos_4(){return view('Bible.Old.Amos.amos_4');}
    function Amos_5(){return view('Bible.Old.Amos.amos_5');}
    function Amos_6(){return view('Bible.Old.Amos.amos_6');}
    function Amos_7(){return view('Bible.Old.Amos.amos_7');}
    function Amos_8(){return view('Bible.Old.Amos.amos_8');}
    function Amos_9(){return view('Bible.Old.Amos.amos_9');}
    // Amos
    // Obadiah
    function Obadiah_1(){return view('Bible.Old.Obadiah.obadiah_1');}
    // Obadiah
    // Jonah
    function Jonah_1(){return view('Bible.Old.Jonah.jonah_1');}
    function Jonah_2(){return view('Bible.Old.Jonah.jonah_2');}
    function Jonah_3(){return view('Bible.Old.Jonah.jonah_3');}
    function Jonah_4(){return view('Bible.Old.Jonah.jonah_4');}
    // Jonah
    // Micah
    function Micah_1(){return view('Bible.Old.Micah.micah_1');}
    function Micah_2(){return view('Bible.Old.Micah.micah_2');}
    function Micah_3(){return view('Bible.Old.Micah.micah_3');}
    function Micah_4(){return view('Bible.Old.Micah.micah_4');}
    function Micah_5(){return view('Bible.Old.Micah.micah_5');}
    function Micah_6(){return view('Bible.Old.Micah.micah_6');}
    function Micah_7(){return view('Bible.Old.Micah.micah_7');}
    // Micah
    // Nahum
    function Nahum_1(){return view('Bible.Old.Nahum.nahum_1');}
    function Nahum_2(){return view('Bible.Old.Nahum.nahum_2');}
    function Nahum_3(){return view('Bible.Old.Nahum.nahum_3');}
    // Nahum
    // Habakkuk
    function Habakkuk_1(){return view('Bible.Old.Habakkuk_1');}
    function Habakkuk_2(){return view('Bible.Old.Habakkuk_2');}
    function Habakkuk_3(){return view('Bible.Old.Habakkuk_3');}
    // Habakkuk
    // Zephaniah
    function Zephaniah_1(){return view('Bible.Old.Zephaniah.zephaniah_1');}
    function Zephaniah_2(){return view('Bible.Old.Zephaniah.zephaniah_2');}
    function Zephaniah_3(){return view('Bible.Old.Zephaniah.zephaniah_3');}
    // Zephaniah
    // Haggai
    function Haggai_1(){return view('Bible.Old.Haggai.haggai_1');}
    function Haggai_2(){return view('Bible.Old.Haggai.haggai_2');}
    // Haggai
    // Zechariah
    function Zechariah_1(){return view('Bible.Old.Zechariah.zechariah_1');}
    function Zechariah_2(){return view('Bible.Old.Zechariah.zechariah_2');}
    function Zechariah_3(){return view('Bible.Old.Zechariah.zechariah_3');}
    function Zechariah_4(){return view('Bible.Old.Zechariah.zechariah_4');}
    function Zechariah_5(){return view('Bible.Old.Zechariah.zechariah_5');}
    function Zechariah_6(){return view('Bible.Old.Zechariah.zechariah_6');}
    function Zechariah_7(){return view('Bible.Old.Zechariah.zechariah_7');}
    function Zechariah_8(){return view('Bible.Old.Zechariah.zechariah_8');}
    function Zechariah_9(){return view('Bible.Old.Zechariah.zechariah_9');}
    function Zechariah_10(){return view('Bible.Old.Zechariah.zechariah_10');}
    function Zechariah_11(){return view('Bible.Old.Zechariah.zechariah_11');}
    function Zechariah_12(){return view('Bible.Old.Zechariah.zechariah_12');}
    function Zechariah_13(){return view('Bible.Old.Zechariah.zechariah_13');}
    function Zechariah_14(){return view('Bible.Old.Zechariah.zechariah_14');}
    // Zechariah
    // Malachi
    function Malachi_1(){return view('Bible.Old.Malachi.malachi_1');}
    function Malachi_2(){return view('Bible.Old.Malachi.malachi_2');}
    function Malachi_3(){return view('Bible.Old.Malachi.malachi_3');}
    function Malachi_4(){return view('Bible.Old.Malachi.malachi_4');}
    // Malachi
    // Old Testaments

    // New Testaments
    // Matthew
    function Matthew_1(){return view('Bible.New.Matthew.matthew_1');}
    function Matthew_2(){return view('Bible.New.Matthew.matthew_2');}
    function Matthew_3(){return view('Bible.New.Matthew.matthew_3');}
    function Matthew_4(){return view('Bible.New.Matthew.matthew_4');}
    function Matthew_5(){return view('Bible.New.Matthew.matthew_5');}
    function Matthew_6(){return view('Bible.New.Matthew.matthew_6');}
    function Matthew_7(){return view('Bible.New.Matthew.matthew_7');}
    function Matthew_8(){return view('Bible.New.Matthew.matthew_8');}
    function Matthew_9(){return view('Bible.New.Matthew.matthew_9');}
    function Matthew_10(){return view('Bible.New.Matthew.matthew_10');}
    function Matthew_11(){return view('Bible.New.Matthew.matthew_11');}
    function Matthew_12(){return view('Bible.New.Matthew.matthew_12');}
    function Matthew_13(){return view('Bible.New.Matthew.matthew_13');}
    function Matthew_14(){return view('Bible.New.Matthew.matthew_14');}
    function Matthew_15(){return view('Bible.New.Matthew.matthew_15');}
    function Matthew_16(){return view('Bible.New.Matthew.matthew_16');}
    function Matthew_17(){return view('Bible.New.Matthew.matthew_17');}
    function Matthew_18(){return view('Bible.New.Matthew.matthew_18');}
    function Matthew_19(){return view('Bible.New.Matthew.matthew_19');}
    function Matthew_20(){return view('Bible.New.Matthew.matthew_20');}
    function Matthew_21(){return view('Bible.New.Matthew.matthew_21');}
    function Matthew_22(){return view('Bible.New.Matthew.matthew_22');}
    function Matthew_23(){return view('Bible.New.Matthew.matthew_23');}
    function Matthew_24(){return view('Bible.New.Matthew.matthew_24');}
    function Matthew_25(){return view('Bible.New.Matthew.matthew_25');}
    function Matthew_26(){return view('Bible.New.Matthew.matthew_26');}
    function Matthew_27(){return view('Bible.New.Matthew.matthew_27');}
    function Matthew_28(){return view('Bible.New.Matthew.matthew_28');}
    // Matthew
    // Mark
    function Mark_1(){return view('Bible.New.Mark.mark_1');}
    function Mark_2(){return view('Bible.New.Mark.mark_2');}
    function Mark_3(){return view('Bible.New.Mark.mark_3');}
    function Mark_4(){return view('Bible.New.Mark.mark_4');}
    function Mark_5(){return view('Bible.New.Mark.mark_5');}
    function Mark_6(){return view('Bible.New.Mark.mark_6');}
    function Mark_7(){return view('Bible.New.Mark.mark_7');}
    function Mark_8(){return view('Bible.New.Mark.mark_8');}
    function Mark_9(){return view('Bible.New.Mark.mark_9');}
    function Mark_10(){return view('Bible.New.Mark.mark_10');}
    function Mark_11(){return view('Bible.New.Mark.mark_11');}
    function Mark_12(){return view('Bible.New.Mark.mark_12');}
    function Mark_13(){return view('Bible.New.Mark.mark_13');}
    function Mark_14(){return view('Bible.New.Mark.mark_14');}
    function Mark_15(){return view('Bible.New.Mark.mark_15');}
    function Mark_16(){return view('Bible.New.Mark.mark_16');}
    // Mark
    // Luke
    function Luke_1(){return view('Bible.New.Luke.luke_1');}
    function Luke_2(){return view('Bible.New.Luke.luke_2');}
    function Luke_3(){return view('Bible.New.Luke.luke_3');}
    function Luke_4(){return view('Bible.New.Luke.luke_4');}
    function Luke_5(){return view('Bible.New.Luke.luke_5');}
    function Luke_6(){return view('Bible.New.Luke.luke_6');}
    function Luke_7(){return view('Bible.New.Luke.luke_7');}
    function Luke_8(){return view('Bible.New.Luke.luke_8');}
    function Luke_9(){return view('Bible.New.Luke.luke_9');}
    function Luke_10(){return view('Bible.New.Luke.luke_10');}
    function Luke_11(){return view('Bible.New.Luke.luke_11');}
    function Luke_12(){return view('Bible.New.Luke.luke_12');}
    function Luke_13(){return view('Bible.New.Luke.luke_13');}
    function Luke_14(){return view('Bible.New.Luke.luke_14');}
    function Luke_15(){return view('Bible.New.Luke.luke_15');}
    function Luke_16(){return view('Bible.New.Luke.luke_16');}
    function Luke_17(){return view('Bible.New.Luke.luke_17');}
    function Luke_18(){return view('Bible.New.Luke.luke_18');}
    function Luke_19(){return view('Bible.New.Luke.luke_19');}
    function Luke_20(){return view('Bible.New.Luke.luke_20');}
    function Luke_21(){return view('Bible.New.Luke.luke_21');}
    function Luke_22(){return view('Bible.New.Luke.luke_22');}
    function Luke_23(){return view('Bible.New.Luke.luke_23');}
    function Luke_24(){return view('Bible.New.Luke.luke_24');}
    // Luke
    // John
    function John_1(){return view('Bible.New.John.john_1');}
    function John_2(){return view('Bible.New.John.john_2');}
    function John_3(){return view('Bible.New.John.john_3');}
    function John_4(){return view('Bible.New.John.john_4');}
    function John_5(){return view('Bible.New.John.john_5');}
    function John_6(){return view('Bible.New.John.john_6');}
    function John_7(){return view('Bible.New.John.john_7');}
    function John_8(){return view('Bible.New.John.john_8');}
    function John_9(){return view('Bible.New.John.john_9');}
    function John_10(){return view('Bible.New.John.john_10');}
    function John_11(){return view('Bible.New.John.john_11');}
    function John_12(){return view('Bible.New.John.john_12');}
    function John_13(){return view('Bible.New.John.john_13');}
    function John_14(){return view('Bible.New.John.john_14');}
    function John_15(){return view('Bible.New.John.john_15');}
    function John_16(){return view('Bible.New.John.john_16');}
    function John_17(){return view('Bible.New.John.john_17');}
    function John_18(){return view('Bible.New.John.john_18');}
    function John_19(){return view('Bible.New.John.john_19');}
    function John_20(){return view('Bible.New.John.john_20');}
    function John_21(){return view('Bible.New.John.john_21');}
    // John
    // Acts
    function Acts_1(){return view('Bible.New.Acts.acts_1');}
    function Acts_2(){return view('Bible.New.Acts.acts_2');}
    function Acts_3(){return view('Bible.New.Acts.acts_3');}
    function Acts_4(){return view('Bible.New.Acts.acts_4');}
    function Acts_5(){return view('Bible.New.Acts.acts_5');}
    function Acts_6(){return view('Bible.New.Acts.acts_6');}
    function Acts_7(){return view('Bible.New.Acts.acts_7');}
    function Acts_8(){return view('Bible.New.Acts.acts_8');}
    function Acts_9(){return view('Bible.New.Acts.acts_9');}
    function Acts_10(){return view('Bible.New.Acts.acts_10');}
    function Acts_11(){return view('Bible.New.Acts.acts_11');}
    function Acts_12(){return view('Bible.New.Acts.acts_12');}
    function Acts_13(){return view('Bible.New.Acts.acts_13');}
    function Acts_14(){return view('Bible.New.Acts.acts_14');}
    function Acts_15(){return view('Bible.New.Acts.acts_15');}
    function Acts_16(){return view('Bible.New.Acts.acts_16');}
    function Acts_17(){return view('Bible.New.Acts.acts_17');}
    function Acts_18(){return view('Bible.New.Acts.acts_18');}
    function Acts_19(){return view('Bible.New.Acts.acts_19');}
    function Acts_20(){return view('Bible.New.Acts.acts_20');}
    function Acts_21(){return view('Bible.New.Acts.acts_21');}
    function Acts_22(){return view('Bible.New.Acts.acts_22');}
    function Acts_23(){return view('Bible.New.Acts.acts_23');}
    function Acts_24(){return view('Bible.New.Acts.acts_24');}
    function Acts_25(){return view('Bible.New.Acts.acts_25');}
    function Acts_26(){return view('Bible.New.Acts.acts_26');}
    function Acts_27(){return view('Bible.New.Acts.acts_27');}
    function Acts_28(){return view('Bible.New.Acts.acts_28');}
    // Acts
    // Romans
    function Romans_1(){return view('Bible.New.Romans.romans_1');}
    function Romans_2(){return view('Bible.New.Romans.romans_2');}
    function Romans_3(){return view('Bible.New.Romans.romans_3');}
    function Romans_4(){return view('Bible.New.Romans.romans_4');}
    function Romans_5(){return view('Bible.New.Romans.romans_5');}
    function Romans_6(){return view('Bible.New.Romans.romans_6');}
    function Romans_7(){return view('Bible.New.Romans.romans_7');}
    function Romans_8(){return view('Bible.New.Romans.romans_8');}
    function Romans_9(){return view('Bible.New.Romans.romans_9');}
    function Romans_10(){return view('Bible.New.Romans.romans_10');}
    function Romans_11(){return view('Bible.New.Romans.romans_11');}
    function Romans_12(){return view('Bible.New.Romans.romans_12');}
    function Romans_13(){return view('Bible.New.Romans.romans_13');}
    function Romans_14(){return view('Bible.New.Romans.romans_14');}
    function Romans_15(){return view('Bible.New.Romans.romans_15');}
    function Romans_16(){return view('Bible.New.Romans.romans_16');}
    // Romans
    // 1 Corinthians
    function Corinthians_1_1(){return view('Bible.New.Corinthians1.corinthians1_1');}
    function Corinthians_1_2(){return view('Bible.New.Corinthians1.corinthians1_2');}
    function Corinthians_1_3(){return view('Bible.New.Corinthians1.corinthians1_3');}
    function Corinthians_1_4(){return view('Bible.New.Corinthians1.corinthians1_4');}
    function Corinthians_1_5(){return view('Bible.New.Corinthians1.corinthians1_5');}
    function Corinthians_1_6(){return view('Bible.New.Corinthians1.corinthians1_6');}
    function Corinthians_1_7(){return view('Bible.New.Corinthians1.corinthians1_7');}
    function Corinthians_1_8(){return view('Bible.New.Corinthians1.corinthians1_8');}
    function Corinthians_1_9(){return view('Bible.New.Corinthians1.corinthians1_9');}
    function Corinthians_1_10(){return view('Bible.New.Corinthians1.corinthians1_10');}
    function Corinthians_1_11(){return view('Bible.New.Corinthians1.corinthians1_11');}
    function Corinthians_1_12(){return view('Bible.New.Corinthians1.corinthians1_12');}
    function Corinthians_1_13(){return view('Bible.New.Corinthians1.corinthians1_13');}
    function Corinthians_1_14(){return view('Bible.New.Corinthians1.corinthians1_14');}
    function Corinthians_1_15(){return view('Bible.New.Corinthians1.corinthians1_15');}
    function Corinthians_1_16(){return view('Bible.New.Corinthians1.corinthians1_16');}
    // 1 Corinthians
    // 1 Corinthians
    function Corinthians_2_1(){return view('Bible.New.Corinthians2.corinthians2_1');}
    function Corinthians_2_2(){return view('Bible.New.Corinthians2.corinthians2_2');}
    function Corinthians_2_3(){return view('Bible.New.Corinthians2.corinthians2_3');}
    function Corinthians_2_4(){return view('Bible.New.Corinthians2.corinthians2_4');}
    function Corinthians_2_5(){return view('Bible.New.Corinthians2.corinthians2_5');}
    function Corinthians_2_6(){return view('Bible.New.Corinthians2.corinthians2_6');}
    function Corinthians_2_7(){return view('Bible.New.Corinthians2.corinthians2_7');}
    function Corinthians_2_8(){return view('Bible.New.Corinthians2.corinthians2_8');}
    function Corinthians_2_9(){return view('Bible.New.Corinthians2.corinthians2_9');}
    function Corinthians_2_10(){return view('Bible.New.Corinthians2.corinthians2_10');}
    function Corinthians_2_11(){return view('Bible.New.Corinthians2.corinthians2_11');}
    function Corinthians_2_12(){return view('Bible.New.Corinthians2.corinthians2_12');}
    function Corinthians_2_13(){return view('Bible.New.Corinthians2.corinthians2_13');}
    // 1 Corinthians
    // Galatians
    function Galatians_1(){return view('Bible.New.Galatians.galatians_1');}
    function Galatians_2(){return view('Bible.New.Galatians.galatians_2');}
    function Galatians_3(){return view('Bible.New.Galatians.galatians_3');}
    function Galatians_4(){return view('Bible.New.Galatians.galatians_4');}
    function Galatians_5(){return view('Bible.New.Galatians.galatians_5');}
    function Galatians_6(){return view('Bible.New.Galatians.galatians_6');}
    // Galatians
    // Ephesians
    function Ephesians_1(){return view('Bible.New.Ephesians.ephesians_1');}
    function Ephesians_2(){return view('Bible.New.Ephesians.ephesians_2');}
    function Ephesians_3(){return view('Bible.New.Ephesians.ephesians_3');}
    function Ephesians_4(){return view('Bible.New.Ephesians.ephesians_4');}
    function Ephesians_5(){return view('Bible.New.Ephesians.ephesians_5');}
    function Ephesians_6(){return view('Bible.New.Ephesians.ephesians_6');}
    // Ephesians
    // Philippians
    function Philippians_1(){return view('Bible.New.Philippians.philippians_1');}
    function Philippians_2(){return view('Bible.New.Philippians.philippians_2');}
    function Philippians_3(){return view('Bible.New.Philippians.philippians_3');}
    function Philippians_4(){return view('Bible.New.Philippians.philippians_4');}
    // Philippians
    // Colossians
    function Colossians_1(){return view('Bible.New.Colossians.colossians_1');}
    function Colossians_2(){return view('Bible.New.Colossians.colossians_2');}
    function Colossians_3(){return view('Bible.New.Colossians.colossians_3');}
    function Colossians_4(){return view('Bible.New.Colossians.colossians_4');}
    // Colossians
    // 1 Thessalonians
    function Thessalonians_1_1(){return view('Bible.New.Thessalonians1.thessalonians1_1');}
    function Thessalonians_1_2(){return view('Bible.New.Thessalonians1.thessalonians1_2');}
    function Thessalonians_1_3(){return view('Bible.New.Thessalonians1.thessalonians1_3');}
    function Thessalonians_1_4(){return view('Bible.New.Thessalonians1.thessalonians1_4');}
    function Thessalonians_1_5(){return view('Bible.New.Thessalonians1.thessalonians1_5');}
    // 1 Thessalonians
    // 2 Thessalonians
    function Thessalonians_2_1(){return view('Bible.New.Thessalonians2.thessalonians2_1');}
    function Thessalonians_2_2(){return view('Bible.New.Thessalonians2.thessalonians2_2');}
    function Thessalonians_2_3(){return view('Bible.New.Thessalonians2.thessalonians2_3');}
    // 2 Thessalonians
    // 1 Timothy
    function Timothy_1_1(){return view('Bible.New.Timothy1.timothy1_1');}
    function Timothy_1_2(){return view('Bible.New.Timothy1.timothy1_2');}
    function Timothy_1_3(){return view('Bible.New.Timothy1.timothy1_3');}
    function Timothy_1_4(){return view('Bible.New.Timothy1.timothy1_4');}
    function Timothy_1_5(){return view('Bible.New.Timothy1.timothy1_5');}
    function Timothy_1_6(){return view('Bible.New.Timothy1.timothy1_6');}
    // 1 Timothy
    // 2 Timothy
    function Timothy_2_1(){return view('Bible.New.Timothy2.timothy2_1');}
    function Timothy_2_2(){return view('Bible.New.Timothy2.timothy2_2');}
    function Timothy_2_3(){return view('Bible.New.Timothy2.timothy2_3');}
    function Timothy_2_4(){return view('Bible.New.Timothy2.timothy2_4');}
    // 2 Timothy
    // Titus
    function Titus_1(){return view('Bible.New.Titus.titus_1');}
    function Titus_2(){return view('Bible.New.Titus.titus_2');}
    function Titus_3(){return view('Bible.New.Titus.titus_3');}
    // Titis
    // Philemon
    function Philemon_1(){return view('Bible.New.Philemon.philemon_1');}
    // Philemon
    // Hebrews
    function Hebrews_1(){return view('Bible.New.Hebrews.hebrews_1');}
    function Hebrews_2(){return view('Bible.New.Hebrews.hebrews_2');}
    function Hebrews_3(){return view('Bible.New.Hebrews.hebrews_3');}
    function Hebrews_4(){return view('Bible.New.Hebrews.hebrews_4');}
    function Hebrews_5(){return view('Bible.New.Hebrews.hebrews_5');}
    function Hebrews_6(){return view('Bible.New.Hebrews.hebrews_6');}
    function Hebrews_7(){return view('Bible.New.Hebrews.hebrews_7');}
    function Hebrews_8(){return view('Bible.New.Hebrews.hebrews_8');}
    function Hebrews_9(){return view('Bible.New.Hebrews.hebrews_9');}
    function Hebrews_10(){return view('Bible.New.Hebrews.hebrews_10');}
    function Hebrews_11(){return view('Bible.New.Hebrews.hebrews_11');}
    function Hebrews_12(){return view('Bible.New.Hebrews.hebrews_12');}
    function Hebrews_13(){return view('Bible.New.Hebrews.hebrews_13');}
    // Hebrews
    // James
    function James_1(){return view('Bible.New.James.james_1');}
    function James_2(){return view('Bible.New.James.james_2');}
    function James_3(){return view('Bible.New.James.james_3');}
    function James_4(){return view('Bible.New.James.james_4');}
    function James_5(){return view('Bible.New.James.james_5');}
    // James
    // 1 Peter
    function Peter_1_1(){return view('Bible.New.Peter1.peter1_1');}
    function Peter_1_2(){return view('Bible.New.Peter1.peter1_2');}
    function Peter_1_3(){return view('Bible.New.Peter1.peter1_3');}
    function Peter_1_4(){return view('Bible.New.Peter1.peter1_4');}
    function Peter_1_5(){return view('Bible.New.Peter1.peter1_5');}
    // 1 Peter
    // 2 Peter
    function Peter_2_1(){return view('Bible.New.Peter2.peter2_1');}
    function Peter_2_2(){return view('Bible.New.Peter2.peter2_2');}
    function Peter_2_3(){return view('Bible.New.Peter2.peter2_3');}
    // 2 Peter
     // 1 John
     function John_1_1(){return view('Bible.New.John1.john1_1');}
     function John_1_2(){return view('Bible.New.John1.john1_2');}
     function John_1_3(){return view('Bible.New.John1.john1_3');}
     function John_1_4(){return view('Bible.New.John1.john1_4');}
     function John_1_5(){return view('Bible.New.John1.john1_5');}
     // 1 John
     // 2 John
     function John_2_1(){return view('Bible.New.John2.john2_1');}
     // 2 John
     // 3 John
     function John_3_1(){return view('Bible.New.John3.john3_1');}
     // 3 John
     // Jude
     function Jude_1(){return view('Bible.New.Jude.jude_1');}
     // Jude
    // Revelation
    function Revelation_1(){return view('Bible.New.Revelation.revelation_1');}
    function Revelation_2(){return view('Bible.New.Revelation.revelation_2');}
    function Revelation_3(){return view('Bible.New.Revelation.revelation_3');}
    function Revelation_4(){return view('Bible.New.Revelation.revelation_4');}
    function Revelation_5(){return view('Bible.New.Revelation.revelation_5');}
    function Revelation_6(){return view('Bible.New.Revelation.revelation_6');}
    function Revelation_7(){return view('Bible.New.Revelation.revelation_7');}
    function Revelation_8(){return view('Bible.New.Revelation.revelation_8');}
    function Revelation_9(){return view('Bible.New.Revelation.revelation_9');}
    function Revelation_10(){return view('Bible.New.Revelation.revelation_10');}
    function Revelation_11(){return view('Bible.New.Revelation.revelation_11');}
    function Revelation_12(){return view('Bible.New.Revelation.revelation_12');}
    function Revelation_13(){return view('Bible.New.Revelation.revelation_13');}
    function Revelation_14(){return view('Bible.New.Revelation.revelation_14');}
    function Revelation_15(){return view('Bible.New.Revelation.revelation_15');}
    function Revelation_16(){return view('Bible.New.Revelation.revelation_16');}
    function Revelation_17(){return view('Bible.New.Revelation.revelation_17');}
    function Revelation_18(){return view('Bible.New.Revelation.revelation_18');}
    function Revelation_19(){return view('Bible.New.Revelation.revelation_19');}
    function Revelation_20(){return view('Bible.New.Revelation.revelation_20');}
    function Revelation_21(){return view('Bible.New.Revelation.revelation_21');}
    function Revelation_22(){return view('Bible.New.Revelation.revelation_22');}
    // Revelation
    // New Testaments
}
