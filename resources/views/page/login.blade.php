@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Login</h1>

    <form action="{{ route('posts.store') }}" method="POST" class="max-w-sm mx-auto">
        @csrf
        <div class="mb-4">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input name="email" type="email" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input name="pass" type="password" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection