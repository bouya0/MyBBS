<x-layout>
    <x-slot name="title">
        {{ $post->title }} - My BBS
    </x-slot>
    <div class="mb-4">
        <a href="{{ route('posts.index')}}" class="text-blue-600 underline hover:text-blue-800">
            &laquo; Back
        </a>
    </div>
    <h1 class="text-3xl font-extrabold pb-4 mb-6 border-b-2 border-indigo-600">
        {{ $post->title }}
    </h1>
    <p class="text-gray-700 text-lg leading-relaxed">
        {{ $post->body }}
    </p>
</x-layout>
