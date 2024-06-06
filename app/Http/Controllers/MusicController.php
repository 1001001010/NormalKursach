<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use Illuminate\Support\Facades\Auth;

class MusicController extends Controller
{
    public function new_music(Request $request)
    {
        // $validatedData = $request->validate([
        //     'track' => 'required|mimetypes:audio/flac,audio/wav,audio/alac,audio/aiff|max:8192',
        //     'track_name' => 'required|string',
        //     'genre_track' => 'required|string',
        //     'cover' => 'required|image|mimes:jpg,png,jpeg,webp|max:8192'
        // ]);

        // Получаем трек и обложку
        $musicFile = $request->file('track');
        $coverFile = $request->file('cover');
        // Получаем имя и жанр трэка
        $trackName = $request->input('track_name');
        $genre = $request->input('genre_track');
        // Получение unix времени
        $timestamp = time();

        // Скачиваем и переименовываем в $timestamp трек
        $musicPath = $musicFile->storeAs('music', $timestamp. '.'. $musicFile->getClientOriginalExtension(), 'public');

        // Скачиваем и переименовываем в $timestamp обложку
        $coverPath = $coverFile->storeAs('covers', $timestamp. '.'. $coverFile->getClientOriginalExtension(), 'public');

        $track = [
            'user_id' => Auth::user()->id,
            'name' => $trackName,
            'genre' => $genre,
            'music_file' => $musicPath,
            'cover_file' => $coverPath
        ];
        Track::create($track);

        return redirect()->back();
    }
}
