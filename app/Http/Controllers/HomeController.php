<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Ayo belajar Laravel 5.5!',
            'subTitle' => 'Mulai membangun website elegant dengan sangat mudah',
        );
        $posts = Post::all();

        return view('pages.home', compact('data', 'posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('post.show', compact('post'));
    }
}
