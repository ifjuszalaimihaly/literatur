<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('updated_at','desc')->paginate(10);
    	return view('layouts.welcome')->withPosts($posts);
    }

    public function singlepost($slug){
    	$post = Post::where('slug', '=', $slug)->first();
    	return view('layouts.singlepost')->withPost($post);
    }
}
