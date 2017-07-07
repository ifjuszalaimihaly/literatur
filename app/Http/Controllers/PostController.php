<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->withCategories($categories);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->city = $request->city;
        $post->written_at = $request->written_at;
        $post->slug = $this->createslug($post->title,$post->written_at);
        $post->category_id = $request->category_id;
        $post->save();

        return redirect()->route("posts.show", $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view("posts.show")->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view("posts.edit")->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $post=Post::find($id);
      $post->title=$request->title;
      $post->content=$request->content;
      $post->city=$request->city;
      $post->written_at=$request->written_at;
      $post->save();
      return redirect()->route("posts.show", $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route("posts.index");
    }

    private function createslug($title, $date)//make it nicer
    {
       $hu=array('/é/','/É/','/á/','/Á/','/ó/','/Ó/','/ö/','/Ö/','/ő/','/Ő/','/ú/','/Ú/','/ű/','/Ű/','/ü/','/Ü/','/í/','/Í/','/ /',);
       $en= array('e','E','a','A','o','O','o','O','o','O','u','U','u','U','u','U','i','I','-');
       $r=preg_replace($hu,$en,$title);
       $r=str_replace('?', '', $r);
       $r=str_replace(',', '', $r);
       $r=str_replace(';', '', $r);
       $r=str_replace('!', '', $r);
       $r=str_replace('.', '', $r);
       $r=strtolower($r);
       return $date."-".$r;
   }
}
