<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('about');
})->name('about');


Route::get('/motion-design', function () {
    return view('motion-design');
})->name('motion-design');

Route::get('/illustration', function () {
    return view('illustration');
})->name('illustration');

//Route::get('/video-editing', function () {
//    return view('video-editing');
//})->name('video-editing');

Route::get('/web-animation', function () {
    return view('web-animation');
})->name('web-animation');
