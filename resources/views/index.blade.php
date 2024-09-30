@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
  <h1 class="text-2xl font-bold mb-4">Post List</h1>
  <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Post</a>
  <div class="mt-6">
    <table class="min-w-full bg-white">
      <thead>
        <tr>
          <th class="py-2">Title</th>
          <th class="py-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td class="py-2">{{ $post->title }}</td>
          <td class="py-2">
            <a href="{{ route('posts.edit', $post->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
              @csrf
              @method('DELETE')
              <button class="bg-red-500 text-white px-4 py-2 rounded" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
