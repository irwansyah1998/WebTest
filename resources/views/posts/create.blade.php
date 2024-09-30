@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
  <h1 class="text-2xl font-bold mb-4">Create New Post</h1>

  <form action="{{ route('posts.store') }}" method="POST" class="max-w-sm mx-auto">
    @csrf
    <div class="mb-4">
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base input</label>
    <input name="title" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-4">
      <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
      <textarea name="content" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Content..."></textarea>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
  </form>
</div>
@endsection