@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
  <h1 class="text-2xl font-bold mb-4">Create New Post</h1>
  
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="mb-4">
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>

    <div class="mb-4">
      <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
      <textarea name="content" id="content" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
  </form>
</div>
@endsection
