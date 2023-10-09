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
        <div class="text-blue-700 mb-4">
            &laquo; <a href="{{ route('posts.index')}}" class="underline hover">Back</a>
        </div>
        <h1 class="text-2xl font-bold pb-2 mb-4 border-b border-black">{{ $post }}</h1>
    </div>
</body>
</html>