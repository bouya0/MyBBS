<x-layout>
    <x-slot name="title">
        Edit Post - My BBS
    </x-slot>
    <div class="mb-4">
        <a href="{{ route('posts.show', $post)}}" class="text-blue-600 underline hover:text-blue-800">
            &laquo; Back
        </a>
    </div>
    <h1 class="text-3xl font-extrabold pb-4 mb-6 border-b-2 border-indigo-600">
        Edit Post
    </h1>

    <form method="post" action="{{ route('posts.update', $post) }}">
        @method('PATCH')
        @csrf

        <div class="mb-4">
            <label>
                Title
                <input class="w-full p-2 border-2 border-black rounded focus:border-blue-500" type="text" name="title" value="{{ old('title', $post->title) }}">
            </label>
            @error('title')
                <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label>
                Body
                <textarea class="h-40 w-full p-2 border-2 border-black rounded focus:border-blue-500" name="body">{{ old('body', $post->body) }}</textarea>
            </label>
            @error('body')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-right">
            <button class="bg-gray-300 hover:bg-gray-200 text-black rounded px-4 py-1 border-2 border-black">Update</button>
        </div>
    </form>
</x-layout>
