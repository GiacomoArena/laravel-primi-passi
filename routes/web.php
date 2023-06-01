<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $names = ['giacomo', 'giovanni', 'lorenzo','federica'];

    return view('home', compact('names'));
})->name('home');



Route::get('/about-us', function (){
    $goal = 10;
    $colors = ['black', 'red', 'blue','pink'];

    return view('about',compact('colors','goal'));
})->name('about');
