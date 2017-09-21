<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

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
}
