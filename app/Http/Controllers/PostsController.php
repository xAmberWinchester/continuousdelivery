<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = \App\Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $posts = new Post();

        $posts->title = request('postName');
        $posts->text = request('projectDescriptionTextArea');
        $posts->image_url = request('imageUrl');
        $posts->datum = request('datumInput');
        $posts->auteur = request('AuteurInput');
        $posts->save();

        return redirect('/posts');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
