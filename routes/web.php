<?php

use App\Http\Controllers\Biblecontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Prayercontroller;
use App\Http\Controllers\Studycontroller;
use Illuminate\Support\Facades\Route;

Route::get("/",[Homecontroller::class,('index')])->name('index');

// Subscribe
Route::post("/",[Homecontroller::class,('Subscribe')])->name('subscribe');
Route::get('/received',[Homecontroller::class,('Received')])->name('received');

Route::get("/contact",[Homecontroller::class,('Contact')])->name('contact');
Route::get("/about",[Homecontroller::class,('About')])->name('about');
Route::get("/book",[Homecontroller::class,('Book')])->name('book');


// Loguout
Route::get("/logout",[Homecontroller::class,('Logout')])->name('logout');
// User acc

// Bibl Study
// gust
Route::get("/study_home",[Studycontroller::class,('Study_Home')])->name('study_home');
// user
Route::get("/bible_study",[Studycontroller::class,('Study_user')])->name('study_user');
Route::get("/bible_study/lesson",[Studycontroller::class,('Lesson')])->name('lesson');
Route::get("/bible_study/profile",[Studycontroller::class,('Profile')])->name('profile');
Route::post("/bible_study/profile",[Studycontroller::class,('Pro_update')])->name('pro_update');
// Lesson
Route::get('/bible_study/bfam',[Studycontroller::class,('BFAM')])->name('bfam');
Route::get('/bible_study/bfam/series/lesson_1_1',[Studycontroller::class,('Con_1_1')])->name('con_1-1');
Route::post('/bible_study/bfam/series/lesson_1_1',[Studycontroller::class,('PostCon_1_1')])->name('postcon_1-1');
Route::get('/bible_study/bfam/series/lesson_1_2',[Studycontroller::class,('Con_1_2')])->name('con_1-2');
Route::post('/bible_study/bfam/series/lesson_1_2',[Studycontroller::class,('PostCon_1_2')])->name('postcon_1-2');
Route::get('/bible_study/bfam/series/lesson_1_3',[Studycontroller::class,('Con_1_3')])->name('con_1-3');
Route::get('/bible_study/bfam/series/lesson_1_4',[Studycontroller::class,('Con_1_4')])->name('con_1-4');
Route::get('/bible_study/bfam/series/lesson_1_5',[Studycontroller::class,('Con_1_5')])->name('con_1-5');
Route::get('/bible_study/bfam/series/lesson_1_6',[Studycontroller::class,('Con_1_6')])->name('con_1-6');
Route::get('/bible_study/bfam/series/lesson_1_7',[Studycontroller::class,('Con_1_7')])->name('con_1-7');
Route::get('/bible_study/bfam/series/lesson_1_8',[Studycontroller::class,('Con_1_8')])->name('con_1-8');
// Sign up
Route::get("/sign_up",[Homecontroller::class,('Sign_up')])->name('sign_up');
Route::post("/sign_up",[Homecontroller::class,('User_Sign_up')])->name('user_sign_up');
// login
Route::get("/login",[Homecontroller::class,('Login')])->name('login');
Route::post("/login",[Homecontroller::class,('User_Login')])->name('user_login');


// Prayer
Route::get("/prayer",[Prayercontroller::class,('Prayer')])->name('prayer');
// Prayer form
Route::post("/prayer",[Prayercontroller::class,('Prayer_form')])->name('prayer_form');

// Bible
Route::get("/bible",[Biblecontroller::class,('Bible_Home')])->name('bible_home');
// Old Testamets
// Genesis
Route::get("/bible/old/genesis_1",[Biblecontroller::class,('Genesis_1')])->name('gen_1');
Route::get("/bible/old/genesis_2",[Biblecontroller::class,('Genesis_2')])->name('gen_2');
Route::get("/bible/old/genesis_3",[Biblecontroller::class,('Genesis_3')])->name('gen_3');
Route::get("/bible/old/genesis_4",[Biblecontroller::class,('Genesis_4')])->name('gen_4');
Route::get("/bible/old/genesis_5",[Biblecontroller::class,('Genesis_5')])->name('gen_5');
Route::get("/bible/old/genesis_6",[Biblecontroller::class,('Genesis_6')])->name('gen_6');
Route::get("/bible/old/genesis_7",[Biblecontroller::class,('Genesis_7')])->name('gen_7');
Route::get("/bible/old/genesis_8",[Biblecontroller::class,('Genesis_8')])->name('gen_8');
Route::get("/bible/old/genesis_9",[Biblecontroller::class,('Genesis_9')])->name('gen_9');
Route::get("/bible/old/genesis_10",[Biblecontroller::class,('Genesis_10')])->name('gen_10');
Route::get("/bible/old/genesis_11",[Biblecontroller::class,('Genesis_11')])->name('gen_11');
Route::get("/bible/old/genesis_12",[Biblecontroller::class,('Genesis_12')])->name('gen_12');
Route::get("/bible/old/genesis_13",[Biblecontroller::class,('Genesis_13')])->name('gen_13');
Route::get("/bible/old/genesis_14",[Biblecontroller::class,('Genesis_14')])->name('gen_14');
Route::get("/bible/old/genesis_15",[Biblecontroller::class,('Genesis_15')])->name('gen_15');
Route::get("/bible/old/genesis_16",[Biblecontroller::class,('Genesis_16')])->name('gen_16');
Route::get("/bible/old/genesis_17",[Biblecontroller::class,('Genesis_17')])->name('gen_17');
Route::get("/bible/old/genesis_18",[Biblecontroller::class,('Genesis_18')])->name('gen_18');
Route::get("/bible/old/genesis_19",[Biblecontroller::class,('Genesis_19')])->name('gen_19');
Route::get("/bible/old/genesis_20",[Biblecontroller::class,('Genesis_20')])->name('gen_20');
Route::get("/bible/old/genesis_21",[Biblecontroller::class,('Genesis_21')])->name('gen_21');
Route::get("/bible/old/genesis_22",[Biblecontroller::class,('Genesis_22')])->name('gen_22');
Route::get("/bible/old/genesis_23",[Biblecontroller::class,('Genesis_23')])->name('gen_23');
Route::get("/bible/old/genesis_24",[Biblecontroller::class,('Genesis_24')])->name('gen_24');
Route::get("/bible/old/genesis_25",[Biblecontroller::class,('Genesis_25')])->name('gen_25');
Route::get("/bible/old/genesis_26",[Biblecontroller::class,('Genesis_26')])->name('gen_26');
Route::get("/bible/old/genesis_27",[Biblecontroller::class,('Genesis_27')])->name('gen_27');
Route::get("/bible/old/genesis_28",[Biblecontroller::class,('Genesis_28')])->name('gen_28');
Route::get("/bible/old/genesis_29",[Biblecontroller::class,('Genesis_29')])->name('gen_29');
Route::get("/bible/old/genesis_30",[Biblecontroller::class,('Genesis_30')])->name('gen_30');
Route::get("/bible/old/genesis_31",[Biblecontroller::class,('Genesis_31')])->name('gen_31');
Route::get("/bible/old/genesis_32",[Biblecontroller::class,('Genesis_32')])->name('gen_32');
Route::get("/bible/old/genesis_33",[Biblecontroller::class,('Genesis_33')])->name('gen_33');
Route::get("/bible/old/genesis_34",[Biblecontroller::class,('Genesis_34')])->name('gen_34');
Route::get("/bible/old/genesis_35",[Biblecontroller::class,('Genesis_35')])->name('gen_35');
Route::get("/bible/old/genesis_36",[Biblecontroller::class,('Genesis_36')])->name('gen_36');
Route::get("/bible/old/genesis_37",[Biblecontroller::class,('Genesis_37')])->name('gen_37');
Route::get("/bible/old/genesis_38",[Biblecontroller::class,('Genesis_38')])->name('gen_38');
Route::get("/bible/old/genesis_39",[Biblecontroller::class,('Genesis_39')])->name('gen_39');
Route::get("/bible/old/genesis_40",[Biblecontroller::class,('Genesis_40')])->name('gen_40');
Route::get("/bible/old/genesis_41",[Biblecontroller::class,('Genesis_41')])->name('gen_41');
Route::get("/bible/old/genesis_42",[Biblecontroller::class,('Genesis_42')])->name('gen_42');
Route::get("/bible/old/genesis_43",[Biblecontroller::class,('Genesis_43')])->name('gen_43');
Route::get("/bible/old/genesis_44",[Biblecontroller::class,('Genesis_44')])->name('gen_44');
Route::get("/bible/old/genesis_45",[Biblecontroller::class,('Genesis_45')])->name('gen_45');
Route::get("/bible/old/genesis_46",[Biblecontroller::class,('Genesis_46')])->name('gen_46');
Route::get("/bible/old/genesis_47",[Biblecontroller::class,('Genesis_47')])->name('gen_47');
Route::get("/bible/old/genesis_48",[Biblecontroller::class,('Genesis_48')])->name('gen_48');
Route::get("/bible/old/genesis_49",[Biblecontroller::class,('Genesis_49')])->name('gen_49');
Route::get("/bible/old/genesis_50",[Biblecontroller::class,('Genesis_50')])->name('gen_50');
// Genesis
// Exodus
Route::get("/bible/old/exodus_1",[Biblecontroller::class,('Exodus_1')])->name('exo_1');
Route::get("/bible/old/exodus_2",[Biblecontroller::class,('Exodus_2')])->name('exo_2');
Route::get("/bible/old/exodus_3",[Biblecontroller::class,('Exodus_3')])->name('exo_3');
Route::get("/bible/old/exodus_4",[Biblecontroller::class,('Exodus_4')])->name('exo_4');
Route::get("/bible/old/exodus_5",[Biblecontroller::class,('Exodus_5')])->name('exo_5');
Route::get("/bible/old/exodus_6",[Biblecontroller::class,('Exodus_6')])->name('exo_6');
Route::get("/bible/old/exodus_7",[Biblecontroller::class,('Exodus_7')])->name('exo_7');
Route::get("/bible/old/exodus_8",[Biblecontroller::class,('Exodus_8')])->name('exo_8');
Route::get("/bible/old/exodus_9",[Biblecontroller::class,('Exodus_9')])->name('exo_9');
Route::get("/bible/old/exodus_10",[Biblecontroller::class,('Exodus_10')])->name('exo_10');
Route::get("/bible/old/exodus_11",[Biblecontroller::class,('Exodus_11')])->name('exo_11');
Route::get("/bible/old/exodus_12",[Biblecontroller::class,('Exodus_12')])->name('exo_12');
Route::get("/bible/old/exodus_13",[Biblecontroller::class,('Exodus_13')])->name('exo_13');
Route::get("/bible/old/exodus_14",[Biblecontroller::class,('Exodus_14')])->name('exo_14');
Route::get("/bible/old/exodus_15",[Biblecontroller::class,('Exodus_15')])->name('exo_15');
Route::get("/bible/old/exodus_16",[Biblecontroller::class,('Exodus_16')])->name('exo_16');
Route::get("/bible/old/exodus_17",[Biblecontroller::class,('Exodus_17')])->name('exo_17');
Route::get("/bible/old/exodus_18",[Biblecontroller::class,('Exodus_18')])->name('exo_18');
Route::get("/bible/old/exodus_19",[Biblecontroller::class,('Exodus_19')])->name('exo_19');
Route::get("/bible/old/exodus_20",[Biblecontroller::class,('Exodus_20')])->name('exo_20');
Route::get("/bible/old/exodus_21",[Biblecontroller::class,('Exodus_21')])->name('exo_21');
Route::get("/bible/old/exodus_22",[Biblecontroller::class,('Exodus_22')])->name('exo_22');
Route::get("/bible/old/exodus_23",[Biblecontroller::class,('Exodus_23')])->name('exo_23');
Route::get("/bible/old/exodus_24",[Biblecontroller::class,('Exodus_24')])->name('exo_24');
Route::get("/bible/old/exodus_25",[Biblecontroller::class,('Exodus_25')])->name('exo_25');
Route::get("/bible/old/exodus_26",[Biblecontroller::class,('Exodus_26')])->name('exo_26');
Route::get("/bible/old/exodus_27",[Biblecontroller::class,('Exodus_27')])->name('exo_27');
Route::get("/bible/old/exodus_28",[Biblecontroller::class,('Exodus_28')])->name('exo_28');
Route::get("/bible/old/exodus_29",[Biblecontroller::class,('Exodus_29')])->name('exo_29');
Route::get("/bible/old/exodus_30",[Biblecontroller::class,('Exodus_30')])->name('exo_30');
Route::get("/bible/old/exodus_31",[Biblecontroller::class,('Exodus_31')])->name('exo_31');
Route::get("/bible/old/exodus_32",[Biblecontroller::class,('Exodus_32')])->name('exo_32');
Route::get("/bible/old/exodus_33",[Biblecontroller::class,('Exodus_33')])->name('exo_33');
Route::get("/bible/old/exodus_34",[Biblecontroller::class,('Exodus_34')])->name('exo_34');
Route::get("/bible/old/exodus_35",[Biblecontroller::class,('Exodus_35')])->name('exo_35');
Route::get("/bible/old/exodus_36",[Biblecontroller::class,('Exodus_36')])->name('exo_36');
Route::get("/bible/old/exodus_37",[Biblecontroller::class,('Exodus_37')])->name('exo_37');
Route::get("/bible/old/exodus_38",[Biblecontroller::class,('Exodus_38')])->name('exo_38');
Route::get("/bible/old/exodus_39",[Biblecontroller::class,('Exodus_39')])->name('exo_39');
Route::get("/bible/old/exodus_40",[Biblecontroller::class,('Exodus_40')])->name('exo_40');
// Exodus
// Leviticus
Route::get("/bible/old/leviticus_1",[Biblecontroller::class,('Leviticus_1')])->name('lev_1');
Route::get("/bible/old/leviticus_2",[Biblecontroller::class,('Leviticus_2')])->name('lev_2');
Route::get("/bible/old/leviticus_3",[Biblecontroller::class,('Leviticus_3')])->name('lev_3');
Route::get("/bible/old/leviticus_4",[Biblecontroller::class,('Leviticus_4')])->name('lev_4');
Route::get("/bible/old/leviticus_5",[Biblecontroller::class,('Leviticus_5')])->name('lev_5');
Route::get("/bible/old/leviticus_6",[Biblecontroller::class,('Leviticus_6')])->name('lev_6');
Route::get("/bible/old/leviticus_7",[Biblecontroller::class,('Leviticus_7')])->name('lev_7');
Route::get("/bible/old/leviticus_8",[Biblecontroller::class,('Leviticus_8')])->name('lev_8');
Route::get("/bible/old/leviticus_9",[Biblecontroller::class,('Leviticus_9')])->name('lev_9');
Route::get("/bible/old/leviticus_10",[Biblecontroller::class,('Leviticus_10')])->name('lev_10');
Route::get("/bible/old/leviticus_11",[Biblecontroller::class,('Leviticus_11')])->name('lev_11');
Route::get("/bible/old/leviticus_12",[Biblecontroller::class,('Leviticus_12')])->name('lev_12');
Route::get("/bible/old/leviticus_13",[Biblecontroller::class,('Leviticus_13')])->name('lev_13');
Route::get("/bible/old/leviticus_14",[Biblecontroller::class,('Leviticus_14')])->name('lev_14');
Route::get("/bible/old/leviticus_15",[Biblecontroller::class,('Leviticus_15')])->name('lev_15');
Route::get("/bible/old/leviticus_16",[Biblecontroller::class,('Leviticus_16')])->name('lev_16');
Route::get("/bible/old/leviticus_17",[Biblecontroller::class,('Leviticus_17')])->name('lev_17');
Route::get("/bible/old/leviticus_18",[Biblecontroller::class,('Leviticus_18')])->name('lev_18');
Route::get("/bible/old/leviticus_19",[Biblecontroller::class,('Leviticus_19')])->name('lev_19');
Route::get("/bible/old/leviticus_20",[Biblecontroller::class,('Leviticus_20')])->name('lev_20');
Route::get("/bible/old/leviticus_21",[Biblecontroller::class,('Leviticus_21')])->name('lev_21');
Route::get("/bible/old/leviticus_22",[Biblecontroller::class,('Leviticus_22')])->name('lev_22');
Route::get("/bible/old/leviticus_23",[Biblecontroller::class,('Leviticus_23')])->name('lev_23');
Route::get("/bible/old/leviticus_24",[Biblecontroller::class,('Leviticus_24')])->name('lev_24');
Route::get("/bible/old/leviticus_25",[Biblecontroller::class,('Leviticus_25')])->name('lev_25');
Route::get("/bible/old/leviticus_26",[Biblecontroller::class,('Leviticus_26')])->name('lev_26');
Route::get("/bible/old/leviticus_27",[Biblecontroller::class,('Leviticus_27')])->name('lev_27');
// Leviticus
// Number 
Route::get("/bible/old/numbers_1",[Biblecontroller::class,('Numbers_1')])->name('num_1');
Route::get("/bible/old/numbers_2",[Biblecontroller::class,('Numbers_2')])->name('num_2');
Route::get("/bible/old/numbers_3",[Biblecontroller::class,('Numbers_3')])->name('num_3');
Route::get("/bible/old/numbers_4",[Biblecontroller::class,('Numbers_4')])->name('num_4');
Route::get("/bible/old/numbers_5",[Biblecontroller::class,('Numbers_5')])->name('num_5');
Route::get("/bible/old/numbers_6",[Biblecontroller::class,('Numbers_6')])->name('num_6');
Route::get("/bible/old/numbers_7",[Biblecontroller::class,('Numbers_7')])->name('num_7');
Route::get("/bible/old/numbers_8",[Biblecontroller::class,('Numbers_8')])->name('num_8');
Route::get("/bible/old/numbers_9",[Biblecontroller::class,('Numbers_9')])->name('num_9');
Route::get("/bible/old/numbers_10",[Biblecontroller::class,('Numbers_10')])->name('num_10');
Route::get("/bible/old/numbers_11",[Biblecontroller::class,('Numbers_11')])->name('num_11');
Route::get("/bible/old/numbers_12",[Biblecontroller::class,('Numbers_12')])->name('num_12');
Route::get("/bible/old/numbers_13",[Biblecontroller::class,('Numbers_13')])->name('num_13');
Route::get("/bible/old/numbers_14",[Biblecontroller::class,('Numbers_14')])->name('num_14');
Route::get("/bible/old/numbers_15",[Biblecontroller::class,('Numbers_15')])->name('num_15');
Route::get("/bible/old/numbers_16",[Biblecontroller::class,('Numbers_16')])->name('num_16');
Route::get("/bible/old/numbers_17",[Biblecontroller::class,('Numbers_17')])->name('num_17');
Route::get("/bible/old/numbers_18",[Biblecontroller::class,('Numbers_18')])->name('num_18');
Route::get("/bible/old/numbers_19",[Biblecontroller::class,('Numbers_19')])->name('num_19');
Route::get("/bible/old/numbers_20",[Biblecontroller::class,('Numbers_20')])->name('num_20');
Route::get("/bible/old/numbers_21",[Biblecontroller::class,('Numbers_21')])->name('num_21');
Route::get("/bible/old/numbers_22",[Biblecontroller::class,('Numbers_22')])->name('num_22');
Route::get("/bible/old/numbers_23",[Biblecontroller::class,('Numbers_23')])->name('num_23');
Route::get("/bible/old/numbers_24",[Biblecontroller::class,('Numbers_24')])->name('num_24');
Route::get("/bible/old/numbers_25",[Biblecontroller::class,('Numbers_25')])->name('num_25');
Route::get("/bible/old/numbers_26",[Biblecontroller::class,('Numbers_26')])->name('num_26');
Route::get("/bible/old/numbers_27",[Biblecontroller::class,('Numbers_27')])->name('num_27');
Route::get("/bible/old/numbers_28",[Biblecontroller::class,('Numbers_28')])->name('num_28');
Route::get("/bible/old/numbers_29",[Biblecontroller::class,('Numbers_29')])->name('num_29');
Route::get("/bible/old/numbers_30",[Biblecontroller::class,('Numbers_30')])->name('num_30');
Route::get("/bible/old/numbers_31",[Biblecontroller::class,('Numbers_31')])->name('num_31');
Route::get("/bible/old/numbers_32",[Biblecontroller::class,('Numbers_32')])->name('num_32');
Route::get("/bible/old/numbers_33",[Biblecontroller::class,('Numbers_33')])->name('num_33');
Route::get("/bible/old/numbers_34",[Biblecontroller::class,('Numbers_34')])->name('num_34');
Route::get("/bible/old/numbers_35",[Biblecontroller::class,('Numbers_35')])->name('num_35');
Route::get("/bible/old/numbers_36",[Biblecontroller::class,('Numbers_36')])->name('num_36');
// Number
// Deuteronomy
Route::get("/bible/old/deuteronomy_1",[Biblecontroller::class,('Deuteronomy_1')])->name('deut_1');
Route::get("/bible/old/deuteronomy_2",[Biblecontroller::class,('Deuteronomy_2')])->name('deut_2');
Route::get("/bible/old/deuteronomy_3",[Biblecontroller::class,('Deuteronomy_3')])->name('deut_3');
Route::get("/bible/old/deuteronomy_4",[Biblecontroller::class,('Deuteronomy_4')])->name('deut_4');
Route::get("/bible/old/deuteronomy_5",[Biblecontroller::class,('Deuteronomy_5')])->name('deut_5');
Route::get("/bible/old/deuteronomy_6",[Biblecontroller::class,('Deuteronomy_6')])->name('deut_6');
Route::get("/bible/old/deuteronomy_7",[Biblecontroller::class,('Deuteronomy_7')])->name('deut_7');
Route::get("/bible/old/deuteronomy_8",[Biblecontroller::class,('Deuteronomy_8')])->name('deut_8');
Route::get("/bible/old/deuteronomy_9",[Biblecontroller::class,('Deuteronomy_9')])->name('deut_9');
Route::get("/bible/old/deuteronomy_10",[Biblecontroller::class,('Deuteronomy_10')])->name('deut_10');
Route::get("/bible/old/deuteronomy_11",[Biblecontroller::class,('Deuteronomy_11')])->name('deut_11');
Route::get("/bible/old/deuteronomy_12",[Biblecontroller::class,('Deuteronomy_12')])->name('deut_12');
Route::get("/bible/old/deuteronomy_13",[Biblecontroller::class,('Deuteronomy_13')])->name('deut_13');
Route::get("/bible/old/deuteronomy_14",[Biblecontroller::class,('Deuteronomy_14')])->name('deut_14');
Route::get("/bible/old/deuteronomy_15",[Biblecontroller::class,('Deuteronomy_15')])->name('deut_15');
Route::get("/bible/old/deuteronomy_16",[Biblecontroller::class,('Deuteronomy_16')])->name('deut_16');
Route::get("/bible/old/deuteronomy_17",[Biblecontroller::class,('Deuteronomy_17')])->name('deut_17');
Route::get("/bible/old/deuteronomy_18",[Biblecontroller::class,('Deuteronomy_18')])->name('deut_18');
Route::get("/bible/old/deuteronomy_19",[Biblecontroller::class,('Deuteronomy_19')])->name('deut_19');
Route::get("/bible/old/deuteronomy_20",[Biblecontroller::class,('Deuteronomy_20')])->name('deut_20');
Route::get("/bible/old/deuteronomy_21",[Biblecontroller::class,('Deuteronomy_21')])->name('deut_21');
Route::get("/bible/old/deuteronomy_22",[Biblecontroller::class,('Deuteronomy_22')])->name('deut_22');
Route::get("/bible/old/deuteronomy_23",[Biblecontroller::class,('Deuteronomy_23')])->name('deut_23');
Route::get("/bible/old/deuteronomy_24",[Biblecontroller::class,('Deuteronomy_24')])->name('deut_24');
Route::get("/bible/old/deuteronomy_25",[Biblecontroller::class,('Deuteronomy_25')])->name('deut_25');
Route::get("/bible/old/deuteronomy_26",[Biblecontroller::class,('Deuteronomy_26')])->name('deut_26');
Route::get("/bible/old/deuteronomy_27",[Biblecontroller::class,('Deuteronomy_27')])->name('deut_27');
Route::get("/bible/old/deuteronomy_28",[Biblecontroller::class,('Deuteronomy_28')])->name('deut_28');
Route::get("/bible/old/deuteronomy_29",[Biblecontroller::class,('Deuteronomy_29')])->name('deut_29');
Route::get("/bible/old/deuteronomy_30",[Biblecontroller::class,('Deuteronomy_30')])->name('deut_30');
Route::get("/bible/old/deuteronomy_31",[Biblecontroller::class,('Deuteronomy_31')])->name('deut_31');
Route::get("/bible/old/deuteronomy_32",[Biblecontroller::class,('Deuteronomy_32')])->name('deut_32');
Route::get("/bible/old/deuteronomy_33",[Biblecontroller::class,('Deuteronomy_33')])->name('deut_33');
Route::get("/bible/old/deuteronomy_34",[Biblecontroller::class,('Deuteronomy_34')])->name('deut_34');
// Deuteronomy
// Joshua
Route::get("/bible/old/joshua_1",[Biblecontroller::class,('Joshua_1')])->name('jos_1');
Route::get("/bible/old/joshua_2",[Biblecontroller::class,('Joshua_2')])->name('jos_2');
Route::get("/bible/old/joshua_3",[Biblecontroller::class,('Joshua_3')])->name('jos_3');
Route::get("/bible/old/joshua_4",[Biblecontroller::class,('Joshua_4')])->name('jos_4');
Route::get("/bible/old/joshua_5",[Biblecontroller::class,('Joshua_5')])->name('jos_5');
Route::get("/bible/old/joshua_6",[Biblecontroller::class,('Joshua_6')])->name('jos_6');
Route::get("/bible/old/joshua_7",[Biblecontroller::class,('Joshua_7')])->name('jos_7');
Route::get("/bible/old/joshua_8",[Biblecontroller::class,('Joshua_8')])->name('jos_8');
Route::get("/bible/old/joshua_9",[Biblecontroller::class,('Joshua_9')])->name('jos_9');
Route::get("/bible/old/joshua_10",[Biblecontroller::class,('Joshua_10')])->name('jos_10');
Route::get("/bible/old/joshua_11",[Biblecontroller::class,('Joshua_11')])->name('jos_11');
Route::get("/bible/old/joshua_12",[Biblecontroller::class,('Joshua_12')])->name('jos_12');
Route::get("/bible/old/joshua_13",[Biblecontroller::class,('Joshua_13')])->name('jos_13');
Route::get("/bible/old/joshua_14",[Biblecontroller::class,('Joshua_14')])->name('jos_14');
Route::get("/bible/old/joshua_15",[Biblecontroller::class,('Joshua_15')])->name('jos_15');
Route::get("/bible/old/joshua_16",[Biblecontroller::class,('Joshua_16')])->name('jos_16');
Route::get("/bible/old/joshua_17",[Biblecontroller::class,('Joshua_17')])->name('jos_17');
Route::get("/bible/old/joshua_18",[Biblecontroller::class,('Joshua_18')])->name('jos_18');
Route::get("/bible/old/joshua_19",[Biblecontroller::class,('Joshua_19')])->name('jos_19');
Route::get("/bible/old/joshua_20",[Biblecontroller::class,('Joshua_20')])->name('jos_20');
Route::get("/bible/old/joshua_21",[Biblecontroller::class,('Joshua_21')])->name('jos_21');
Route::get("/bible/old/joshua_22",[Biblecontroller::class,('Joshua_22')])->name('jos_22');
Route::get("/bible/old/joshua_23",[Biblecontroller::class,('Joshua_23')])->name('jos_23');
Route::get("/bible/old/joshua_24",[Biblecontroller::class,('Joshua_24')])->name('jos_24');
// Joshua
// Judges
Route::get("/bible/old/judges_1",[Biblecontroller::class,('Judges_1')])->name('judg_1');
Route::get("/bible/old/judges_2",[Biblecontroller::class,('Judges_2')])->name('judg_2');
Route::get("/bible/old/judges_3",[Biblecontroller::class,('Judges_3')])->name('judg_3');
Route::get("/bible/old/judges_4",[Biblecontroller::class,('Judges_4')])->name('judg_4');
Route::get("/bible/old/judges_5",[Biblecontroller::class,('Judges_5')])->name('judg_5');
Route::get("/bible/old/judges_6",[Biblecontroller::class,('Judges_6')])->name('judg_6');
Route::get("/bible/old/judges_7",[Biblecontroller::class,('Judges_7')])->name('judg_7');
Route::get("/bible/old/judges_8",[Biblecontroller::class,('Judges_8')])->name('judg_8');
Route::get("/bible/old/judges_9",[Biblecontroller::class,('Judges_9')])->name('judg_9');
Route::get("/bible/old/judges_10",[Biblecontroller::class,('Judges_10')])->name('judg_10');
Route::get("/bible/old/judges_11",[Biblecontroller::class,('Judges_11')])->name('judg_11');
Route::get("/bible/old/judges_12",[Biblecontroller::class,('Judges_12')])->name('judg_12');
Route::get("/bible/old/judges_13",[Biblecontroller::class,('Judges_13')])->name('judg_13');
Route::get("/bible/old/judges_14",[Biblecontroller::class,('Judges_14')])->name('judg_14');
Route::get("/bible/old/judges_15",[Biblecontroller::class,('Judges_15')])->name('judg_15');
Route::get("/bible/old/judges_16",[Biblecontroller::class,('Judges_16')])->name('judg_16');
Route::get("/bible/old/judges_17",[Biblecontroller::class,('Judges_17')])->name('judg_17');
Route::get("/bible/old/judges_18",[Biblecontroller::class,('Judges_18')])->name('judg_18');
Route::get("/bible/old/judges_19",[Biblecontroller::class,('Judges_19')])->name('judg_19');
Route::get("/bible/old/judges_20",[Biblecontroller::class,('Judges_20')])->name('judg_20');
Route::get("/bible/old/judges_21",[Biblecontroller::class,('Judges_21')])->name('judg_21');
// Judges
// Ruth
Route::get("/bible/old/ruth_1",[Biblecontroller::class,('Ruth_1')])->name('ruth_1');
Route::get("/bible/old/ruth_2",[Biblecontroller::class,('Ruth_2')])->name('ruth_2');
Route::get("/bible/old/ruth_3",[Biblecontroller::class,('Ruth_3')])->name('ruth_3');
Route::get("/bible/old/ruth_4",[Biblecontroller::class,('Ruth_4')])->name('ruth_4');
// Ruth
// 1 Samuel
Route::get("/bible/old/1samuel_1",[Biblecontroller::class,('Samuel_1_1')])->name('sam1_1');
Route::get("/bible/old/1samuel_2",[Biblecontroller::class,('Samuel_1_2')])->name('sam1_2');
Route::get("/bible/old/1samuel_3",[Biblecontroller::class,('Samuel_1_3')])->name('sam1_3');
Route::get("/bible/old/1samuel_4",[Biblecontroller::class,('Samuel_1_4')])->name('sam1_4');
Route::get("/bible/old/1samuel_5",[Biblecontroller::class,('Samuel_1_5')])->name('sam1_5');
Route::get("/bible/old/1samuel_6",[Biblecontroller::class,('Samuel_1_6')])->name('sam1_6');
Route::get("/bible/old/1samuel_7",[Biblecontroller::class,('Samuel_1_7')])->name('sam1_7');
Route::get("/bible/old/1samuel_8",[Biblecontroller::class,('Samuel_1_8')])->name('sam1_8');
Route::get("/bible/old/1samuel_9",[Biblecontroller::class,('Samuel_1_9')])->name('sam1_9');
Route::get("/bible/old/1samuel_10",[Biblecontroller::class,('Samuel_1_10')])->name('sam1_10');
Route::get("/bible/old/1samuel_11",[Biblecontroller::class,('Samuel_1_11')])->name('sam1_11');
Route::get("/bible/old/1samuel_12",[Biblecontroller::class,('Samuel_1_12')])->name('sam1_12');
Route::get("/bible/old/1samuel_13",[Biblecontroller::class,('Samuel_1_13')])->name('sam1_13');
Route::get("/bible/old/1samuel_14",[Biblecontroller::class,('Samuel_1_14')])->name('sam1_14');
Route::get("/bible/old/1samuel_15",[Biblecontroller::class,('Samuel_1_15')])->name('sam1_15');
Route::get("/bible/old/1samuel_16",[Biblecontroller::class,('Samuel_1_16')])->name('sam1_16');
Route::get("/bible/old/1samuel_17",[Biblecontroller::class,('Samuel_1_17')])->name('sam1_17');
Route::get("/bible/old/1samuel_18",[Biblecontroller::class,('Samuel_1_18')])->name('sam1_18');
Route::get("/bible/old/1samuel_19",[Biblecontroller::class,('Samuel_1_19')])->name('sam1_19');
Route::get("/bible/old/1samuel_20",[Biblecontroller::class,('Samuel_1_20')])->name('sam1_20');
Route::get("/bible/old/1samuel_21",[Biblecontroller::class,('Samuel_1_21')])->name('sam1_21');
Route::get("/bible/old/1samuel_22",[Biblecontroller::class,('Samuel_1_22')])->name('sam1_22');
Route::get("/bible/old/1samuel_23",[Biblecontroller::class,('Samuel_1_23')])->name('sam1_23');
Route::get("/bible/old/1samuel_24",[Biblecontroller::class,('Samuel_1_24')])->name('sam1_24');
Route::get("/bible/old/1samuel_25",[Biblecontroller::class,('Samuel_1_25')])->name('sam1_25');
Route::get("/bible/old/1samuel_26",[Biblecontroller::class,('Samuel_1_26')])->name('sam1_26');
Route::get("/bible/old/1samuel_27",[Biblecontroller::class,('Samuel_1_27')])->name('sam1_27');
Route::get("/bible/old/1samuel_28",[Biblecontroller::class,('Samuel_1_28')])->name('sam1_28');
Route::get("/bible/old/1samuel_29",[Biblecontroller::class,('Samuel_1_29')])->name('sam1_29');
Route::get("/bible/old/1samuel_30",[Biblecontroller::class,('Samuel_1_30')])->name('sam1_30');
Route::get("/bible/old/1samuel_31",[Biblecontroller::class,('Samuel_1_31')])->name('sam1_31');
// 1 Samuel
// 2 Samuel
Route::get("/bible/old/2samuel_1",[Biblecontroller::class,('Samuel_2_1')])->name('sam2_1');
Route::get("/bible/old/2samuel_2",[Biblecontroller::class,('Samuel_2_2')])->name('sam2_2');
Route::get("/bible/old/2samuel_3",[Biblecontroller::class,('Samuel_2_3')])->name('sam2_3');
Route::get("/bible/old/2samuel_4",[Biblecontroller::class,('Samuel_2_4')])->name('sam2_4');
Route::get("/bible/old/2samuel_5",[Biblecontroller::class,('Samuel_2_5')])->name('sam2_5');
Route::get("/bible/old/2samuel_6",[Biblecontroller::class,('Samuel_2_6')])->name('sam2_6');
Route::get("/bible/old/2samuel_7",[Biblecontroller::class,('Samuel_2_7')])->name('sam2_7');
Route::get("/bible/old/2samuel_8",[Biblecontroller::class,('Samuel_2_8')])->name('sam2_8');
Route::get("/bible/old/2samuel_9",[Biblecontroller::class,('Samuel_2_9')])->name('sam2_9');
Route::get("/bible/old/2samuel_10",[Biblecontroller::class,('Samuel_2_10')])->name('sam2_10');
Route::get("/bible/old/2samuel_11",[Biblecontroller::class,('Samuel_2_11')])->name('sam2_11');
Route::get("/bible/old/2samuel_12",[Biblecontroller::class,('Samuel_2_12')])->name('sam2_12');
Route::get("/bible/old/2samuel_13",[Biblecontroller::class,('Samuel_2_13')])->name('sam2_13');
Route::get("/bible/old/2samuel_14",[Biblecontroller::class,('Samuel_2_14')])->name('sam2_14');
Route::get("/bible/old/2samuel_15",[Biblecontroller::class,('Samuel_2_15')])->name('sam2_15');
Route::get("/bible/old/2samuel_16",[Biblecontroller::class,('Samuel_2_16')])->name('sam2_16');
Route::get("/bible/old/2samuel_17",[Biblecontroller::class,('Samuel_2_17')])->name('sam2_17');
Route::get("/bible/old/2samuel_18",[Biblecontroller::class,('Samuel_2_18')])->name('sam2_18');
Route::get("/bible/old/2samuel_19",[Biblecontroller::class,('Samuel_2_19')])->name('sam2_19');
Route::get("/bible/old/2samuel_20",[Biblecontroller::class,('Samuel_2_20')])->name('sam2_20');
Route::get("/bible/old/2samuel_21",[Biblecontroller::class,('Samuel_2_21')])->name('sam2_21');
Route::get("/bible/old/2samuel_22",[Biblecontroller::class,('Samuel_2_22')])->name('sam2_22');
Route::get("/bible/old/2samuel_23",[Biblecontroller::class,('Samuel_2_23')])->name('sam2_23');
Route::get("/bible/old/2samuel_24",[Biblecontroller::class,('Samuel_2_24')])->name('sam2_24');
// 2 Samuel
// 1 Kings
Route::get("/bible/old/1kings_1",[Biblecontroller::class,('Kings_1_1')])->name('kin1_1');
Route::get("/bible/old/1kings_2",[Biblecontroller::class,('Kings_1_2')])->name('kin1_2');
Route::get("/bible/old/1kings_3",[Biblecontroller::class,('Kings_1_3')])->name('kin1_3');
Route::get("/bible/old/1kings_4",[Biblecontroller::class,('Kings_1_4')])->name('kin1_4');
Route::get("/bible/old/1kings_5",[Biblecontroller::class,('Kings_1_5')])->name('kin1_5');
Route::get("/bible/old/1kings_6",[Biblecontroller::class,('Kings_1_6')])->name('kin1_6');
Route::get("/bible/old/1kings_7",[Biblecontroller::class,('Kings_1_7')])->name('kin1_7');
Route::get("/bible/old/1kings_8",[Biblecontroller::class,('Kings_1_8')])->name('kin1_8');
Route::get("/bible/old/1kings_9",[Biblecontroller::class,('Kings_1_9')])->name('kin1_9');
Route::get("/bible/old/1kings_10",[Biblecontroller::class,('Kings_1_10')])->name('kin1_10');
Route::get("/bible/old/1kings_11",[Biblecontroller::class,('Kings_1_11')])->name('kin1_11');
Route::get("/bible/old/1kings_12",[Biblecontroller::class,('Kings_1_12')])->name('kin1_12');
Route::get("/bible/old/1kings_13",[Biblecontroller::class,('Kings_1_13')])->name('kin1_13');
Route::get("/bible/old/1kings_14",[Biblecontroller::class,('Kings_1_14')])->name('kin1_14');
Route::get("/bible/old/1kings_15",[Biblecontroller::class,('Kings_1_15')])->name('kin1_15');
Route::get("/bible/old/1kings_16",[Biblecontroller::class,('Kings_1_16')])->name('kin1_16');
Route::get("/bible/old/1kings_17",[Biblecontroller::class,('Kings_1_17')])->name('kin1_17');
Route::get("/bible/old/1kings_18",[Biblecontroller::class,('Kings_1_18')])->name('kin1_18');
Route::get("/bible/old/1kings_19",[Biblecontroller::class,('Kings_1_19')])->name('kin1_19');
Route::get("/bible/old/1kings_20",[Biblecontroller::class,('Kings_1_20')])->name('kin1_20');
Route::get("/bible/old/1kings_21",[Biblecontroller::class,('Kings_1_21')])->name('kin1_21');
Route::get("/bible/old/1kings_22",[Biblecontroller::class,('Kings_1_22')])->name('kin1_22');
// 1 Kings
// 2 Kings
Route::get("/bible/old/2kings_1",[Biblecontroller::class,('Kings_2_1')])->name('kin2_1');
Route::get("/bible/old/2kings_2",[Biblecontroller::class,('Kings_2_2')])->name('kin2_2');
Route::get("/bible/old/2kings_3",[Biblecontroller::class,('Kings_2_3')])->name('kin2_3');
Route::get("/bible/old/2kings_4",[Biblecontroller::class,('Kings_2_4')])->name('kin2_4');
Route::get("/bible/old/2kings_5",[Biblecontroller::class,('Kings_2_5')])->name('kin2_5');
Route::get("/bible/old/2kings_6",[Biblecontroller::class,('Kings_2_6')])->name('kin2_6');
Route::get("/bible/old/2kings_7",[Biblecontroller::class,('Kings_2_7')])->name('kin2_7');
Route::get("/bible/old/2kings_8",[Biblecontroller::class,('Kings_2_8')])->name('kin2_8');
Route::get("/bible/old/2kings_9",[Biblecontroller::class,('Kings_2_9')])->name('kin2_9');
Route::get("/bible/old/2kings_10",[Biblecontroller::class,('Kings_2_10')])->name('kin2_10');
Route::get("/bible/old/2kings_11",[Biblecontroller::class,('Kings_2_11')])->name('kin2_11');
Route::get("/bible/old/2kings_12",[Biblecontroller::class,('Kings_2_12')])->name('kin2_12');
Route::get("/bible/old/2kings_13",[Biblecontroller::class,('Kings_2_13')])->name('kin2_13');
Route::get("/bible/old/2kings_14",[Biblecontroller::class,('Kings_2_14')])->name('kin2_14');
Route::get("/bible/old/2kings_15",[Biblecontroller::class,('Kings_2_15')])->name('kin2_15');
Route::get("/bible/old/2kings_16",[Biblecontroller::class,('Kings_2_16')])->name('kin2_16');
Route::get("/bible/old/2kings_17",[Biblecontroller::class,('Kings_2_17')])->name('kin2_17');
Route::get("/bible/old/2kings_18",[Biblecontroller::class,('Kings_2_18')])->name('kin2_18');
Route::get("/bible/old/2kings_19",[Biblecontroller::class,('Kings_2_19')])->name('kin2_19');
Route::get("/bible/old/2kings_20",[Biblecontroller::class,('Kings_2_20')])->name('kin2_20');
Route::get("/bible/old/2kings_21",[Biblecontroller::class,('Kings_2_21')])->name('kin2_21');
Route::get("/bible/old/2kings_22",[Biblecontroller::class,('Kings_2_22')])->name('kin2_22');
Route::get("/bible/old/2kings_23",[Biblecontroller::class,('Kings_2_23')])->name('kin2_23');
Route::get("/bible/old/2kings_24",[Biblecontroller::class,('Kings_2_24')])->name('kin2_24');
Route::get("/bible/old/2kings_25",[Biblecontroller::class,('Kings_2_25')])->name('kin2_25');
// 2 Kings
// 1 Chronicles
Route::get("/bible/old/1chronicles_1",[Biblecontroller::class,('Chronicles_1_1')])->name('chro1_1');
Route::get("/bible/old/1chronicles_2",[Biblecontroller::class,('Chronicles_1_2')])->name('chro1_2');
Route::get("/bible/old/1chronicles_3",[Biblecontroller::class,('Chronicles_1_3')])->name('chro1_3');
Route::get("/bible/old/1chronicles_4",[Biblecontroller::class,('Chronicles_1_4')])->name('chro1_4');
Route::get("/bible/old/1chronicles_5",[Biblecontroller::class,('Chronicles_1_5')])->name('chro1_5');
Route::get("/bible/old/1chronicles_6",[Biblecontroller::class,('Chronicles_1_6')])->name('chro1_6');
Route::get("/bible/old/1chronicles_7",[Biblecontroller::class,('Chronicles_1_7')])->name('chro1_7');
Route::get("/bible/old/1chronicles_8",[Biblecontroller::class,('Chronicles_1_8')])->name('chro1_8');
Route::get("/bible/old/1chronicles_9",[Biblecontroller::class,('Chronicles_1_9')])->name('chro1_9');
Route::get("/bible/old/1chronicles_10",[Biblecontroller::class,('Chronicles_1_10')])->name('chro1_10');
Route::get("/bible/old/1chronicles_11",[Biblecontroller::class,('Chronicles_1_11')])->name('chro1_11');
Route::get("/bible/old/1chronicles_12",[Biblecontroller::class,('Chronicles_1_12')])->name('chro1_12');
Route::get("/bible/old/1chronicles_13",[Biblecontroller::class,('Chronicles_1_13')])->name('chro1_13');
Route::get("/bible/old/1chronicles_14",[Biblecontroller::class,('Chronicles_1_14')])->name('chro1_14');
Route::get("/bible/old/1chronicles_15",[Biblecontroller::class,('Chronicles_1_15')])->name('chro1_15');
Route::get("/bible/old/1chronicles_16",[Biblecontroller::class,('Chronicles_1_16')])->name('chro1_16');
Route::get("/bible/old/1chronicles_17",[Biblecontroller::class,('Chronicles_1_17')])->name('chro1_17');
Route::get("/bible/old/1chronicles_18",[Biblecontroller::class,('Chronicles_1_18')])->name('chro1_18');
Route::get("/bible/old/1chronicles_19",[Biblecontroller::class,('Chronicles_1_19')])->name('chro1_19');
Route::get("/bible/old/1chronicles_20",[Biblecontroller::class,('Chronicles_1_20')])->name('chro1_20');
Route::get("/bible/old/1chronicles_21",[Biblecontroller::class,('Chronicles_1_21')])->name('chro1_21');
Route::get("/bible/old/1chronicles_22",[Biblecontroller::class,('Chronicles_1_22')])->name('chro1_22');
Route::get("/bible/old/1chronicles_23",[Biblecontroller::class,('Chronicles_1_23')])->name('chro1_23');
Route::get("/bible/old/1chronicles_24",[Biblecontroller::class,('Chronicles_1_24')])->name('chro1_24');
Route::get("/bible/old/1chronicles_25",[Biblecontroller::class,('Chronicles_1_25')])->name('chro1_25');
Route::get("/bible/old/1chronicles_26",[Biblecontroller::class,('Chronicles_1_26')])->name('chro1_26');
Route::get("/bible/old/1chronicles_27",[Biblecontroller::class,('Chronicles_1_27')])->name('chro1_27');
Route::get("/bible/old/1chronicles_28",[Biblecontroller::class,('Chronicles_1_28')])->name('chro1_28');
Route::get("/bible/old/1chronicles_29",[Biblecontroller::class,('Chronicles_1_29')])->name('chro1_29');
// 1 Chronicles
// 2 Chronicles
Route::get("/bible/old/2chronicles_1",[Biblecontroller::class,('Chronicles_2_1')])->name('chro2_1');
Route::get("/bible/old/2chronicles_2",[Biblecontroller::class,('Chronicles_2_2')])->name('chro2_2');
Route::get("/bible/old/2chronicles_3",[Biblecontroller::class,('Chronicles_2_3')])->name('chro2_3');
Route::get("/bible/old/2chronicles_4",[Biblecontroller::class,('Chronicles_2_4')])->name('chro2_4');
Route::get("/bible/old/2chronicles_5",[Biblecontroller::class,('Chronicles_2_5')])->name('chro2_5');
Route::get("/bible/old/2chronicles_6",[Biblecontroller::class,('Chronicles_2_6')])->name('chro2_6');
Route::get("/bible/old/2chronicles_7",[Biblecontroller::class,('Chronicles_2_7')])->name('chro2_7');
Route::get("/bible/old/2chronicles_8",[Biblecontroller::class,('Chronicles_2_8')])->name('chro2_8');
Route::get("/bible/old/2chronicles_9",[Biblecontroller::class,('Chronicles_2_9')])->name('chro2_9');
Route::get("/bible/old/2chronicles_10",[Biblecontroller::class,('Chronicles_2_10')])->name('chro2_10');
Route::get("/bible/old/2chronicles_11",[Biblecontroller::class,('Chronicles_2_11')])->name('chro2_11');
Route::get("/bible/old/2chronicles_12",[Biblecontroller::class,('Chronicles_2_12')])->name('chro2_12');
Route::get("/bible/old/2chronicles_13",[Biblecontroller::class,('Chronicles_2_13')])->name('chro2_13');
Route::get("/bible/old/2chronicles_14",[Biblecontroller::class,('Chronicles_2_14')])->name('chro2_14');
Route::get("/bible/old/2chronicles_15",[Biblecontroller::class,('Chronicles_2_15')])->name('chro2_15');
Route::get("/bible/old/2chronicles_16",[Biblecontroller::class,('Chronicles_2_16')])->name('chro2_16');
Route::get("/bible/old/2chronicles_17",[Biblecontroller::class,('Chronicles_2_17')])->name('chro2_17');
Route::get("/bible/old/2chronicles_18",[Biblecontroller::class,('Chronicles_2_18')])->name('chro2_18');
Route::get("/bible/old/2chronicles_19",[Biblecontroller::class,('Chronicles_2_19')])->name('chro2_19');
Route::get("/bible/old/2chronicles_20",[Biblecontroller::class,('Chronicles_2_20')])->name('chro2_20');
Route::get("/bible/old/2chronicles_21",[Biblecontroller::class,('Chronicles_2_21')])->name('chro2_21');
Route::get("/bible/old/2chronicles_22",[Biblecontroller::class,('Chronicles_2_22')])->name('chro2_22');
Route::get("/bible/old/2chronicles_23",[Biblecontroller::class,('Chronicles_2_23')])->name('chro2_23');
Route::get("/bible/old/2chronicles_24",[Biblecontroller::class,('Chronicles_2_24')])->name('chro2_24');
Route::get("/bible/old/2chronicles_25",[Biblecontroller::class,('Chronicles_2_25')])->name('chro2_25');
Route::get("/bible/old/2chronicles_26",[Biblecontroller::class,('Chronicles_2_26')])->name('chro2_26');
Route::get("/bible/old/2chronicles_27",[Biblecontroller::class,('Chronicles_2_27')])->name('chro2_27');
Route::get("/bible/old/2chronicles_28",[Biblecontroller::class,('Chronicles_2_28')])->name('chro2_28');
Route::get("/bible/old/2chronicles_29",[Biblecontroller::class,('Chronicles_2_29')])->name('chro2_29');
Route::get("/bible/old/2chronicles_30",[Biblecontroller::class,('Chronicles_2_30')])->name('chro2_30');
Route::get("/bible/old/2chronicles_31",[Biblecontroller::class,('Chronicles_2_31')])->name('chro2_31');
Route::get("/bible/old/2chronicles_32",[Biblecontroller::class,('Chronicles_2_32')])->name('chro2_32');
Route::get("/bible/old/2chronicles_33",[Biblecontroller::class,('Chronicles_2_33')])->name('chro2_33');
Route::get("/bible/old/2chronicles_34",[Biblecontroller::class,('Chronicles_2_34')])->name('chro2_34');
Route::get("/bible/old/2chronicles_35",[Biblecontroller::class,('Chronicles_2_35')])->name('chro2_35');
Route::get("/bible/old/2chronicles_36",[Biblecontroller::class,('Chronicles_2_36')])->name('chro2_36');
// 2 Chronicles
// Ezra
Route::get("/bible/old/Ezra_1",[Biblecontroller::class,('Ezra_1')])->name('ezra_1');
Route::get("/bible/old/Ezra_2",[Biblecontroller::class,('Ezra_2')])->name('ezra_2');
Route::get("/bible/old/Ezra_3",[Biblecontroller::class,('Ezra_3')])->name('ezra_3');
Route::get("/bible/old/Ezra_4",[Biblecontroller::class,('Ezra_4')])->name('ezra_4');
Route::get("/bible/old/Ezra_5",[Biblecontroller::class,('Ezra_5')])->name('ezra_5');
Route::get("/bible/old/Ezra_6",[Biblecontroller::class,('Ezra_6')])->name('ezra_6');
Route::get("/bible/old/Ezra_7",[Biblecontroller::class,('Ezra_7')])->name('ezra_7');
Route::get("/bible/old/Ezra_8",[Biblecontroller::class,('Ezra_8')])->name('ezra_8');
Route::get("/bible/old/Ezra_9",[Biblecontroller::class,('Ezra_9')])->name('ezra_9');
Route::get("/bible/old/Ezra_10",[Biblecontroller::class,('Ezra_10')])->name('ezra_10');
// Ezra
// Nehemiah
Route::get("/bible/old/nehemiah_1",[Biblecontroller::class,('Nehemiah_1')])->name('neh_1');
Route::get("/bible/old/nehemiah_2",[Biblecontroller::class,('Nehemiah_2')])->name('neh_2');
Route::get("/bible/old/nehemiah_3",[Biblecontroller::class,('Nehemiah_3')])->name('neh_3');
Route::get("/bible/old/nehemiah_4",[Biblecontroller::class,('Nehemiah_4')])->name('neh_4');
Route::get("/bible/old/nehemiah_5",[Biblecontroller::class,('Nehemiah_5')])->name('neh_5');
Route::get("/bible/old/nehemiah_6",[Biblecontroller::class,('Nehemiah_6')])->name('neh_6');
Route::get("/bible/old/nehemiah_7",[Biblecontroller::class,('Nehemiah_7')])->name('neh_7');
Route::get("/bible/old/nehemiah_8",[Biblecontroller::class,('Nehemiah_8')])->name('neh_8');
Route::get("/bible/old/nehemiah_9",[Biblecontroller::class,('Nehemiah_9')])->name('neh_9');
Route::get("/bible/old/nehemiah_10",[Biblecontroller::class,('Nehemiah_10')])->name('neh_10');
Route::get("/bible/old/nehemiah_11",[Biblecontroller::class,('Nehemiah_11')])->name('neh_11');
Route::get("/bible/old/nehemiah_12",[Biblecontroller::class,('Nehemiah_12')])->name('neh_12');
Route::get("/bible/old/nehemiah_13",[Biblecontroller::class,('Nehemiah_13')])->name('neh_13');
// Nehemiah
// Esther
Route::get("/bible/old/esther_1",[Biblecontroller::class,('Esther_1')])->name('est_1');
Route::get("/bible/old/esther_2",[Biblecontroller::class,('Esther_2')])->name('est_2');
Route::get("/bible/old/esther_3",[Biblecontroller::class,('Esther_3')])->name('est_3');
Route::get("/bible/old/esther_4",[Biblecontroller::class,('Esther_4')])->name('est_4');
Route::get("/bible/old/esther_5",[Biblecontroller::class,('Esther_5')])->name('est_5');
Route::get("/bible/old/esther_6",[Biblecontroller::class,('Esther_6')])->name('est_6');
Route::get("/bible/old/esther_7",[Biblecontroller::class,('Esther_7')])->name('est_7');
Route::get("/bible/old/esther_8",[Biblecontroller::class,('Esther_8')])->name('est_8');
Route::get("/bible/old/esther_9",[Biblecontroller::class,('Esther_9')])->name('est_9');
Route::get("/bible/old/esther_10",[Biblecontroller::class,('Esther_10')])->name('est_10');
// Esther
// Job
Route::get("/bible/old/job_1",[Biblecontroller::class,('Job_1')])->name('job_1');
Route::get("/bible/old/job_2",[Biblecontroller::class,('Job_2')])->name('job_2');
Route::get("/bible/old/job_3",[Biblecontroller::class,('Job_3')])->name('job_3');
Route::get("/bible/old/job_4",[Biblecontroller::class,('Job_4')])->name('job_4');
Route::get("/bible/old/job_5",[Biblecontroller::class,('Job_5')])->name('job_5');
Route::get("/bible/old/job_6",[Biblecontroller::class,('Job_6')])->name('job_6');
Route::get("/bible/old/job_7",[Biblecontroller::class,('Job_7')])->name('job_7');
Route::get("/bible/old/job_8",[Biblecontroller::class,('Job_8')])->name('job_8');
Route::get("/bible/old/job_9",[Biblecontroller::class,('Job_9')])->name('job_9');
Route::get("/bible/old/job_10",[Biblecontroller::class,('Job_10')])->name('job_10');
Route::get("/bible/old/job_11",[Biblecontroller::class,('Job_11')])->name('job_11');
Route::get("/bible/old/job_12",[Biblecontroller::class,('Job_12')])->name('job_12');
Route::get("/bible/old/job_13",[Biblecontroller::class,('Job_13')])->name('job_13');
Route::get("/bible/old/job_14",[Biblecontroller::class,('Job_14')])->name('job_14');
Route::get("/bible/old/job_15",[Biblecontroller::class,('Job_15')])->name('job_15');
Route::get("/bible/old/job_16",[Biblecontroller::class,('Job_16')])->name('job_16');
Route::get("/bible/old/job_17",[Biblecontroller::class,('Job_17')])->name('job_17');
Route::get("/bible/old/job_18",[Biblecontroller::class,('Job_18')])->name('job_18');
Route::get("/bible/old/job_19",[Biblecontroller::class,('Job_19')])->name('job_19');
Route::get("/bible/old/job_20",[Biblecontroller::class,('Job_20')])->name('job_20');
Route::get("/bible/old/job_21",[Biblecontroller::class,('Job_21')])->name('job_21');
Route::get("/bible/old/job_22",[Biblecontroller::class,('Job_22')])->name('job_22');
Route::get("/bible/old/job_23",[Biblecontroller::class,('Job_23')])->name('job_23');
Route::get("/bible/old/job_24",[Biblecontroller::class,('Job_24')])->name('job_24');
Route::get("/bible/old/job_25",[Biblecontroller::class,('Job_25')])->name('job_25');
Route::get("/bible/old/job_26",[Biblecontroller::class,('Job_26')])->name('job_26');
Route::get("/bible/old/job_27",[Biblecontroller::class,('Job_27')])->name('job_27');
Route::get("/bible/old/job_28",[Biblecontroller::class,('Job_28')])->name('job_28');
Route::get("/bible/old/job_29",[Biblecontroller::class,('Job_29')])->name('job_29');
Route::get("/bible/old/job_30",[Biblecontroller::class,('Job_30')])->name('job_30');
Route::get("/bible/old/job_31",[Biblecontroller::class,('Job_31')])->name('job_31');
Route::get("/bible/old/job_32",[Biblecontroller::class,('Job_32')])->name('job_32');
Route::get("/bible/old/job_33",[Biblecontroller::class,('Job_33')])->name('job_33');
Route::get("/bible/old/job_34",[Biblecontroller::class,('Job_34')])->name('job_34');
Route::get("/bible/old/job_35",[Biblecontroller::class,('Job_35')])->name('job_35');
Route::get("/bible/old/job_36",[Biblecontroller::class,('Job_36')])->name('job_36');
Route::get("/bible/old/job_37",[Biblecontroller::class,('Job_37')])->name('job_37');
Route::get("/bible/old/job_38",[Biblecontroller::class,('Job_38')])->name('job_38');
Route::get("/bible/old/job_39",[Biblecontroller::class,('Job_39')])->name('job_39');
Route::get("/bible/old/job_40",[Biblecontroller::class,('Job_40')])->name('job_40');
Route::get("/bible/old/job_41",[Biblecontroller::class,('Job_41')])->name('job_41');
Route::get("/bible/old/job_42",[Biblecontroller::class,('Job_42')])->name('job_42');
// Job
// Psalms
Route::get("/bible/old/psalms_1",[Biblecontroller::class,('Psalms_1')])->name('psal_1');
Route::get("/bible/old/psalms_2",[Biblecontroller::class,('Psalms_2')])->name('psal_2');
Route::get("/bible/old/psalms_3",[Biblecontroller::class,('Psalms_3')])->name('psal_3');
Route::get("/bible/old/psalms_4",[Biblecontroller::class,('Psalms_4')])->name('psal_4');
Route::get("/bible/old/psalms_5",[Biblecontroller::class,('Psalms_5')])->name('psal_5');
Route::get("/bible/old/psalms_6",[Biblecontroller::class,('Psalms_6')])->name('psal_6');
Route::get("/bible/old/psalms_7",[Biblecontroller::class,('Psalms_7')])->name('psal_7');
Route::get("/bible/old/psalms_8",[Biblecontroller::class,('Psalms_8')])->name('psal_8');
Route::get("/bible/old/psalms_9",[Biblecontroller::class,('Psalms_9')])->name('psal_9');
Route::get("/bible/old/psalms_10",[Biblecontroller::class,('Psalms_10')])->name('psal_10');
Route::get("/bible/old/psalms_11",[Biblecontroller::class,('Psalms_11')])->name('psal_11');
Route::get("/bible/old/psalms_12",[Biblecontroller::class,('Psalms_12')])->name('psal_12');
Route::get("/bible/old/psalms_13",[Biblecontroller::class,('Psalms_13')])->name('psal_13');
Route::get("/bible/old/psalms_14",[Biblecontroller::class,('Psalms_14')])->name('psal_14');
Route::get("/bible/old/psalms_15",[Biblecontroller::class,('Psalms_15')])->name('psal_15');
Route::get("/bible/old/psalms_16",[Biblecontroller::class,('Psalms_16')])->name('psal_16');
Route::get("/bible/old/psalms_17",[Biblecontroller::class,('Psalms_17')])->name('psal_17');
Route::get("/bible/old/psalms_18",[Biblecontroller::class,('Psalms_18')])->name('psal_18');
Route::get("/bible/old/psalms_19",[Biblecontroller::class,('Psalms_19')])->name('psal_19');
Route::get("/bible/old/psalms_20",[Biblecontroller::class,('Psalms_20')])->name('psal_20');
Route::get("/bible/old/psalms_21",[Biblecontroller::class,('Psalms_21')])->name('psal_21');
Route::get("/bible/old/psalms_22",[Biblecontroller::class,('Psalms_22')])->name('psal_22');
Route::get("/bible/old/psalms_23",[Biblecontroller::class,('Psalms_23')])->name('psal_23');
Route::get("/bible/old/psalms_24",[Biblecontroller::class,('Psalms_24')])->name('psal_24');
Route::get("/bible/old/psalms_25",[Biblecontroller::class,('Psalms_25')])->name('psal_25');
Route::get("/bible/old/psalms_26",[Biblecontroller::class,('Psalms_26')])->name('psal_26');
Route::get("/bible/old/psalms_27",[Biblecontroller::class,('Psalms_27')])->name('psal_27');
Route::get("/bible/old/psalms_28",[Biblecontroller::class,('Psalms_28')])->name('psal_28');
Route::get("/bible/old/psalms_29",[Biblecontroller::class,('Psalms_29')])->name('psal_29');
Route::get("/bible/old/psalms_30",[Biblecontroller::class,('Psalms_30')])->name('psal_30');
Route::get("/bible/old/psalms_31",[Biblecontroller::class,('Psalms_31')])->name('psal_31');
Route::get("/bible/old/psalms_32",[Biblecontroller::class,('Psalms_32')])->name('psal_32');
Route::get("/bible/old/psalms_33",[Biblecontroller::class,('Psalms_33')])->name('psal_33');
Route::get("/bible/old/psalms_34",[Biblecontroller::class,('Psalms_34')])->name('psal_34');
Route::get("/bible/old/psalms_35",[Biblecontroller::class,('Psalms_35')])->name('psal_35');
Route::get("/bible/old/psalms_36",[Biblecontroller::class,('Psalms_36')])->name('psal_36');
Route::get("/bible/old/psalms_37",[Biblecontroller::class,('Psalms_37')])->name('psal_37');
Route::get("/bible/old/psalms_38",[Biblecontroller::class,('Psalms_38')])->name('psal_38');
Route::get("/bible/old/psalms_39",[Biblecontroller::class,('Psalms_39')])->name('psal_39');
Route::get("/bible/old/psalms_40",[Biblecontroller::class,('Psalms_40')])->name('psal_40');
Route::get("/bible/old/psalms_41",[Biblecontroller::class,('Psalms_41')])->name('psal_41');
Route::get("/bible/old/psalms_42",[Biblecontroller::class,('Psalms_42')])->name('psal_42');
Route::get("/bible/old/psalms_43",[Biblecontroller::class,('Psalms_43')])->name('psal_43');
Route::get("/bible/old/psalms_44",[Biblecontroller::class,('Psalms_44')])->name('psal_44');
Route::get("/bible/old/psalms_45",[Biblecontroller::class,('Psalms_45')])->name('psal_45');
Route::get("/bible/old/psalms_46",[Biblecontroller::class,('Psalms_46')])->name('psal_46');
Route::get("/bible/old/psalms_47",[Biblecontroller::class,('Psalms_47')])->name('psal_47');
Route::get("/bible/old/psalms_48",[Biblecontroller::class,('Psalms_48')])->name('psal_48');
Route::get("/bible/old/psalms_49",[Biblecontroller::class,('Psalms_49')])->name('psal_49');
Route::get("/bible/old/psalms_50",[Biblecontroller::class,('Psalms_50')])->name('psal_50');
Route::get("/bible/old/psalms_51",[Biblecontroller::class,('Psalms_51')])->name('psal_51');
Route::get("/bible/old/psalms_52",[Biblecontroller::class,('Psalms_52')])->name('psal_52');
Route::get("/bible/old/psalms_53",[Biblecontroller::class,('Psalms_53')])->name('psal_53');
Route::get("/bible/old/psalms_54",[Biblecontroller::class,('Psalms_54')])->name('psal_54');
Route::get("/bible/old/psalms_55",[Biblecontroller::class,('Psalms_55')])->name('psal_55');
Route::get("/bible/old/psalms_56",[Biblecontroller::class,('Psalms_56')])->name('psal_56');
Route::get("/bible/old/psalms_57",[Biblecontroller::class,('Psalms_57')])->name('psal_57');
Route::get("/bible/old/psalms_58",[Biblecontroller::class,('Psalms_58')])->name('psal_58');
Route::get("/bible/old/psalms_59",[Biblecontroller::class,('Psalms_59')])->name('psal_59');
Route::get("/bible/old/psalms_60",[Biblecontroller::class,('Psalms_60')])->name('psal_60');
Route::get("/bible/old/psalms_61",[Biblecontroller::class,('Psalms_61')])->name('psal_61');
Route::get("/bible/old/psalms_62",[Biblecontroller::class,('Psalms_62')])->name('psal_62');
Route::get("/bible/old/psalms_63",[Biblecontroller::class,('Psalms_63')])->name('psal_63');
Route::get("/bible/old/psalms_64",[Biblecontroller::class,('Psalms_64')])->name('psal_64');
Route::get("/bible/old/psalms_65",[Biblecontroller::class,('Psalms_65')])->name('psal_65');
Route::get("/bible/old/psalms_66",[Biblecontroller::class,('Psalms_66')])->name('psal_66');
Route::get("/bible/old/psalms_67",[Biblecontroller::class,('Psalms_67')])->name('psal_67');
Route::get("/bible/old/psalms_68",[Biblecontroller::class,('Psalms_68')])->name('psal_68');
Route::get("/bible/old/psalms_69",[Biblecontroller::class,('Psalms_69')])->name('psal_69');
Route::get("/bible/old/psalms_70",[Biblecontroller::class,('Psalms_70')])->name('psal_70');
Route::get("/bible/old/psalms_71",[Biblecontroller::class,('Psalms_71')])->name('psal_71');
Route::get("/bible/old/psalms_72",[Biblecontroller::class,('Psalms_72')])->name('psal_72');
Route::get("/bible/old/psalms_73",[Biblecontroller::class,('Psalms_73')])->name('psal_73');
Route::get("/bible/old/psalms_74",[Biblecontroller::class,('Psalms_74')])->name('psal_74');
Route::get("/bible/old/psalms_75",[Biblecontroller::class,('Psalms_75')])->name('psal_75');
Route::get("/bible/old/psalms_76",[Biblecontroller::class,('Psalms_76')])->name('psal_76');
Route::get("/bible/old/psalms_77",[Biblecontroller::class,('Psalms_77')])->name('psal_77');
Route::get("/bible/old/psalms_78",[Biblecontroller::class,('Psalms_78')])->name('psal_78');
Route::get("/bible/old/psalms_79",[Biblecontroller::class,('Psalms_79')])->name('psal_79');
Route::get("/bible/old/psalms_80",[Biblecontroller::class,('Psalms_80')])->name('psal_80');
Route::get("/bible/old/psalms_81",[Biblecontroller::class,('Psalms_81')])->name('psal_81');
Route::get("/bible/old/psalms_82",[Biblecontroller::class,('Psalms_82')])->name('psal_82');
Route::get("/bible/old/psalms_83",[Biblecontroller::class,('Psalms_83')])->name('psal_83');
Route::get("/bible/old/psalms_84",[Biblecontroller::class,('Psalms_84')])->name('psal_84');
Route::get("/bible/old/psalms_85",[Biblecontroller::class,('Psalms_85')])->name('psal_85');
Route::get("/bible/old/psalms_86",[Biblecontroller::class,('Psalms_86')])->name('psal_86');
Route::get("/bible/old/psalms_87",[Biblecontroller::class,('Psalms_87')])->name('psal_87');
Route::get("/bible/old/psalms_88",[Biblecontroller::class,('Psalms_88')])->name('psal_88');
Route::get("/bible/old/psalms_89",[Biblecontroller::class,('Psalms_89')])->name('psal_89');
Route::get("/bible/old/psalms_90",[Biblecontroller::class,('Psalms_90')])->name('psal_90');
Route::get("/bible/old/psalms_91",[Biblecontroller::class,('Psalms_91')])->name('psal_91');
Route::get("/bible/old/psalms_92",[Biblecontroller::class,('Psalms_92')])->name('psal_92');
Route::get("/bible/old/psalms_93",[Biblecontroller::class,('Psalms_93')])->name('psal_93');
Route::get("/bible/old/psalms_94",[Biblecontroller::class,('Psalms_94')])->name('psal_94');
Route::get("/bible/old/psalms_95",[Biblecontroller::class,('Psalms_95')])->name('psal_95');
Route::get("/bible/old/psalms_96",[Biblecontroller::class,('Psalms_96')])->name('psal_96');
Route::get("/bible/old/psalms_97",[Biblecontroller::class,('Psalms_97')])->name('psal_97');
Route::get("/bible/old/psalms_98",[Biblecontroller::class,('Psalms_98')])->name('psal_98');
Route::get("/bible/old/psalms_99",[Biblecontroller::class,('Psalms_99')])->name('psal_99');
Route::get("/bible/old/psalms_100",[Biblecontroller::class,('Psalms_100')])->name('psal_100');
Route::get("/bible/old/psalms_101",[Biblecontroller::class,('Psalms_101')])->name('psal_101');
Route::get("/bible/old/psalms_102",[Biblecontroller::class,('Psalms_102')])->name('psal_102');
Route::get("/bible/old/psalms_103",[Biblecontroller::class,('Psalms_103')])->name('psal_103');
Route::get("/bible/old/psalms_104",[Biblecontroller::class,('Psalms_104')])->name('psal_104');
Route::get("/bible/old/psalms_105",[Biblecontroller::class,('Psalms_105')])->name('psal_105');
Route::get("/bible/old/psalms_106",[Biblecontroller::class,('Psalms_106')])->name('psal_106');
Route::get("/bible/old/psalms_107",[Biblecontroller::class,('Psalms_107')])->name('psal_107');
Route::get("/bible/old/psalms_108",[Biblecontroller::class,('Psalms_108')])->name('psal_108');
Route::get("/bible/old/psalms_109",[Biblecontroller::class,('Psalms_109')])->name('psal_109');
Route::get("/bible/old/psalms_110",[Biblecontroller::class,('Psalms_110')])->name('psal_110');
Route::get("/bible/old/psalms_111",[Biblecontroller::class,('Psalms_111')])->name('psal_111');
Route::get("/bible/old/psalms_112",[Biblecontroller::class,('Psalms_112')])->name('psal_112');
Route::get("/bible/old/psalms_113",[Biblecontroller::class,('Psalms_113')])->name('psal_113');
Route::get("/bible/old/psalms_114",[Biblecontroller::class,('Psalms_114')])->name('psal_114');
Route::get("/bible/old/psalms_115",[Biblecontroller::class,('Psalms_115')])->name('psal_115');
Route::get("/bible/old/psalms_116",[Biblecontroller::class,('Psalms_116')])->name('psal_116');
Route::get("/bible/old/psalms_117",[Biblecontroller::class,('Psalms_117')])->name('psal_117');
Route::get("/bible/old/psalms_118",[Biblecontroller::class,('Psalms_118')])->name('psal_118');
Route::get("/bible/old/psalms_119",[Biblecontroller::class,('Psalms_119')])->name('psal_119');
Route::get("/bible/old/psalms_120",[Biblecontroller::class,('Psalms_120')])->name('psal_120');
Route::get("/bible/old/psalms_121",[Biblecontroller::class,('Psalms_121')])->name('psal_121');
Route::get("/bible/old/psalms_122",[Biblecontroller::class,('Psalms_122')])->name('psal_122');
Route::get("/bible/old/psalms_123",[Biblecontroller::class,('Psalms_123')])->name('psal_123');
Route::get("/bible/old/psalms_124",[Biblecontroller::class,('Psalms_124')])->name('psal_124');
Route::get("/bible/old/psalms_125",[Biblecontroller::class,('Psalms_125')])->name('psal_125');
Route::get("/bible/old/psalms_126",[Biblecontroller::class,('Psalms_126')])->name('psal_126');
Route::get("/bible/old/psalms_127",[Biblecontroller::class,('Psalms_127')])->name('psal_127');
Route::get("/bible/old/psalms_128",[Biblecontroller::class,('Psalms_128')])->name('psal_128');
Route::get("/bible/old/psalms_129",[Biblecontroller::class,('Psalms_129')])->name('psal_129');
Route::get("/bible/old/psalms_130",[Biblecontroller::class,('Psalms_130')])->name('psal_130');
Route::get("/bible/old/psalms_131",[Biblecontroller::class,('Psalms_131')])->name('psal_131');
Route::get("/bible/old/psalms_132",[Biblecontroller::class,('Psalms_132')])->name('psal_132');
Route::get("/bible/old/psalms_133",[Biblecontroller::class,('Psalms_133')])->name('psal_133');
Route::get("/bible/old/psalms_134",[Biblecontroller::class,('Psalms_134')])->name('psal_134');
Route::get("/bible/old/psalms_135",[Biblecontroller::class,('Psalms_135')])->name('psal_135');
Route::get("/bible/old/psalms_136",[Biblecontroller::class,('Psalms_136')])->name('psal_136');
Route::get("/bible/old/psalms_137",[Biblecontroller::class,('Psalms_137')])->name('psal_137');
Route::get("/bible/old/psalms_138",[Biblecontroller::class,('Psalms_138')])->name('psal_138');
Route::get("/bible/old/psalms_139",[Biblecontroller::class,('Psalms_139')])->name('psal_139');
Route::get("/bible/old/psalms_140",[Biblecontroller::class,('Psalms_140')])->name('psal_140');
Route::get("/bible/old/psalms_141",[Biblecontroller::class,('Psalms_141')])->name('psal_141');
Route::get("/bible/old/psalms_142",[Biblecontroller::class,('Psalms_142')])->name('psal_142');
Route::get("/bible/old/psalms_143",[Biblecontroller::class,('Psalms_143')])->name('psal_143');
Route::get("/bible/old/psalms_144",[Biblecontroller::class,('Psalms_144')])->name('psal_144');
Route::get("/bible/old/psalms_145",[Biblecontroller::class,('Psalms_145')])->name('psal_145');
Route::get("/bible/old/psalms_146",[Biblecontroller::class,('Psalms_146')])->name('psal_146');
Route::get("/bible/old/psalms_147",[Biblecontroller::class,('Psalms_147')])->name('psal_147');
Route::get("/bible/old/psalms_148",[Biblecontroller::class,('Psalms_148')])->name('psal_148');
Route::get("/bible/old/psalms_149",[Biblecontroller::class,('Psalms_149')])->name('psal_149');
Route::get("/bible/old/psalms_150",[Biblecontroller::class,('Psalms_150')])->name('psal_150');
// Psalms
// Proverbs
Route::get("/bible/old/proverbs_1",[Biblecontroller::class,('Proverbs_1')])->name('prov_1');
Route::get("/bible/old/proverbs_2",[Biblecontroller::class,('Proverbs_2')])->name('prov_2');
Route::get("/bible/old/proverbs_3",[Biblecontroller::class,('Proverbs_3')])->name('prov_3');
Route::get("/bible/old/proverbs_4",[Biblecontroller::class,('Proverbs_4')])->name('prov_4');
Route::get("/bible/old/proverbs_5",[Biblecontroller::class,('Proverbs_5')])->name('prov_5');
Route::get("/bible/old/proverbs_6",[Biblecontroller::class,('Proverbs_6')])->name('prov_6');
Route::get("/bible/old/proverbs_7",[Biblecontroller::class,('Proverbs_7')])->name('prov_7');
Route::get("/bible/old/proverbs_8",[Biblecontroller::class,('Proverbs_8')])->name('prov_8');
Route::get("/bible/old/proverbs_9",[Biblecontroller::class,('Proverbs_9')])->name('prov_9');
Route::get("/bible/old/proverbs_10",[Biblecontroller::class,('Proverbs_10')])->name('prov_10');
Route::get("/bible/old/proverbs_11",[Biblecontroller::class,('Proverbs_11')])->name('prov_11');
Route::get("/bible/old/proverbs_12",[Biblecontroller::class,('Proverbs_12')])->name('prov_12');
Route::get("/bible/old/proverbs_13",[Biblecontroller::class,('Proverbs_13')])->name('prov_13');
Route::get("/bible/old/proverbs_14",[Biblecontroller::class,('Proverbs_14')])->name('prov_14');
Route::get("/bible/old/proverbs_15",[Biblecontroller::class,('Proverbs_15')])->name('prov_15');
Route::get("/bible/old/proverbs_16",[Biblecontroller::class,('Proverbs_16')])->name('prov_16');
Route::get("/bible/old/proverbs_17",[Biblecontroller::class,('Proverbs_17')])->name('prov_17');
Route::get("/bible/old/proverbs_18",[Biblecontroller::class,('Proverbs_18')])->name('prov_18');
Route::get("/bible/old/proverbs_19",[Biblecontroller::class,('Proverbs_19')])->name('prov_19');
Route::get("/bible/old/proverbs_20",[Biblecontroller::class,('Proverbs_20')])->name('prov_20');
Route::get("/bible/old/proverbs_21",[Biblecontroller::class,('Proverbs_21')])->name('prov_21');
Route::get("/bible/old/proverbs_22",[Biblecontroller::class,('Proverbs_22')])->name('prov_22');
Route::get("/bible/old/proverbs_23",[Biblecontroller::class,('Proverbs_23')])->name('prov_23');
Route::get("/bible/old/proverbs_24",[Biblecontroller::class,('Proverbs_24')])->name('prov_24');
Route::get("/bible/old/proverbs_25",[Biblecontroller::class,('Proverbs_25')])->name('prov_25');
Route::get("/bible/old/proverbs_26",[Biblecontroller::class,('Proverbs_26')])->name('prov_26');
Route::get("/bible/old/proverbs_27",[Biblecontroller::class,('Proverbs_27')])->name('prov_27');
Route::get("/bible/old/proverbs_28",[Biblecontroller::class,('Proverbs_28')])->name('prov_28');
Route::get("/bible/old/proverbs_29",[Biblecontroller::class,('Proverbs_29')])->name('prov_29');
Route::get("/bible/old/proverbs_30",[Biblecontroller::class,('Proverbs_30')])->name('prov_30');
Route::get("/bible/old/proverbs_31",[Biblecontroller::class,('Proverbs_31')])->name('prov_31');
// Proverbs
// Ecclesiastes
Route::get("/bible/old/ecclesiastes_1",[Biblecontroller::class,('Ecclesiastes_1')])->name('eccl_1');
Route::get("/bible/old/ecclesiastes_2",[Biblecontroller::class,('Ecclesiastes_2')])->name('eccl_2');
Route::get("/bible/old/ecclesiastes_3",[Biblecontroller::class,('Ecclesiastes_3')])->name('eccl_3');
Route::get("/bible/old/ecclesiastes_4",[Biblecontroller::class,('Ecclesiastes_4')])->name('eccl_4');
Route::get("/bible/old/ecclesiastes_5",[Biblecontroller::class,('Ecclesiastes_5')])->name('eccl_5');
Route::get("/bible/old/ecclesiastes_6",[Biblecontroller::class,('Ecclesiastes_6')])->name('eccl_6');
Route::get("/bible/old/ecclesiastes_7",[Biblecontroller::class,('Ecclesiastes_7')])->name('eccl_7');
Route::get("/bible/old/ecclesiastes_8",[Biblecontroller::class,('Ecclesiastes_8')])->name('eccl_8');
Route::get("/bible/old/ecclesiastes_9",[Biblecontroller::class,('Ecclesiastes_9')])->name('eccl_9');
Route::get("/bible/old/ecclesiastes_10",[Biblecontroller::class,('Ecclesiastes_10')])->name('eccl_10');
Route::get("/bible/old/ecclesiastes_11",[Biblecontroller::class,('Ecclesiastes_11')])->name('eccl_11');
Route::get("/bible/old/ecclesiastes_12",[Biblecontroller::class,('Ecclesiastes_12')])->name('eccl_12');
// Ecclesiastes
// Song of Solomon
Route::get("/bible/old/songofsolomon_1",[Biblecontroller::class,('Song_of_Solomon_1')])->name('song_1');
Route::get("/bible/old/songofsolomon_2",[Biblecontroller::class,('Song_of_Solomon_2')])->name('song_2');
Route::get("/bible/old/songofsolomon_3",[Biblecontroller::class,('Song_of_Solomon_3')])->name('song_3');
Route::get("/bible/old/songofsolomon_4",[Biblecontroller::class,('Song_of_Solomon_4')])->name('song_4');
Route::get("/bible/old/songofsolomon_5",[Biblecontroller::class,('Song_of_Solomon_5')])->name('song_5');
Route::get("/bible/old/songofsolomon_6",[Biblecontroller::class,('Song_of_Solomon_6')])->name('song_6');
Route::get("/bible/old/songofsolomon_7",[Biblecontroller::class,('Song_of_Solomon_7')])->name('song_7');
Route::get("/bible/old/songofsolomon_8",[Biblecontroller::class,('Song_of_Solomon_8')])->name('song_8');
// Song of Solomon
// Isaiah
Route::get("/bible/old/isaiah_1",[Biblecontroller::class,('Isaiah_1')])->name('isa_1');
Route::get("/bible/old/isaiah_2",[Biblecontroller::class,('Isaiah_2')])->name('isa_2');
Route::get("/bible/old/isaiah_3",[Biblecontroller::class,('Isaiah_3')])->name('isa_3');
Route::get("/bible/old/isaiah_4",[Biblecontroller::class,('Isaiah_4')])->name('isa_4');
Route::get("/bible/old/isaiah_5",[Biblecontroller::class,('Isaiah_5')])->name('isa_5');
Route::get("/bible/old/isaiah_6",[Biblecontroller::class,('Isaiah_6')])->name('isa_6');
Route::get("/bible/old/isaiah_7",[Biblecontroller::class,('Isaiah_7')])->name('isa_7');
Route::get("/bible/old/isaiah_8",[Biblecontroller::class,('Isaiah_8')])->name('isa_8');
Route::get("/bible/old/isaiah_9",[Biblecontroller::class,('Isaiah_9')])->name('isa_9');
Route::get("/bible/old/isaiah_10",[Biblecontroller::class,('Isaiah_10')])->name('isa_10');
Route::get("/bible/old/isaiah_11",[Biblecontroller::class,('Isaiah_11')])->name('isa_11');
Route::get("/bible/old/isaiah_12",[Biblecontroller::class,('Isaiah_12')])->name('isa_12');
Route::get("/bible/old/isaiah_13",[Biblecontroller::class,('Isaiah_13')])->name('isa_13');
Route::get("/bible/old/isaiah_14",[Biblecontroller::class,('Isaiah_14')])->name('isa_14');
Route::get("/bible/old/isaiah_15",[Biblecontroller::class,('Isaiah_15')])->name('isa_15');
Route::get("/bible/old/isaiah_16",[Biblecontroller::class,('Isaiah_16')])->name('isa_16');
Route::get("/bible/old/isaiah_17",[Biblecontroller::class,('Isaiah_17')])->name('isa_17');
Route::get("/bible/old/isaiah_18",[Biblecontroller::class,('Isaiah_18')])->name('isa_18');
Route::get("/bible/old/isaiah_19",[Biblecontroller::class,('Isaiah_19')])->name('isa_19');
Route::get("/bible/old/isaiah_20",[Biblecontroller::class,('Isaiah_20')])->name('isa_20');
Route::get("/bible/old/isaiah_21",[Biblecontroller::class,('Isaiah_21')])->name('isa_21');
Route::get("/bible/old/isaiah_22",[Biblecontroller::class,('Isaiah_22')])->name('isa_22');
Route::get("/bible/old/isaiah_23",[Biblecontroller::class,('Isaiah_23')])->name('isa_23');
Route::get("/bible/old/isaiah_24",[Biblecontroller::class,('Isaiah_24')])->name('isa_24');
Route::get("/bible/old/isaiah_25",[Biblecontroller::class,('Isaiah_25')])->name('isa_25');
Route::get("/bible/old/isaiah_26",[Biblecontroller::class,('Isaiah_26')])->name('isa_26');
Route::get("/bible/old/isaiah_27",[Biblecontroller::class,('Isaiah_27')])->name('isa_27');
Route::get("/bible/old/isaiah_28",[Biblecontroller::class,('Isaiah_28')])->name('isa_28');
Route::get("/bible/old/isaiah_29",[Biblecontroller::class,('Isaiah_29')])->name('isa_29');
Route::get("/bible/old/isaiah_30",[Biblecontroller::class,('Isaiah_30')])->name('isa_30');
Route::get("/bible/old/isaiah_31",[Biblecontroller::class,('Isaiah_31')])->name('isa_31');
Route::get("/bible/old/isaiah_32",[Biblecontroller::class,('Isaiah_32')])->name('isa_32');
Route::get("/bible/old/isaiah_33",[Biblecontroller::class,('Isaiah_33')])->name('isa_33');
Route::get("/bible/old/isaiah_34",[Biblecontroller::class,('Isaiah_34')])->name('isa_34');
Route::get("/bible/old/isaiah_35",[Biblecontroller::class,('Isaiah_35')])->name('isa_35');
Route::get("/bible/old/isaiah_36",[Biblecontroller::class,('Isaiah_36')])->name('isa_36');
Route::get("/bible/old/isaiah_37",[Biblecontroller::class,('Isaiah_37')])->name('isa_37');
Route::get("/bible/old/isaiah_38",[Biblecontroller::class,('Isaiah_38')])->name('isa_38');
Route::get("/bible/old/isaiah_39",[Biblecontroller::class,('Isaiah_39')])->name('isa_39');
Route::get("/bible/old/isaiah_40",[Biblecontroller::class,('Isaiah_40')])->name('isa_40');
Route::get("/bible/old/isaiah_41",[Biblecontroller::class,('Isaiah_41')])->name('isa_41');
Route::get("/bible/old/isaiah_42",[Biblecontroller::class,('Isaiah_42')])->name('isa_42');
Route::get("/bible/old/isaiah_43",[Biblecontroller::class,('Isaiah_43')])->name('isa_43');
Route::get("/bible/old/isaiah_44",[Biblecontroller::class,('Isaiah_44')])->name('isa_44');
Route::get("/bible/old/isaiah_45",[Biblecontroller::class,('Isaiah_45')])->name('isa_45');
Route::get("/bible/old/isaiah_46",[Biblecontroller::class,('Isaiah_46')])->name('isa_46');
Route::get("/bible/old/isaiah_47",[Biblecontroller::class,('Isaiah_47')])->name('isa_47');
Route::get("/bible/old/isaiah_48",[Biblecontroller::class,('Isaiah_48')])->name('isa_48');
Route::get("/bible/old/isaiah_49",[Biblecontroller::class,('Isaiah_49')])->name('isa_49');
Route::get("/bible/old/isaiah_50",[Biblecontroller::class,('Isaiah_50')])->name('isa_50');
Route::get("/bible/old/isaiah_51",[Biblecontroller::class,('Isaiah_51')])->name('isa_51');
Route::get("/bible/old/isaiah_52",[Biblecontroller::class,('Isaiah_52')])->name('isa_52');
Route::get("/bible/old/isaiah_53",[Biblecontroller::class,('Isaiah_53')])->name('isa_53');
Route::get("/bible/old/isaiah_54",[Biblecontroller::class,('Isaiah_54')])->name('isa_54');
Route::get("/bible/old/isaiah_55",[Biblecontroller::class,('Isaiah_55')])->name('isa_55');
Route::get("/bible/old/isaiah_56",[Biblecontroller::class,('Isaiah_56')])->name('isa_56');
Route::get("/bible/old/isaiah_57",[Biblecontroller::class,('Isaiah_57')])->name('isa_57');
Route::get("/bible/old/isaiah_58",[Biblecontroller::class,('Isaiah_58')])->name('isa_58');
Route::get("/bible/old/isaiah_59",[Biblecontroller::class,('Isaiah_59')])->name('isa_59');
Route::get("/bible/old/isaiah_60",[Biblecontroller::class,('Isaiah_60')])->name('isa_60');
Route::get("/bible/old/isaiah_61",[Biblecontroller::class,('Isaiah_61')])->name('isa_61');
Route::get("/bible/old/isaiah_62",[Biblecontroller::class,('Isaiah_62')])->name('isa_62');
Route::get("/bible/old/isaiah_63",[Biblecontroller::class,('Isaiah_63')])->name('isa_63');
Route::get("/bible/old/isaiah_64",[Biblecontroller::class,('Isaiah_64')])->name('isa_64');
Route::get("/bible/old/isaiah_65",[Biblecontroller::class,('Isaiah_65')])->name('isa_65');
Route::get("/bible/old/isaiah_66",[Biblecontroller::class,('Isaiah_66')])->name('isa_66');
// Isaiah
// Jeremiah
Route::get("/bible/old/jeremiah_1",[Biblecontroller::class,('Jeremiah_1')])->name('jer_1');
Route::get("/bible/old/jeremiah_2",[Biblecontroller::class,('Jeremiah_2')])->name('jer_2');
Route::get("/bible/old/jeremiah_3",[Biblecontroller::class,('Jeremiah_3')])->name('jer_3');
Route::get("/bible/old/jeremiah_4",[Biblecontroller::class,('Jeremiah_4')])->name('jer_4');
Route::get("/bible/old/jeremiah_5",[Biblecontroller::class,('Jeremiah_5')])->name('jer_5');
Route::get("/bible/old/jeremiah_6",[Biblecontroller::class,('Jeremiah_6')])->name('jer_6');
Route::get("/bible/old/jeremiah_7",[Biblecontroller::class,('Jeremiah_7')])->name('jer_7');
Route::get("/bible/old/jeremiah_8",[Biblecontroller::class,('Jeremiah_8')])->name('jer_8');
Route::get("/bible/old/jeremiah_9",[Biblecontroller::class,('Jeremiah_9')])->name('jer_9');
Route::get("/bible/old/jeremiah_10",[Biblecontroller::class,('Jeremiah_10')])->name('jer_10');
Route::get("/bible/old/jeremiah_11",[Biblecontroller::class,('Jeremiah_11')])->name('jer_11');
Route::get("/bible/old/jeremiah_12",[Biblecontroller::class,('Jeremiah_12')])->name('jer_12');
Route::get("/bible/old/jeremiah_13",[Biblecontroller::class,('Jeremiah_13')])->name('jer_13');
Route::get("/bible/old/jeremiah_14",[Biblecontroller::class,('Jeremiah_14')])->name('jer_14');
Route::get("/bible/old/jeremiah_15",[Biblecontroller::class,('Jeremiah_15')])->name('jer_15');
Route::get("/bible/old/jeremiah_16",[Biblecontroller::class,('Jeremiah_16')])->name('jer_16');
Route::get("/bible/old/jeremiah_17",[Biblecontroller::class,('Jeremiah_17')])->name('jer_17');
Route::get("/bible/old/jeremiah_18",[Biblecontroller::class,('Jeremiah_18')])->name('jer_18');
Route::get("/bible/old/jeremiah_19",[Biblecontroller::class,('Jeremiah_19')])->name('jer_19');
Route::get("/bible/old/jeremiah_20",[Biblecontroller::class,('Jeremiah_20')])->name('jer_20');
Route::get("/bible/old/jeremiah_21",[Biblecontroller::class,('Jeremiah_21')])->name('jer_21');
Route::get("/bible/old/jeremiah_22",[Biblecontroller::class,('Jeremiah_22')])->name('jer_22');
Route::get("/bible/old/jeremiah_23",[Biblecontroller::class,('Jeremiah_23')])->name('jer_23');
Route::get("/bible/old/jeremiah_24",[Biblecontroller::class,('Jeremiah_24')])->name('jer_24');
Route::get("/bible/old/jeremiah_25",[Biblecontroller::class,('Jeremiah_25')])->name('jer_25');
Route::get("/bible/old/jeremiah_26",[Biblecontroller::class,('Jeremiah_26')])->name('jer_26');
Route::get("/bible/old/jeremiah_27",[Biblecontroller::class,('Jeremiah_27')])->name('jer_27');
Route::get("/bible/old/jeremiah_28",[Biblecontroller::class,('Jeremiah_28')])->name('jer_28');
Route::get("/bible/old/jeremiah_29",[Biblecontroller::class,('Jeremiah_29')])->name('jer_29');
Route::get("/bible/old/jeremiah_30",[Biblecontroller::class,('Jeremiah_30')])->name('jer_30');
Route::get("/bible/old/jeremiah_31",[Biblecontroller::class,('Jeremiah_31')])->name('jer_31');
Route::get("/bible/old/jeremiah_32",[Biblecontroller::class,('Jeremiah_32')])->name('jer_32');
Route::get("/bible/old/jeremiah_33",[Biblecontroller::class,('Jeremiah_33')])->name('jer_33');
Route::get("/bible/old/jeremiah_34",[Biblecontroller::class,('Jeremiah_34')])->name('jer_34');
Route::get("/bible/old/jeremiah_35",[Biblecontroller::class,('Jeremiah_35')])->name('jer_35');
Route::get("/bible/old/jeremiah_36",[Biblecontroller::class,('Jeremiah_36')])->name('jer_36');
Route::get("/bible/old/jeremiah_37",[Biblecontroller::class,('Jeremiah_37')])->name('jer_37');
Route::get("/bible/old/jeremiah_38",[Biblecontroller::class,('Jeremiah_38')])->name('jer_38');
Route::get("/bible/old/jeremiah_39",[Biblecontroller::class,('Jeremiah_39')])->name('jer_39');
Route::get("/bible/old/jeremiah_40",[Biblecontroller::class,('Jeremiah_40')])->name('jer_40');
Route::get("/bible/old/jeremiah_41",[Biblecontroller::class,('Jeremiah_41')])->name('jer_41');
Route::get("/bible/old/jeremiah_42",[Biblecontroller::class,('Jeremiah_42')])->name('jer_42');
Route::get("/bible/old/jeremiah_43",[Biblecontroller::class,('Jeremiah_43')])->name('jer_43');
Route::get("/bible/old/jeremiah_44",[Biblecontroller::class,('Jeremiah_44')])->name('jer_44');
Route::get("/bible/old/jeremiah_45",[Biblecontroller::class,('Jeremiah_45')])->name('jer_45');
Route::get("/bible/old/jeremiah_46",[Biblecontroller::class,('Jeremiah_46')])->name('jer_46');
Route::get("/bible/old/jeremiah_47",[Biblecontroller::class,('Jeremiah_47')])->name('jer_47');
Route::get("/bible/old/jeremiah_48",[Biblecontroller::class,('Jeremiah_48')])->name('jer_48');
Route::get("/bible/old/jeremiah_49",[Biblecontroller::class,('Jeremiah_49')])->name('jer_49');
Route::get("/bible/old/jeremiah_50",[Biblecontroller::class,('Jeremiah_50')])->name('jer_50');
Route::get("/bible/old/jeremiah_51",[Biblecontroller::class,('Jeremiah_51')])->name('jer_51');
Route::get("/bible/old/jeremiah_52",[Biblecontroller::class,('Jeremiah_52')])->name('jer_52');
// Jeremiah
// Lamentations
Route::get("/bible/old/lamentations_1",[Biblecontroller::class,('Lamentations_1')])->name('lam_1');
Route::get("/bible/old/lamentations_2",[Biblecontroller::class,('Lamentations_2')])->name('lam_2');
Route::get("/bible/old/lamentations_3",[Biblecontroller::class,('Lamentations_3')])->name('lam_3');
Route::get("/bible/old/lamentations_4",[Biblecontroller::class,('Lamentations_4')])->name('lam_4');
Route::get("/bible/old/lamentations_5",[Biblecontroller::class,('Lamentations_5')])->name('lam_5');
// Lamentations
// Ezekiel
Route::get("/bible/old/ezekiel_1",[Biblecontroller::class,('Ezekiel_1')])->name('ezek_1');
Route::get("/bible/old/ezekiel_2",[Biblecontroller::class,('Ezekiel_2')])->name('ezek_2');
Route::get("/bible/old/ezekiel_3",[Biblecontroller::class,('Ezekiel_3')])->name('ezek_3');
Route::get("/bible/old/ezekiel_4",[Biblecontroller::class,('Ezekiel_4')])->name('ezek_4');
Route::get("/bible/old/ezekiel_5",[Biblecontroller::class,('Ezekiel_5')])->name('ezek_5');
Route::get("/bible/old/ezekiel_6",[Biblecontroller::class,('Ezekiel_6')])->name('ezek_6');
Route::get("/bible/old/ezekiel_7",[Biblecontroller::class,('Ezekiel_7')])->name('ezek_7');
Route::get("/bible/old/ezekiel_8",[Biblecontroller::class,('Ezekiel_8')])->name('ezek_8');
Route::get("/bible/old/ezekiel_9",[Biblecontroller::class,('Ezekiel_9')])->name('ezek_9');
Route::get("/bible/old/ezekiel_10",[Biblecontroller::class,('Ezekiel_10')])->name('ezek_10');
Route::get("/bible/old/ezekiel_11",[Biblecontroller::class,('Ezekiel_11')])->name('ezek_11');
Route::get("/bible/old/ezekiel_12",[Biblecontroller::class,('Ezekiel_12')])->name('ezek_12');
Route::get("/bible/old/ezekiel_13",[Biblecontroller::class,('Ezekiel_13')])->name('ezek_13');
Route::get("/bible/old/ezekiel_14",[Biblecontroller::class,('Ezekiel_14')])->name('ezek_14');
Route::get("/bible/old/ezekiel_15",[Biblecontroller::class,('Ezekiel_15')])->name('ezek_15');
Route::get("/bible/old/ezekiel_16",[Biblecontroller::class,('Ezekiel_16')])->name('ezek_16');
Route::get("/bible/old/ezekiel_17",[Biblecontroller::class,('Ezekiel_17')])->name('ezek_17');
Route::get("/bible/old/ezekiel_18",[Biblecontroller::class,('Ezekiel_18')])->name('ezek_18');
Route::get("/bible/old/ezekiel_19",[Biblecontroller::class,('Ezekiel_19')])->name('ezek_19');
Route::get("/bible/old/ezekiel_20",[Biblecontroller::class,('Ezekiel_20')])->name('ezek_20');
Route::get("/bible/old/ezekiel_21",[Biblecontroller::class,('Ezekiel_21')])->name('ezek_21');
Route::get("/bible/old/ezekiel_22",[Biblecontroller::class,('Ezekiel_22')])->name('ezek_22');
Route::get("/bible/old/ezekiel_23",[Biblecontroller::class,('Ezekiel_23')])->name('ezek_23');
Route::get("/bible/old/ezekiel_24",[Biblecontroller::class,('Ezekiel_24')])->name('ezek_24');
Route::get("/bible/old/ezekiel_25",[Biblecontroller::class,('Ezekiel_25')])->name('ezek_25');
Route::get("/bible/old/ezekiel_26",[Biblecontroller::class,('Ezekiel_26')])->name('ezek_26');
Route::get("/bible/old/ezekiel_27",[Biblecontroller::class,('Ezekiel_27')])->name('ezek_27');
Route::get("/bible/old/ezekiel_28",[Biblecontroller::class,('Ezekiel_28')])->name('ezek_28');
Route::get("/bible/old/ezekiel_29",[Biblecontroller::class,('Ezekiel_29')])->name('ezek_29');
Route::get("/bible/old/ezekiel_30",[Biblecontroller::class,('Ezekiel_30')])->name('ezek_30');
Route::get("/bible/old/ezekiel_31",[Biblecontroller::class,('Ezekiel_31')])->name('ezek_31');
Route::get("/bible/old/ezekiel_32",[Biblecontroller::class,('Ezekiel_32')])->name('ezek_32');
Route::get("/bible/old/ezekiel_33",[Biblecontroller::class,('Ezekiel_33')])->name('ezek_33');
Route::get("/bible/old/ezekiel_34",[Biblecontroller::class,('Ezekiel_34')])->name('ezek_34');
Route::get("/bible/old/ezekiel_35",[Biblecontroller::class,('Ezekiel_35')])->name('ezek_35');
Route::get("/bible/old/ezekiel_36",[Biblecontroller::class,('Ezekiel_36')])->name('ezek_36');
Route::get("/bible/old/ezekiel_37",[Biblecontroller::class,('Ezekiel_37')])->name('ezek_37');
Route::get("/bible/old/ezekiel_38",[Biblecontroller::class,('Ezekiel_38')])->name('ezek_38');
Route::get("/bible/old/ezekiel_39",[Biblecontroller::class,('Ezekiel_39')])->name('ezek_39');
Route::get("/bible/old/ezekiel_40",[Biblecontroller::class,('Ezekiel_40')])->name('ezek_40');
Route::get("/bible/old/ezekiel_41",[Biblecontroller::class,('Ezekiel_41')])->name('ezek_41');
Route::get("/bible/old/ezekiel_42",[Biblecontroller::class,('Ezekiel_42')])->name('ezek_42');
Route::get("/bible/old/ezekiel_43",[Biblecontroller::class,('Ezekiel_43')])->name('ezek_43');
Route::get("/bible/old/ezekiel_44",[Biblecontroller::class,('Ezekiel_44')])->name('ezek_44');
Route::get("/bible/old/ezekiel_45",[Biblecontroller::class,('Ezekiel_45')])->name('ezek_45');
Route::get("/bible/old/ezekiel_46",[Biblecontroller::class,('Ezekiel_46')])->name('ezek_46');
Route::get("/bible/old/ezekiel_47",[Biblecontroller::class,('Ezekiel_47')])->name('ezek_47');
Route::get("/bible/old/ezekiel_48",[Biblecontroller::class,('Ezekiel_48')])->name('ezek_48');
// Ezekiel
// Daniel
Route::get("/bible/old/daniel_1",[Biblecontroller::class,('Daniel_1')])->name('dan_1');
Route::get("/bible/old/daniel_2",[Biblecontroller::class,('Daniel_2')])->name('dan_2');
Route::get("/bible/old/daniel_3",[Biblecontroller::class,('Daniel_3')])->name('dan_3');
Route::get("/bible/old/daniel_4",[Biblecontroller::class,('Daniel_4')])->name('dan_4');
Route::get("/bible/old/daniel_5",[Biblecontroller::class,('Daniel_5')])->name('dan_5');
Route::get("/bible/old/daniel_6",[Biblecontroller::class,('Daniel_6')])->name('dan_6');
Route::get("/bible/old/daniel_7",[Biblecontroller::class,('Daniel_7')])->name('dan_7');
Route::get("/bible/old/daniel_8",[Biblecontroller::class,('Daniel_8')])->name('dan_8');
Route::get("/bible/old/daniel_9",[Biblecontroller::class,('Daniel_9')])->name('dan_9');
Route::get("/bible/old/daniel_10",[Biblecontroller::class,('Daniel_10')])->name('dan_10');
Route::get("/bible/old/daniel_11",[Biblecontroller::class,('Daniel_11')])->name('dan_11');
Route::get("/bible/old/daniel_12",[Biblecontroller::class,('Daniel_12')])->name('dan_12');
// Daniel
// Hosea
Route::get("/bible/old/hosea_1",[Biblecontroller::class,('Hosea_1')])->name('hos_1');
Route::get("/bible/old/hosea_2",[Biblecontroller::class,('Hosea_2')])->name('hos_2');
Route::get("/bible/old/hosea_3",[Biblecontroller::class,('Hosea_3')])->name('hos_3');
Route::get("/bible/old/hosea_4",[Biblecontroller::class,('Hosea_4')])->name('hos_4');
Route::get("/bible/old/hosea_5",[Biblecontroller::class,('Hosea_5')])->name('hos_5');
Route::get("/bible/old/hosea_6",[Biblecontroller::class,('Hosea_6')])->name('hos_6');
Route::get("/bible/old/hosea_7",[Biblecontroller::class,('Hosea_7')])->name('hos_7');
Route::get("/bible/old/hosea_8",[Biblecontroller::class,('Hosea_8')])->name('hos_8');
Route::get("/bible/old/hosea_9",[Biblecontroller::class,('Hosea_9')])->name('hos_9');
Route::get("/bible/old/hosea_10",[Biblecontroller::class,('Hosea_10')])->name('hos_10');
Route::get("/bible/old/hosea_11",[Biblecontroller::class,('Hosea_11')])->name('hos_11');
Route::get("/bible/old/hosea_12",[Biblecontroller::class,('Hosea_12')])->name('hos_12');
Route::get("/bible/old/hosea_13",[Biblecontroller::class,('Hosea_13')])->name('hos_13');
Route::get("/bible/old/hosea_14",[Biblecontroller::class,('Hosea_14')])->name('hos_14');
// Hosea
// Joel
Route::get("/bible/old/joel_1",[Biblecontroller::class,('Joel_1')])->name('joel_1');
Route::get("/bible/old/joel_2",[Biblecontroller::class,('Joel_2')])->name('joel_2');
Route::get("/bible/old/joel_3",[Biblecontroller::class,('Joel_3')])->name('joel_3');
// Joel
// Amos
Route::get("/bible/old/amos_1",[Biblecontroller::class,('Amos_1')])->name('amo_1');
Route::get("/bible/old/amos_2",[Biblecontroller::class,('Amos_2')])->name('amo_2');
Route::get("/bible/old/amos_3",[Biblecontroller::class,('Amos_3')])->name('amo_3');
Route::get("/bible/old/amos_4",[Biblecontroller::class,('Amos_4')])->name('amo_4');
Route::get("/bible/old/amos_5",[Biblecontroller::class,('Amos_5')])->name('amo_5');
Route::get("/bible/old/amos_6",[Biblecontroller::class,('Amos_6')])->name('amo_6');
Route::get("/bible/old/amos_7",[Biblecontroller::class,('Amos_7')])->name('amo_7');
Route::get("/bible/old/amos_8",[Biblecontroller::class,('Amos_8')])->name('amo_8');
Route::get("/bible/old/amos_9",[Biblecontroller::class,('Amos_9')])->name('amo_9');
// Amos
// Obadiah
Route::get("/bible/old/obadiah_1",[Biblecontroller::class,('Obadiah_1')])->name('obad_1');
// Obadiah
// Jonah
Route::get("/bible/old/jonah_1",[Biblecontroller::class,('Jonah_1')])->name('jonah_1');
Route::get("/bible/old/jonah_2",[Biblecontroller::class,('Jonah_2')])->name('jonah_2');
Route::get("/bible/old/jonah_3",[Biblecontroller::class,('Jonah_3')])->name('jonah_3');
Route::get("/bible/old/jonah_4",[Biblecontroller::class,('Jonah_4')])->name('jonah_4');
// Jonah
// Micah
Route::get("/bible/old/micah_1",[Biblecontroller::class,('Micah_1')])->name('mic_1');
Route::get("/bible/old/micah_2",[Biblecontroller::class,('Micah_2')])->name('mic_2');
Route::get("/bible/old/micah_3",[Biblecontroller::class,('Micah_3')])->name('mic_3');
Route::get("/bible/old/micah_4",[Biblecontroller::class,('Micah_4')])->name('mic_4');
Route::get("/bible/old/micah_5",[Biblecontroller::class,('Micah_5')])->name('mic_5');
Route::get("/bible/old/micah_6",[Biblecontroller::class,('Micah_6')])->name('mic_6');
Route::get("/bible/old/micah_7",[Biblecontroller::class,('Micah_7')])->name('mic_7');
// Micah
// Nahum
Route::get("/bible/old/nahum_1",[Biblecontroller::class,('Nahum_1')])->name('nah_1');
Route::get("/bible/old/nahum_2",[Biblecontroller::class,('Nahum_2')])->name('nah_2');
Route::get("/bible/old/nahum_3",[Biblecontroller::class,('Nahum_3')])->name('nah_3');
// Nahum
// Habakkuk
Route::get("/bible/old/habakkuk_1",[Biblecontroller::class,('Habakkuk_1')])->name('hab_1');
Route::get("/bible/old/habakkuk_2",[Biblecontroller::class,('Habakkuk_2')])->name('hab_2');
Route::get("/bible/old/habakkuk_3",[Biblecontroller::class,('Habakkuk_3')])->name('hab_3');
// Habakkuk
// Zephaniah
Route::get("/bible/old/zephaniah_1",[Biblecontroller::class,('Zephaniah_1')])->name('zep_1');
Route::get("/bible/old/zephaniah_2",[Biblecontroller::class,('Zephaniah_2')])->name('zep_2');
Route::get("/bible/old/zephaniah_3",[Biblecontroller::class,('Zephaniah_3')])->name('zep_3');
// Zephaniah
// Haggai
Route::get("/bible/old/haggai_1",[Biblecontroller::class,('Haggai_1')])->name('hag_1');
Route::get("/bible/old/haggai_2",[Biblecontroller::class,('Haggai_2')])->name('hag_2');
// Haggai
// Zechariah
Route::get("/bible/old/zechariah_1",[Biblecontroller::class,('Zechariah_1')])->name('zech_1');
Route::get("/bible/old/zechariah_2",[Biblecontroller::class,('Zechariah_2')])->name('zech_2');
Route::get("/bible/old/zechariah_3",[Biblecontroller::class,('Zechariah_3')])->name('zech_3');
Route::get("/bible/old/zechariah_4",[Biblecontroller::class,('Zechariah_4')])->name('zech_4');
Route::get("/bible/old/zechariah_5",[Biblecontroller::class,('Zechariah_5')])->name('zech_5');
Route::get("/bible/old/zechariah_6",[Biblecontroller::class,('Zechariah_6')])->name('zech_6');
Route::get("/bible/old/zechariah_7",[Biblecontroller::class,('Zechariah_7')])->name('zech_7');
Route::get("/bible/old/zechariah_8",[Biblecontroller::class,('Zechariah_8')])->name('zech_8');
Route::get("/bible/old/zechariah_9",[Biblecontroller::class,('Zechariah_9')])->name('zech_9');
Route::get("/bible/old/zechariah_10",[Biblecontroller::class,('Zechariah_10')])->name('zech_10');
Route::get("/bible/old/zechariah_11",[Biblecontroller::class,('Zechariah_11')])->name('zech_11');
Route::get("/bible/old/zechariah_12",[Biblecontroller::class,('Zechariah_12')])->name('zech_12');
Route::get("/bible/old/zechariah_13",[Biblecontroller::class,('Zechariah_13')])->name('zech_13');
Route::get("/bible/old/zechariah_14",[Biblecontroller::class,('Zechariah_14')])->name('zech_14');
// Zechariah
// Malachi
Route::get("/bible/old/malachi_1",[Biblecontroller::class,('Malachi_1')])->name('mal_1');
Route::get("/bible/old/malachi_2",[Biblecontroller::class,('Malachi_2')])->name('mal_2');
Route::get("/bible/old/malachi_3",[Biblecontroller::class,('Malachi_3')])->name('mal_3');
Route::get("/bible/old/malachi_4",[Biblecontroller::class,('Malachi_4')])->name('mal_4');
// Malachi
// Old Testamets

// New Testamets
// Matthew
Route::get("/bible/new/matthew_1",[Biblecontroller::class,('Matthew_1')])->name('mat_1');
Route::get("/bible/new/matthew_2",[Biblecontroller::class,('Matthew_2')])->name('mat_2');
Route::get("/bible/new/matthew_3",[Biblecontroller::class,('Matthew_3')])->name('mat_3');
Route::get("/bible/new/matthew_4",[Biblecontroller::class,('Matthew_4')])->name('mat_4');
Route::get("/bible/new/matthew_5",[Biblecontroller::class,('Matthew_5')])->name('mat_5');
Route::get("/bible/new/matthew_6",[Biblecontroller::class,('Matthew_6')])->name('mat_6');
Route::get("/bible/new/matthew_7",[Biblecontroller::class,('Matthew_7')])->name('mat_7');
Route::get("/bible/new/matthew_8",[Biblecontroller::class,('Matthew_8')])->name('mat_8');
Route::get("/bible/new/matthew_9",[Biblecontroller::class,('Matthew_9')])->name('mat_9');
Route::get("/bible/new/matthew_10",[Biblecontroller::class,('Matthew_10')])->name('mat_10');
Route::get("/bible/new/matthew_11",[Biblecontroller::class,('Matthew_11')])->name('mat_11');
Route::get("/bible/new/matthew_12",[Biblecontroller::class,('Matthew_12')])->name('mat_12');
Route::get("/bible/new/matthew_13",[Biblecontroller::class,('Matthew_13')])->name('mat_13');
Route::get("/bible/new/matthew_14",[Biblecontroller::class,('Matthew_14')])->name('mat_14');
Route::get("/bible/new/matthew_15",[Biblecontroller::class,('Matthew_15')])->name('mat_15');
Route::get("/bible/new/matthew_16",[Biblecontroller::class,('Matthew_16')])->name('mat_16');
Route::get("/bible/new/matthew_17",[Biblecontroller::class,('Matthew_17')])->name('mat_17');
Route::get("/bible/new/matthew_18",[Biblecontroller::class,('Matthew_18')])->name('mat_18');
Route::get("/bible/new/matthew_19",[Biblecontroller::class,('Matthew_19')])->name('mat_19');
Route::get("/bible/new/matthew_20",[Biblecontroller::class,('Matthew_20')])->name('mat_20');
Route::get("/bible/new/matthew_21",[Biblecontroller::class,('Matthew_21')])->name('mat_21');
Route::get("/bible/new/matthew_22",[Biblecontroller::class,('Matthew_22')])->name('mat_22');
Route::get("/bible/new/matthew_23",[Biblecontroller::class,('Matthew_23')])->name('mat_23');
Route::get("/bible/new/matthew_24",[Biblecontroller::class,('Matthew_24')])->name('mat_24');
Route::get("/bible/new/matthew_25",[Biblecontroller::class,('Matthew_25')])->name('mat_25');
Route::get("/bible/new/matthew_26",[Biblecontroller::class,('Matthew_26')])->name('mat_26');
Route::get("/bible/new/matthew_27",[Biblecontroller::class,('Matthew_27')])->name('mat_27');
Route::get("/bible/new/matthew_28",[Biblecontroller::class,('Matthew_28')])->name('mat_28');
// Matthew
// Mark
Route::get("/bible/new/mark_1",[Biblecontroller::class,('Mark_1')])->name('mar_1');
Route::get("/bible/new/mark_2",[Biblecontroller::class,('Mark_2')])->name('mar_2');
Route::get("/bible/new/mark_3",[Biblecontroller::class,('Mark_3')])->name('mar_3');
Route::get("/bible/new/mark_4",[Biblecontroller::class,('Mark_4')])->name('mar_4');
Route::get("/bible/new/mark_5",[Biblecontroller::class,('Mark_5')])->name('mar_5');
Route::get("/bible/new/mark_6",[Biblecontroller::class,('Mark_6')])->name('mar_6');
Route::get("/bible/new/mark_7",[Biblecontroller::class,('Mark_7')])->name('mar_7');
Route::get("/bible/new/mark_8",[Biblecontroller::class,('Mark_8')])->name('mar_8');
Route::get("/bible/new/mark_9",[Biblecontroller::class,('Mark_9')])->name('mar_9');
Route::get("/bible/new/mark_10",[Biblecontroller::class,('Mark_10')])->name('mar_10');
Route::get("/bible/new/mark_11",[Biblecontroller::class,('Mark_11')])->name('mar_11');
Route::get("/bible/new/mark_12",[Biblecontroller::class,('Mark_12')])->name('mar_12');
Route::get("/bible/new/mark_13",[Biblecontroller::class,('Mark_13')])->name('mar_13');
Route::get("/bible/new/mark_14",[Biblecontroller::class,('Mark_14')])->name('mar_14');
Route::get("/bible/new/mark_15",[Biblecontroller::class,('Mark_15')])->name('mar_15');
Route::get("/bible/new/mark_16",[Biblecontroller::class,('Mark_16')])->name('mar_16');
// Mark
// Luke
Route::get("/bible/new/luke_1",[Biblecontroller::class,('Luke_1')])->name('luke_1');
Route::get("/bible/new/luke_2",[Biblecontroller::class,('Luke_2')])->name('luke_2');
Route::get("/bible/new/luke_3",[Biblecontroller::class,('Luke_3')])->name('luke_3');
Route::get("/bible/new/luke_4",[Biblecontroller::class,('Luke_4')])->name('luke_4');
Route::get("/bible/new/luke_5",[Biblecontroller::class,('Luke_5')])->name('luke_5');
Route::get("/bible/new/luke_6",[Biblecontroller::class,('Luke_6')])->name('luke_6');
Route::get("/bible/new/luke_7",[Biblecontroller::class,('Luke_7')])->name('luke_7');
Route::get("/bible/new/luke_8",[Biblecontroller::class,('Luke_8')])->name('luke_8');
Route::get("/bible/new/luke_9",[Biblecontroller::class,('Luke_9')])->name('luke_9');
Route::get("/bible/new/luke_10",[Biblecontroller::class,('Luke_10')])->name('luke_10');
Route::get("/bible/new/luke_11",[Biblecontroller::class,('Luke_11')])->name('luke_11');
Route::get("/bible/new/luke_12",[Biblecontroller::class,('Luke_12')])->name('luke_12');
Route::get("/bible/new/luke_13",[Biblecontroller::class,('Luke_13')])->name('luke_13');
Route::get("/bible/new/luke_14",[Biblecontroller::class,('Luke_14')])->name('luke_14');
Route::get("/bible/new/luke_15",[Biblecontroller::class,('Luke_15')])->name('luke_15');
Route::get("/bible/new/luke_16",[Biblecontroller::class,('Luke_16')])->name('luke_16');
Route::get("/bible/new/luke_17",[Biblecontroller::class,('Luke_17')])->name('luke_17');
Route::get("/bible/new/luke_18",[Biblecontroller::class,('Luke_18')])->name('luke_18');
Route::get("/bible/new/luke_19",[Biblecontroller::class,('Luke_19')])->name('luke_19');
Route::get("/bible/new/luke_20",[Biblecontroller::class,('Luke_20')])->name('luke_20');
Route::get("/bible/new/luke_21",[Biblecontroller::class,('Luke_21')])->name('luke_21');
Route::get("/bible/new/luke_22",[Biblecontroller::class,('Luke_22')])->name('luke_22');
Route::get("/bible/new/luke_23",[Biblecontroller::class,('Luke_23')])->name('luke_23');
Route::get("/bible/new/luke_24",[Biblecontroller::class,('Luke_24')])->name('luke_24');
// Luke
// John
Route::get("/bible/new/john_1",[Biblecontroller::class,('John_1')])->name('john_1');
Route::get("/bible/new/john_2",[Biblecontroller::class,('John_2')])->name('john_2');
Route::get("/bible/new/john_3",[Biblecontroller::class,('John_3')])->name('john_3');
Route::get("/bible/new/john_4",[Biblecontroller::class,('John_4')])->name('john_4');
Route::get("/bible/new/john_5",[Biblecontroller::class,('John_5')])->name('john_5');
Route::get("/bible/new/john_6",[Biblecontroller::class,('John_6')])->name('john_6');
Route::get("/bible/new/john_7",[Biblecontroller::class,('John_7')])->name('john_7');
Route::get("/bible/new/john_8",[Biblecontroller::class,('John_8')])->name('john_8');
Route::get("/bible/new/john_9",[Biblecontroller::class,('John_9')])->name('john_9');
Route::get("/bible/new/john_10",[Biblecontroller::class,('John_10')])->name('john_10');
Route::get("/bible/new/john_11",[Biblecontroller::class,('John_11')])->name('john_11');
Route::get("/bible/new/john_12",[Biblecontroller::class,('John_12')])->name('john_12');
Route::get("/bible/new/john_13",[Biblecontroller::class,('John_13')])->name('john_13');
Route::get("/bible/new/john_14",[Biblecontroller::class,('John_14')])->name('john_14');
Route::get("/bible/new/john_15",[Biblecontroller::class,('John_15')])->name('john_15');
Route::get("/bible/new/john_16",[Biblecontroller::class,('John_16')])->name('john_16');
Route::get("/bible/new/john_17",[Biblecontroller::class,('John_17')])->name('john_17');
Route::get("/bible/new/john_18",[Biblecontroller::class,('John_18')])->name('john_18');
Route::get("/bible/new/john_19",[Biblecontroller::class,('John_19')])->name('john_19');
Route::get("/bible/new/john_20",[Biblecontroller::class,('John_20')])->name('john_20');
Route::get("/bible/new/john_21",[Biblecontroller::class,('John_21')])->name('john_21');
// John
// Acts
Route::get("/bible/new/acts_1",[Biblecontroller::class,('Acts_1')])->name('acts_1');
Route::get("/bible/new/acts_2",[Biblecontroller::class,('Acts_2')])->name('acts_2');
Route::get("/bible/new/acts_3",[Biblecontroller::class,('Acts_3')])->name('acts_3');
Route::get("/bible/new/acts_4",[Biblecontroller::class,('Acts_4')])->name('acts_4');
Route::get("/bible/new/acts_5",[Biblecontroller::class,('Acts_5')])->name('acts_5');
Route::get("/bible/new/acts_6",[Biblecontroller::class,('Acts_6')])->name('acts_6');
Route::get("/bible/new/acts_7",[Biblecontroller::class,('Acts_7')])->name('acts_7');
Route::get("/bible/new/acts_8",[Biblecontroller::class,('Acts_8')])->name('acts_8');
Route::get("/bible/new/acts_9",[Biblecontroller::class,('Acts_9')])->name('acts_9');
Route::get("/bible/new/acts_10",[Biblecontroller::class,('Acts_10')])->name('acts_10');
Route::get("/bible/new/acts_11",[Biblecontroller::class,('Acts_11')])->name('acts_11');
Route::get("/bible/new/acts_12",[Biblecontroller::class,('Acts_12')])->name('acts_12');
Route::get("/bible/new/acts_13",[Biblecontroller::class,('Acts_13')])->name('acts_13');
Route::get("/bible/new/acts_14",[Biblecontroller::class,('Acts_14')])->name('acts_14');
Route::get("/bible/new/acts_15",[Biblecontroller::class,('Acts_15')])->name('acts_15');
Route::get("/bible/new/acts_16",[Biblecontroller::class,('Acts_16')])->name('acts_16');
Route::get("/bible/new/acts_17",[Biblecontroller::class,('Acts_17')])->name('acts_17');
Route::get("/bible/new/acts_18",[Biblecontroller::class,('Acts_18')])->name('acts_18');
Route::get("/bible/new/acts_19",[Biblecontroller::class,('Acts_19')])->name('acts_19');
Route::get("/bible/new/acts_20",[Biblecontroller::class,('Acts_20')])->name('acts_20');
Route::get("/bible/new/acts_21",[Biblecontroller::class,('Acts_21')])->name('acts_21');
Route::get("/bible/new/acts_22",[Biblecontroller::class,('Acts_22')])->name('acts_22');
Route::get("/bible/new/acts_23",[Biblecontroller::class,('Acts_23')])->name('acts_23');
Route::get("/bible/new/acts_24",[Biblecontroller::class,('Acts_24')])->name('acts_24');
Route::get("/bible/new/acts_25",[Biblecontroller::class,('Acts_25')])->name('acts_25');
Route::get("/bible/new/acts_26",[Biblecontroller::class,('Acts_26')])->name('acts_26');
Route::get("/bible/new/acts_27",[Biblecontroller::class,('Acts_27')])->name('acts_27');
Route::get("/bible/new/acts_28",[Biblecontroller::class,('Acts_28')])->name('acts_28');
// Acts
// Romans
Route::get("/bible/new/romans_1",[Biblecontroller::class,('Romans_1')])->name('rom_1');
Route::get("/bible/new/romans_2",[Biblecontroller::class,('Romans_2')])->name('rom_2');
Route::get("/bible/new/romans_3",[Biblecontroller::class,('Romans_3')])->name('rom_3');
Route::get("/bible/new/romans_4",[Biblecontroller::class,('Romans_4')])->name('rom_4');
Route::get("/bible/new/romans_5",[Biblecontroller::class,('Romans_5')])->name('rom_5');
Route::get("/bible/new/romans_6",[Biblecontroller::class,('Romans_6')])->name('rom_6');
Route::get("/bible/new/romans_7",[Biblecontroller::class,('Romans_7')])->name('rom_7');
Route::get("/bible/new/romans_8",[Biblecontroller::class,('Romans_8')])->name('rom_8');
Route::get("/bible/new/romans_9",[Biblecontroller::class,('Romans_9')])->name('rom_9');
Route::get("/bible/new/romans_10",[Biblecontroller::class,('Romans_10')])->name('rom_10');
Route::get("/bible/new/romans_11",[Biblecontroller::class,('Romans_11')])->name('rom_11');
Route::get("/bible/new/romans_12",[Biblecontroller::class,('Romans_12')])->name('rom_12');
Route::get("/bible/new/romans_13",[Biblecontroller::class,('Romans_13')])->name('rom_13');
Route::get("/bible/new/romans_14",[Biblecontroller::class,('Romans_14')])->name('rom_14');
Route::get("/bible/new/romans_15",[Biblecontroller::class,('Romans_15')])->name('rom_15');
Route::get("/bible/new/romans_16",[Biblecontroller::class,('Romans_16')])->name('rom_16');
// Romans
// 1 Corinthians
Route::get("/bible/new/corinthians1_1",[Biblecontroller::class,('Corinthians_1_1')])->name('cor1_1');
Route::get("/bible/new/corinthians1_2",[Biblecontroller::class,('Corinthians_1_2')])->name('cor1_2');
Route::get("/bible/new/corinthians1_3",[Biblecontroller::class,('Corinthians_1_3')])->name('cor1_3');
Route::get("/bible/new/corinthians1_4",[Biblecontroller::class,('Corinthians_1_4')])->name('cor1_4');
Route::get("/bible/new/corinthians1_5",[Biblecontroller::class,('Corinthians_1_5')])->name('cor1_5');
Route::get("/bible/new/corinthians1_6",[Biblecontroller::class,('Corinthians_1_6')])->name('cor1_6');
Route::get("/bible/new/corinthians1_7",[Biblecontroller::class,('Corinthians_1_7')])->name('cor1_7');
Route::get("/bible/new/corinthians1_8",[Biblecontroller::class,('Corinthians_1_8')])->name('cor1_8');
Route::get("/bible/new/corinthians1_9",[Biblecontroller::class,('Corinthians_1_9')])->name('cor1_9');
Route::get("/bible/new/corinthians1_10",[Biblecontroller::class,('Corinthians_1_10')])->name('cor1_10');
Route::get("/bible/new/corinthians1_11",[Biblecontroller::class,('Corinthians_1_11')])->name('cor1_11');
Route::get("/bible/new/corinthians1_12",[Biblecontroller::class,('Corinthians_1_12')])->name('cor1_12');
Route::get("/bible/new/corinthians1_13",[Biblecontroller::class,('Corinthians_1_13')])->name('cor1_13');
Route::get("/bible/new/corinthians1_14",[Biblecontroller::class,('Corinthians_1_14')])->name('cor1_14');
Route::get("/bible/new/corinthians1_15",[Biblecontroller::class,('Corinthians_1_15')])->name('cor1_15');
Route::get("/bible/new/corinthians1_16",[Biblecontroller::class,('Corinthians_1_16')])->name('cor1_16');
// 1 Corinthians
// 2 Corinthians
Route::get("/bible/new/corinthians2_1",[Biblecontroller::class,('Corinthians_2_1')])->name('cor2_1');
Route::get("/bible/new/corinthians2_2",[Biblecontroller::class,('Corinthians_2_2')])->name('cor2_2');
Route::get("/bible/new/corinthians2_3",[Biblecontroller::class,('Corinthians_2_3')])->name('cor2_3');
Route::get("/bible/new/corinthians2_4",[Biblecontroller::class,('Corinthians_2_4')])->name('cor2_4');
Route::get("/bible/new/corinthians2_5",[Biblecontroller::class,('Corinthians_2_5')])->name('cor2_5');
Route::get("/bible/new/corinthians2_6",[Biblecontroller::class,('Corinthians_2_6')])->name('cor2_6');
Route::get("/bible/new/corinthians2_7",[Biblecontroller::class,('Corinthians_2_7')])->name('cor2_7');
Route::get("/bible/new/corinthians2_8",[Biblecontroller::class,('Corinthians_2_8')])->name('cor2_8');
Route::get("/bible/new/corinthians2_9",[Biblecontroller::class,('Corinthians_2_9')])->name('cor2_9');
Route::get("/bible/new/corinthians2_10",[Biblecontroller::class,('Corinthians_2_10')])->name('cor2_10');
Route::get("/bible/new/corinthians2_11",[Biblecontroller::class,('Corinthians_2_11')])->name('cor2_11');
Route::get("/bible/new/corinthians2_12",[Biblecontroller::class,('Corinthians_2_12')])->name('cor2_12');
Route::get("/bible/new/corinthians2_13",[Biblecontroller::class,('Corinthians_2_13')])->name('cor2_13');
// 2 Corinthians
// Galatians
Route::get("/bible/new/galatians_1",[Biblecontroller::class,('Galatians_1')])->name('gal_1');
Route::get("/bible/new/galatians_2",[Biblecontroller::class,('Galatians_2')])->name('gal_2');
Route::get("/bible/new/galatians_3",[Biblecontroller::class,('Galatians_3')])->name('gal_3');
Route::get("/bible/new/galatians_4",[Biblecontroller::class,('Galatians_4')])->name('gal_4');
Route::get("/bible/new/galatians_5",[Biblecontroller::class,('Galatians_5')])->name('gal_5');
Route::get("/bible/new/galatians_6",[Biblecontroller::class,('Galatians_6')])->name('gal_6');
// Galatians
// Ephesians
Route::get("/bible/new/ephesians_1",[Biblecontroller::class,('Ephesians_1')])->name('eph_1');
Route::get("/bible/new/ephesians_2",[Biblecontroller::class,('Ephesians_2')])->name('eph_2');
Route::get("/bible/new/ephesians_3",[Biblecontroller::class,('Ephesians_3')])->name('eph_3');
Route::get("/bible/new/ephesians_4",[Biblecontroller::class,('Ephesians_4')])->name('eph_4');
Route::get("/bible/new/ephesians_5",[Biblecontroller::class,('Ephesians_5')])->name('eph_5');
Route::get("/bible/new/ephesians_6",[Biblecontroller::class,('Ephesians_6')])->name('eph_6');
// Ehpesians
// Philippians
Route::get("/bible/new/philippians_1",[Biblecontroller::class,('Philippians_1')])->name('phil_1');
Route::get("/bible/new/philippians_2",[Biblecontroller::class,('Philippians_2')])->name('phil_2');
Route::get("/bible/new/philippians_3",[Biblecontroller::class,('Philippians_3')])->name('phil_3');
Route::get("/bible/new/philippians_4",[Biblecontroller::class,('Philippians_4')])->name('phil_4');
// Philippians
// Colossians
Route::get("/bible/new/colossians_1",[Biblecontroller::class,('Colossians_1')])->name('col_1');
Route::get("/bible/new/colossians_2",[Biblecontroller::class,('Colossians_2')])->name('col_2');
Route::get("/bible/new/colossians_3",[Biblecontroller::class,('Colossians_3')])->name('col_3');
Route::get("/bible/new/colossians_4",[Biblecontroller::class,('Colossians_4')])->name('col_4');
// Colossians
// 1 Thessalonians
Route::get("/bible/new/Thessalonians_1_1",[Biblecontroller::class,('Thessalonians_1_1')])->name('thess1_1');
Route::get("/bible/new/Thessalonians_1_2",[Biblecontroller::class,('Thessalonians_1_2')])->name('thess1_2');
Route::get("/bible/new/Thessalonians_1_3",[Biblecontroller::class,('Thessalonians_1_3')])->name('thess1_3');
Route::get("/bible/new/Thessalonians_1_4",[Biblecontroller::class,('Thessalonians_1_4')])->name('thess1_4');
Route::get("/bible/new/Thessalonians_1_5",[Biblecontroller::class,('Thessalonians_1_5')])->name('thess1_5');
// 1 Thessalonians
// 2 Thessalonians
Route::get("/bible/new/Thessalonians_2_1",[Biblecontroller::class,('Thessalonians_2_1')])->name('thess2_1');
Route::get("/bible/new/Thessalonians_2_2",[Biblecontroller::class,('Thessalonians_2_2')])->name('thess2_2');
Route::get("/bible/new/Thessalonians_2_3",[Biblecontroller::class,('Thessalonians_2_3')])->name('thess2_3');
// 2 Thessalonians
// 1 Timothy
Route::get("/bible/new/timothy_1_1",[Biblecontroller::class,('Timothy_1_1')])->name('tim1_1');
Route::get("/bible/new/timothy_1_2",[Biblecontroller::class,('Timothy_1_2')])->name('tim1_2');
Route::get("/bible/new/timothy_1_3",[Biblecontroller::class,('Timothy_1_3')])->name('tim1_3');
Route::get("/bible/new/timothy_1_4",[Biblecontroller::class,('Timothy_1_4')])->name('tim1_4');
Route::get("/bible/new/timothy_1_5",[Biblecontroller::class,('Timothy_1_5')])->name('tim1_5');
Route::get("/bible/new/timothy_1_6",[Biblecontroller::class,('Timothy_1_6')])->name('tim1_6');
// 1 Timothy
// 2 Timothy
Route::get("/bible/new/timothy_2_1",[Biblecontroller::class,('Timothy_2_1')])->name('timo2_1');
Route::get("/bible/new/timothy_2_2",[Biblecontroller::class,('Timothy_2_2')])->name('timo2_2');
Route::get("/bible/new/timothy_2_3",[Biblecontroller::class,('Timothy_2_3')])->name('timo2_3');
Route::get("/bible/new/timothy_2_4",[Biblecontroller::class,('Timothy_2_4')])->name('timo2_4');
// 2 Timothy
// Titus
Route::get("/bible/new/titus_1",[Biblecontroller::class,('Titus_1')])->name('tit_1');
Route::get("/bible/new/titus_2",[Biblecontroller::class,('Titus_2')])->name('tit_2');
Route::get("/bible/new/titus_3",[Biblecontroller::class,('Titus_3')])->name('tit_3');
// Titus
// Philemon
Route::get("/bible/new/philemon_1",[Biblecontroller::class,('Philemon_1')])->name('phm_1');
// Philemon
// Hebrews
Route::get("/bible/new/hebrews_1",[Biblecontroller::class,('Hebrews_1')])->name('hebr_1');
Route::get("/bible/new/hebrews_2",[Biblecontroller::class,('Hebrews_2')])->name('hebr_2');
Route::get("/bible/new/hebrews_3",[Biblecontroller::class,('Hebrews_3')])->name('hebr_3');
Route::get("/bible/new/hebrews_4",[Biblecontroller::class,('Hebrews_4')])->name('hebr_4');
Route::get("/bible/new/hebrews_5",[Biblecontroller::class,('Hebrews_5')])->name('hebr_5');
Route::get("/bible/new/hebrews_6",[Biblecontroller::class,('Hebrews_6')])->name('hebr_6');
Route::get("/bible/new/hebrews_7",[Biblecontroller::class,('Hebrews_7')])->name('hebr_7');
Route::get("/bible/new/hebrews_8",[Biblecontroller::class,('Hebrews_8')])->name('hebr_8');
Route::get("/bible/new/hebrews_9",[Biblecontroller::class,('Hebrews_9')])->name('hebr_9');
Route::get("/bible/new/hebrews_10",[Biblecontroller::class,('Hebrews_10')])->name('hebr_10');
Route::get("/bible/new/hebrews_11",[Biblecontroller::class,('Hebrews_11')])->name('hebr_11');
Route::get("/bible/new/hebrews_12",[Biblecontroller::class,('Hebrews_12')])->name('hebr_12');
Route::get("/bible/new/hebrews_13",[Biblecontroller::class,('Hebrews_13')])->name('hebr_13');
// Hebrews
// James
Route::get("/bible/new/james_1",[Biblecontroller::class,('James_1')])->name('james_1');
Route::get("/bible/new/james_2",[Biblecontroller::class,('James_2')])->name('james_2');
Route::get("/bible/new/james_3",[Biblecontroller::class,('James_3')])->name('james_3');
Route::get("/bible/new/james_4",[Biblecontroller::class,('James_4')])->name('james_4');
Route::get("/bible/new/james_5",[Biblecontroller::class,('James_5')])->name('james_5');
// James
// 1 Peter
Route::get("/bible/new/peter_1_1",[Biblecontroller::class,('Peter_1_1')])->name('pet1_1');
Route::get("/bible/new/peter_1_2",[Biblecontroller::class,('Peter_1_2')])->name('pet1_2');
Route::get("/bible/new/peter_1_3",[Biblecontroller::class,('Peter_1_3')])->name('pet1_3');
Route::get("/bible/new/peter_1_4",[Biblecontroller::class,('Peter_1_4')])->name('pet1_4');
Route::get("/bible/new/peter_1_5",[Biblecontroller::class,('Peter_1_5')])->name('pet1_5');
// 1 Peter
// 2 Peter
Route::get("/bible/new/peter_2_1",[Biblecontroller::class,('Peter_2_1')])->name('pet2_1');
Route::get("/bible/new/peter_2_2",[Biblecontroller::class,('Peter_2_2')])->name('pet2_2');
Route::get("/bible/new/peter_2_3",[Biblecontroller::class,('Peter_2_3')])->name('pet2_3');
// 2 Peter
// 1 John
Route::get("/bible/new/john_1_1",[Biblecontroller::class,('John_1_1')])->name('joh1_1');
Route::get("/bible/new/john_1_2",[Biblecontroller::class,('John_1_2')])->name('joh1_2');
Route::get("/bible/new/john_1_3",[Biblecontroller::class,('John_1_3')])->name('joh1_3');
Route::get("/bible/new/john_1_4",[Biblecontroller::class,('John_1_4')])->name('joh1_4');
Route::get("/bible/new/john_1_5",[Biblecontroller::class,('John_1_5')])->name('joh1_5');
// 1 John
// 2 John
Route::get("/bible/new/john_2_1",[Biblecontroller::class,('John_2_1')])->name('joh2_1');
// 2 John
// 3 John
Route::get("/bible/new/john_3_1",[Biblecontroller::class,('John_3_1')])->name('joh3_1');
// 3 John
// Jude
Route::get("/bible/new/jude_1",[Biblecontroller::class,('Jude_1')])->name('jude_1');
// Jude
// Revelation
Route::get("/bible/new/revelation_1",[Biblecontroller::class,('Revelation_1')])->name('rev_1');
Route::get("/bible/new/revelation_2",[Biblecontroller::class,('Revelation_2')])->name('rev_2');
Route::get("/bible/new/revelation_3",[Biblecontroller::class,('Revelation_3')])->name('rev_3');
Route::get("/bible/new/revelation_4",[Biblecontroller::class,('Revelation_4')])->name('rev_4');
Route::get("/bible/new/revelation_5",[Biblecontroller::class,('Revelation_5')])->name('rev_5');
Route::get("/bible/new/revelation_6",[Biblecontroller::class,('Revelation_6')])->name('rev_6');
Route::get("/bible/new/revelation_7",[Biblecontroller::class,('Revelation_7')])->name('rev_7');
Route::get("/bible/new/revelation_8",[Biblecontroller::class,('Revelation_8')])->name('rev_8');
Route::get("/bible/new/revelation_9",[Biblecontroller::class,('Revelation_9')])->name('rev_9');
Route::get("/bible/new/revelation_10",[Biblecontroller::class,('Revelation_10')])->name('rev_10');
Route::get("/bible/new/revelation_11",[Biblecontroller::class,('Revelation_11')])->name('rev_11');
Route::get("/bible/new/revelation_12",[Biblecontroller::class,('Revelation_12')])->name('rev_12');
Route::get("/bible/new/revelation_13",[Biblecontroller::class,('Revelation_13')])->name('rev_13');
Route::get("/bible/new/revelation_14",[Biblecontroller::class,('Revelation_14')])->name('rev_14');
Route::get("/bible/new/revelation_15",[Biblecontroller::class,('Revelation_15')])->name('rev_15');
Route::get("/bible/new/revelation_16",[Biblecontroller::class,('Revelation_16')])->name('rev_16');
Route::get("/bible/new/revelation_17",[Biblecontroller::class,('Revelation_17')])->name('rev_17');
Route::get("/bible/new/revelation_18",[Biblecontroller::class,('Revelation_18')])->name('rev_18');
Route::get("/bible/new/revelation_19",[Biblecontroller::class,('Revelation_19')])->name('rev_19');
Route::get("/bible/new/revelation_20",[Biblecontroller::class,('Revelation_20')])->name('rev_20');
Route::get("/bible/new/revelation_21",[Biblecontroller::class,('Revelation_21')])->name('rev_21');
Route::get("/bible/new/revelation_22",[Biblecontroller::class,('Revelation_22')])->name('rev_22');
// Revelation
// New Testamets

