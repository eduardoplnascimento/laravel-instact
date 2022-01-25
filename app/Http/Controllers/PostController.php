<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $posts = $user->posts()->orderBy('id', 'desc')->get();

        return view('posts.index', compact('user', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();

        return view('posts.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        // Armazenar imagem
        $path = $request->photo->store('public/images');

        Post::create([
            'image' => Storage::url($path),
            'description' => $request->description,
            'user_id' => $user->id
        ]);

        return redirect()->route('dashboard')->withSuccess('Post criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $user = auth()->user();

        return view('posts.show', compact('user', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $user = auth()->user();

        return view('posts.edit', compact('user', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $user = auth()->user();

        if ($post->user_id !== $user->id) {
            abort(404);
        }

        $post->update([
            'image' => $request->image,
            'description' => $request->description
        ]);

        return redirect()->route('dashboard')->withSuccess('Post editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $user = auth()->user();

        if ($post->user_id !== $user->id) {
            abort(404);
        }

        $post->delete();

        return redirect()->route('dashboard')->withSuccess('Post removido com sucesso');
    }
}
