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



// Loguout
Route::get("/logout",[Homecontroller::class,('Logout')])->name('logout');
// User acc

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