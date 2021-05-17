<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Title --}}
    <title>{{ $title }} - {{ config('app.name') }}</title>
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    {{-- Scripts --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
</head>
<body class="bg-gray-900 pb-16">
    @include('components.layouts.header')

    <main class="mx-auto max-w-screen-2xl px-4">
        {{ $slot }}
    </main>
</body>
</html>