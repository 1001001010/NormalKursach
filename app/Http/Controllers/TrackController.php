<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Comment;
use App\Models\Like;
use Auth;

class TrackController extends Controller
{
    public function show_track($id)
    {
        $track = Track::with(['comment'])->where('id', $id)->first();
        $like = Like::where('track_id', $id)->where('user_id', Auth::user()->id)->first();
        return view('showTrackPage', ['track' => $track, 'like' => $like]);
    }

    public function new_comment($id, Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',
        ]);

        $theme = Comment::create([
            'user_id' => Auth::user()->id,
            'track_id' => $id,
            'comment' => $request->comment
        ]);
        $theme->save();
        return redirect()->back();
    }

    public function delete_comment($comment_id)
    {
        Comment::where('id', $comment_id)->delete();
        return redirect()->back();
    }
    public function like($track_id)
    {
        $likes = Like::where('user_id', Auth::user()->id)->where('track_id', $track_id)->first();
        if ($likes) {
            Like::where('track_id', $track_id)->where('user_id', Auth::user()->id)->delete();
        } else {
            $like_info = ([
                'user_id' => Auth::user()->id,
                'track_id' => $track_id,
            ]);
            Like::create($like_info);
        }
        return redirect()->back();
    }
    public function delete_track($track_id)
    {
        Track::where('id', $track_id)->delete();
        return view('home', ['tracks' => Track::where('user_id', Auth::user()->id)->get()]);
    }
}
