<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => currentUser()->timeline()
        ]);
    }

    public function store()
    {
        // If validate passes, it returns an array
        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect('/tweets');
    }
}
