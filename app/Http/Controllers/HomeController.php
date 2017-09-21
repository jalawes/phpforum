<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $topics = Topic::all();

        return view('home', compact('topics'));
    }

    public function show(Topic $topic) {
        return view('topic', compact('topic'));
    }

    public function store(Topic $topic, Request $request) {
        Reply::create([
            'topic_id' => $topic->id,
            'user_id'  => Auth::user()->id,
            'body'     => $request->body,
        ]);
        $request->session()->flash('status', 'Reply sent!');

        return view('topic', compact('topic'));
    }
}
