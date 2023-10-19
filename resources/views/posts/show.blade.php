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
        }
    </script>
</x-layout>
