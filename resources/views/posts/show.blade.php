<x-layout>
    <x-slot name="title">
        {{ $post->title }} - My BBS
    </x-slot>
    <div class="mb-4">
        <a href="{{ route('posts.index')}}" class="text-blue-600 underline hover:text-blue-800">
            &laquo; Back
        </a>
    </div>
        <h1 class="flex justify-between text-3xl font-extrabold pb-4 mb-6 border-b-2 border-indigo-600">
            <span>{{ $post->title }}</span>
            <a href="{{ route('posts.edit', $post) }}" class="text-indigo-600 underline hover:text-indigo-800">[Edit]</a>
        </h1>
    
    <p class="text-gray-700 text-lg leading-relaxed">
        {!! nl2br(e($post->body)) !!}
    </p>
</x-layout>
