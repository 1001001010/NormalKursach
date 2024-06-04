<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

Route::get('/', function () {
    return view('mainPage');
});


Route::get('/upload', function () {
    return view('uploadTrackPage');
});

Route::post('/new_music', [MusicController::class, 'New_Music'])->name('NewMusic');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
