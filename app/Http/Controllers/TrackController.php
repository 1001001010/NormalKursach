<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Comment;
use Auth;

class TrackController extends Controller
{
    public function show_track($id)
    {
        $track = Track::with(['comment'])->where('id', $id)->first();
        return view('showTrackPage', ['track' => $track]);
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
        
        // Comment::where('id', $comment_id)->delete();
        return redirect()->back();
    }
}
