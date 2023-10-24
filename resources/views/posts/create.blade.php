<x-layout>
    <x-slot name="title">
        Add New Post - My BBS
    </x-slot>
    <div class="mb-4">
        <a href="{{ route('posts.index')}}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
            &laquo; Back
        </a>
    </div>    
    <h1 class="text-3xl font-extrabold pb-4 mb-6 border-b-2 border-indigo-600">
        Add New Post
    </h1>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <div class="mb-4">
            <label>
                Title
                <input class="w-full p-2 border-2 border-black rounded focus:border-blue-500" type="text" name="title" value="{{ old('title') }}">
            </label>
            @error('title')
                <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label>
                Body
                <textarea class="h-40 w-full p-2 border-2 border-black rounded focus:border-blue-500" name="body">{{ old('body') }}</textarea>
            </label>
            @error('body')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-right">
            <button class="ml-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded px-4 py-2 transition">Add</button>
        </div>
    </form>
</x-layout>
