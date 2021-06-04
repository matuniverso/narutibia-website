<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <x-layouts.meta title="{{ $title }}" />
</head>
<body>
    <div class="h-screen bg-gray-700 font-body overflow-y-auto">
        <div class="bg-pink-500 text-center font-bold text-white p-4">
            <h1 class="text-xl mb-2">{{ $title }}</h1>

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="font-bold py-2 px-3 bg-red-600" type="submit">
                    Sair
                </button>
            </form>
        </div>

        <nav class="flex flex-col font-bold text-white">
            <a class="w-full p-5 hover:bg-blue-800" href="{{ route('admin.index') }}">Painel de Controle</a>
            <a class="w-full p-5 hover:bg-blue-800" href="#">Accounts</a>
            <a class="w-full p-5 hover:bg-blue-800" href="#">Players</a>
        </nav>
    </div>

    <main class="p-3">
        {{ $slot }}
    </main>
</body>
</html>