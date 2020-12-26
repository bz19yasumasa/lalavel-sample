<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $posts = Post::get();
        return view('post/index',compact('posts'));
    }

    public function create() {
        return view('post/create');
    }

    public function edit($id) {
        $post = Post::where('id','=',$id)->first();

        return view('post/edit',compact('post'));
    }





    public function store(Request $request) {
        $request->validate([
            'content' => 'required'
        ]);

        $content = $request->content;
        $user_id = Auth::id();


        Post::create([
            'content'=> $content,
            'user_id'=> $user_id
        ]);

        return redirect('/post');
    }



    public function update(Request $request,$id) {
        $content = $request->content;
        $user_id = Auth::id();
        $post = Post::where('id','=',$id)->first();

        $post->update([
            'content'=> $content,
        ]);

        return redirect('/post');

    }

    public function delete($id) {

        $post = Post::where('id','=',$id)->first();

        $post->delete();

        return redirect('/post');

    }
}



















