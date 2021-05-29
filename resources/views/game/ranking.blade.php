<x-layout title="Ranking">
    <x-heading h1="Ranking" span="Veja quem são os top players do servidor." />
    @if ($players->count() > 0)
    @foreach ($players as $player)
    {{--  --}}
    @endforeach
    @else <div class="flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <p class="text-center">
            Ainda não há nenhum char criado no servidor.
        </p>
    </div>
    @endif
</x-layout>