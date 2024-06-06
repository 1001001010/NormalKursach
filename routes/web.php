<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

Route::get('/', function () {
    return view('mainPage');
});


Route::get('/upload', function () {
    return view('uploadTrackPage');
})->middleware('auth');

Route::post('/new_music', [MusicController::class, 'New_Music'])->name('NewMusic');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/track/{id}', [App\Http\Controllers\TrackController::class, 'show_track'])->name('ShawTrack');
