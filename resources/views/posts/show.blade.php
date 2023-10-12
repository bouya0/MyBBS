<x-layout>
    <x-slot name="title">
        {{ $post->title }} - My BBS
    </x-slot>
    <div class="text-blue-700 mb-4">
        &laquo; <a href="{{ route('posts.index')}}" class="underline hover">Back</a>
    </div>
    <h1 class="text-2xl font-bold pb-2 mb-4 border-b border-black">
        {{ $post->title }}
    </h1>
    <p class="">{{ $post->body }}</p>
</x-layout>
