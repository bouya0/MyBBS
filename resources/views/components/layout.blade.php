<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('build/assets/app-650f9e99.css') }}" rel="stylesheet">

    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200">
    <div class="container mx-auto max-w-screen-md p-10 mt-10 bg-white rounded-lg shadow-2xl">
        {{ $slot }}
    </div>
</body>

</html>