<x-layout title="Guilds">
    <x-heading h1="Guilds" span="Veja quais guilds estão dominando." />

    <a href="{{ route('guilds.create') }}" class="flex font-bold bg-green-600 ringo rounded-md p-4">
        Crie uma guild
    </a>

    @if ($guilds->count() > 0)
    <div class="grid grid-cols-4 gap-4">
        @foreach ($guilds as $guild)
        <div class="bg-gray-800 rounded-md">
            <p>{{ $guild->name }}</p>
        </div>
        @endforeach
    </div>
    @else
    <div class="flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <p class="text-center">
            Nenhuma guild foi criada até o momento.
        </p>
    </div>
    @endif
</x-layout>