<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <x-layouts.meta title="{{ $title }}" />
</head>
<body class="bg-gray-100">
    @include('components.layouts.header')

    <main class="mx-auto container px-3">
        {{ $slot }}
    </main>
</body>
</html>