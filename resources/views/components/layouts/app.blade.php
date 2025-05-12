<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css'])
    @livewireStyles
</head>

<body>

    {{ $slot }}

    @vite(['resources/js/app.js'])
    @livewireScripts
</body>

</html>
