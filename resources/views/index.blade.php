@extends('layouts.app') <!-- Pastikan ini sesuai dengan layout yang kamu miliki -->

@section('content')
<div class="relative overflow-x-auto">
    <h1 class="text-2xl font-bold mb-4">Post List</h1>

    @if($posts->isEmpty())
    <p>No posts available.</p>
    @else
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $post->title }}</th>
                <td class="px-6 py-4">
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
    @endif
</div>
@endsection