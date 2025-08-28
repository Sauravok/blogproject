<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function createPost(Request $request)
    {

        $incomingfields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingfields['title'] = strip_tags($incomingfields['title']);
        $incomingfields['body'] = strip_tags($incomingfields['body']);


        $incomingfields['user_id'] = Auth::id();

     Post::create($incomingfields);
return redirect('/showposts')->with('success', 'Post created successfully!');

    }

    public function editPost(Post $post)
    {

        if (Auth::user()->id !== $post['user_id']) {
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);
    }


    public function updatePost(Post $post, Request $request)
    {
        if (Auth::user()->id !== $post['user_id']) {
            return redirect('/');
        }

        $incomingfields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingfields['title'] = strip_tags($incomingfields['title']);
        $incomingfields['body'] = strip_tags($incomingfields['body']);

        $post->update($incomingfields);
        return redirect('/showposts');
    }

    public function deletePost(Post $post)
    {
        if (Auth::user()->id !== $post['user_id']) {
            return redirect('/');
        }
        $post->delete();
        return redirect('/showposts');
    }
   
}
