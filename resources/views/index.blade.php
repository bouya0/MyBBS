<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1 class="text-2xl font-bold border-b border-black pb-2 mb-4">My BBS</h1>
    <ul class="space-y-2 ml-12">
        @forelse ($posts as $index => $post)
            <li class="text-blue-700 underline">
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>No posts yet!</li>
        @endforelse
    </ul>
</x-layout>