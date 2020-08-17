<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('tweets.index', [
            'tweets'    =>  auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body'  =>  'required|max:255'
        ]);

        Tweet::create([
            'body'  =>  $attributes['body'],
            'user_id'   =>  auth()->id()
        ]);

        return redirect('/tweets');
    }
}
