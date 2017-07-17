<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use Mail;

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

    public function contact(){
      return view('layouts.contact');
    }

    public function postcontact(Request $request){
      $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
      );
      Mail::send('emails.contact', $data, function($message) use($data){
        $message->from($data['email'], $data['name']);
        $message->to('literatur@szalaiamihaly.hu');
        $message->subject($data['subject']);
      });
      return redirect()->to('contact');
    }
}
