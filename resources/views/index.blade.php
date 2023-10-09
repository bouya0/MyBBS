<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('build/assets/app-650f9e99.css') }}" rel="stylesheet">

    <title>MyBBS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-screen-md p-10 mt-10 bg-white rounded shadow-lg">
        <h1 class="text-2xl font-bold border-b border-black pb-2 mb-4">My BBS</h1>
        <ul class="space-y-2 ml-12">
            @forelse ($posts as $index => $post)
                <li class="text-blue-700 underline">
                    <a href="{{ route('posts.show', $index) }}">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>No posts yet!</li>
            @endforelse
        </ul>
    </div>
</body>
</html>