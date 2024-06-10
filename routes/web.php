<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\HomeController;

Route::get('/upload', function () {
    return view('uploadTrackPage');
})->middleware('auth');

Route::post('/new_music', [MusicController::class, 'New_Music'])->name('NewMusic')->middleware('auth');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'main'])->name('main');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/track/{id}', [App\Http\Controllers\TrackController::class, 'show_track'])->name('ShawTrack');

Route::get('/like/{track_id}', [App\Http\Controllers\TrackController::class, 'like'])->name('Like')->middleware('auth');

Route::post('/new_comment/{id}', [App\Http\Controllers\TrackController::class, 'new_comment'])->name('NewCommetn')->middleware('auth');

Route::get('/del_comment/{comment_id}', [App\Http\Controllers\TrackController::class, 'delete_comment'])->name('DeleteComm')->middleware('auth');

Route::get('/del_track/{track_id}', [App\Http\Controllers\TrackController::class, 'delete_track'])->name('deleteTrack')->middleware('auth');

Route::post('/search', [HomeController::class, 'search'])->name('search');