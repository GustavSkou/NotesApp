<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>notes</title>
</head>

<body>
    @if (session('success'))
    <div id='flash' class="text-center bg-green-30">
        {{ session('success') }}
    </div>
    @endif

    {{ $slot }}
</body>

</html>