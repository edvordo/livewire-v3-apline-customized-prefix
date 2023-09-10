<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @livewireStyles
    @vite(['resources/js/app.js'])

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
<div>
    {{ $slot }}
</div>

@livewireScriptConfig
</body>
</html>
