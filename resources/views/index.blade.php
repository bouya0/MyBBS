<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1 class="text-4xl font-extrabold border-b-4 border-indigo-600 pb-4 mb-6">My BBS</h1>
    <ul class="space-y-4 ml-8">
        @forelse ($posts as $index => $post)
            <li>
                <a href="{{ route('posts.show', $post) }}" class="text-indigo-600 underline hover:text-indigo-800">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li class="text-gray-500">No posts yet!</li>
        @endforelse
    </ul>    
</x-layout>