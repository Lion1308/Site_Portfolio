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
    return view('md');
})->name('motion-design');

Route::get('/illustration', function () {
    return view('il');
})->name('illustration');

Route::get('/video-editing', function () {
    return view('vd');
})->name('video-editing');

Route::get('/social_media_and_website_animation', function () {
    return view('smwa');
})->name('social_media_and_website_animation');
