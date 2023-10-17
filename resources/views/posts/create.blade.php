<x-layout>
    <x-slot name="title">
        Add New Post - My BBS
    </x-slot>
    <div class="mb-4">
        <a href="{{ route('posts.index')}}" class="text-blue-600 underline hover:text-blue-800">
            &laquo; Back
        </a>
    </div>
    <h1 class="text-3xl font-extrabold pb-4 mb-6 border-b-2 border-indigo-600">
        Add New Post
    </h1>

    <form method="post" action="">
        @csrf

        <label>
            Title
            <input class="mb-4 w-full p-4 border-2 border-black rounded focus:border-blue-500" type="text" name="title">
        </label>
        <label>
            Body
            <textarea class="mb-4 h-40 w-full p-4 border-2 border-black rounded focus:border-blue-500" name="body"></textarea>
        </label>
        <div class="text-right">
            <button class="bg-gray-300 hover:bg-gray-200 text-black rounded px-4 py-1 border-2 border-black">Add</button>
        </div>
    </form>
</x-layout>
