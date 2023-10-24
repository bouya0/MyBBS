<x-layout>
    <x-slot name="title">
        {{ $post->title }} - My BBS
    </x-slot>
    <div class="mb-4">
        <a href="{{ route('posts.index') }}" class="no-underline text-blue-600 underline hover:text-blue-800">
            &laquo; Back
        </a>
    </div>
    <h1 class="flex justify-between text-3xl font-extrabold pb-4 mb-6 border-b-2 border-indigo-600">
        <span>{{ $post->title }}</span>
        <div class="flex">
            <a href="{{ route('posts.edit', $post) }}"
                class="no-underline text-indigo-600 underline hover:text-indigo-800 mr-4">
                [Edit]
            </a>
            <form method="post" action="{{ route('posts.destroy', $post) }}" id="js-delete-post">
                @method('DELETE')
                @csrf
                
                <button class="text-indigo-600">[x]</button>
            </form>
        </div>
    </h1>

    <p class="text-gray-700 text-lg leading-relaxed">
        {!! nl2br(e($post->body)) !!}
    </p>

    <h2 class="text-3xl font-extrabold my-4">Comments</h2>
    <ul>
        <li>
            <form method="post" action="{{ route('comment.store', $post) }}" class="flex">
                @csrf

                <input type="text" name="body" class="w-full p-2 border-2 border-black rounded focus:border-blue-500">
                <button class="ml-4 bg-gray-300 hover:bg-gray-200 text-black rounded px-4 py-1 border-2 border-black ">Add</button>
            </form>
        </li>
        @foreach($post->comments()->latest()->get() as $comment)
        <div class="flex">
            <li class="list-disc ml-8 my-2">
                {{ $comment->body }}
            </li>
            <form method="post" action="{{ route('comments.destroy', $comment) }}" id="js-delete-comment">
                @method('DELETE')
                @csrf
                
                <button class="text-indigo-600 ml-8">[x]</button>
            </form>
        </div>
        @endforeach
    </ul>

    <script>
        'use strict';

        {
            document.getElementById('js-delete-post').addEventListener('submit', e => {
                e.preventDefault();

                if(!confirm('Sure to delete?')) {
                    return;
                }

                e.target.submit();
            });

            document.getElementById('js-delete-comment').addEventListener('submit', e => {
                e.preventDefault();

                if(!confirm('Sure to delete?')) {
                    return;
                }

                e.target.submit();
            });
        }
    </script>
</x-layout>
