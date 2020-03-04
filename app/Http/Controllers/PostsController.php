<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|in:old,new,interesting,boring'
        ]);

        if ($data['category'] == 'old') {
            $data['localCategory'] = 'Старый';
        } else if ($data['category'] == 'new') {
            $data['localCategory'] = 'Новый';
        } else if ($data['category'] == 'boring') {
            $data['localCategory'] = 'Скучный';
        } else {
            $data['localCategory'] = 'Интересный';
        }

        Post::create($data);
        return redirect('/manager');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|in:old,new,interesting,boring'
        ]);

        if ($data['category'] == 'old') {
            $data['localCategory'] = 'Старый';
        } else if ($data['category'] == 'new') {
            $data['localCategory'] = 'Новый';
        } else if ($data['category'] == 'boring') {
            $data['localCategory'] = 'Скучный';
        } else {
            $data['localCategory'] = 'Интересный';
        }

        Post::find($request->id)->update($data);
        return redirect('/manager');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function destroy(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        return redirect('/manager');

    }

    public function list()
    {
        $category='';
        $posts = Post::latest()->get();
        return view('welcome', compact('posts','category'));
    }

    public function filter(Request $request)
    {
        $category = $request->category;
        if($category!='all'){
        $posts = Post::where('category', '=', $category)->latest()->get();
            }else{
            $posts = Post::latest()->get();
        }
        return view('welcome', compact('posts','category'));

    }
}
