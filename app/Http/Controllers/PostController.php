<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan daftar post
    public function index()
    {
        $posts = Post::all(); // Mengambil semua post dari database
        return view('posts.index', compact('posts')); // Mengirim data post ke view
    }

    // Menampilkan form untuk membuat post baru
    public function create()
    {
        return view('posts.create');
    }

    // Menyimpan post baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($validatedData); // Menyimpan data ke database

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Menampilkan detail post tertentu
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Menampilkan form untuk mengedit post tertentu
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Memperbarui post tertentu di database
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    // Menghapus post tertentu dari database
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
