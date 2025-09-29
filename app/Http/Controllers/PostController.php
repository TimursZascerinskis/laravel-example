<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Rāda visus ierakstus
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Rāda formu jaunam ierakstam
    public function create()
    {
        return view('posts.create');
    }

    // Saglabā jaunu ierakstu
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->only('title', 'content'));

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Rāda atsevišķu ierakstu
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Rāda formu ieraksta labojumiem
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Atjauno ierakstu
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->only('title', 'content'));

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    // Dzēš ierakstu
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
