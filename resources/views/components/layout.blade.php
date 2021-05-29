<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Title --}}
    <title>{{ $title }} - {{ config('app.name') }}</title>
    {{-- Styles --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>
<body class="bg-gray-100">
    @include('components.layouts.header')

    <main class="mx-auto max-w-screen-2xl px-4">
        {{ $slot }}
    </main>

    {{-- Scripts --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
</body>
</html>