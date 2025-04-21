<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category', 'tags')->get();
        $categorias = Category::all();
        $tags = Tag::all();
        return view('posts.index', compact('posts', 'categorias', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tags' => 'array|exists:tags,id'
        ]);

        $posts = Post::create([
            'category_id' => $request->category_id,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        $posts->tags()->attach($request->tags);

        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categorias = category::all();
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'categorias', 'tags'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tags' => 'array|exists:tags,id'
        ]);

        $post->update([
            'category_id' => $request->category_id,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
