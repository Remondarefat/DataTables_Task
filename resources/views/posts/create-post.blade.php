<!-- resources/views/posts/create-post.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container mx-auto">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="text-center text-3xl font-extrabold text-gray-900">
                Create a New Post
            </div>
            <div class="mt-4 px-6 py-4 bg-white shadow-md sm:rounded-lg">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mt-4">
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <input type="text" name="category" id="category" autocomplete="category" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="w-full flex justify-center py-2 px-4  rounded-md shadow-sm text-sm font-medium text-black bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Create Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

