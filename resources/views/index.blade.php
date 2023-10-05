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
        <ul class="space-y-2">
            <li class="text-lg ml-12 leading-6 mb-2">Title</li>
            <li class="text-lg ml-12 leading-6 mb-2">Title</li>
            <li class="text-lg ml-12 leading-6 mb-2">Title</li>
        </ul>
    </div>
</body>
</html>