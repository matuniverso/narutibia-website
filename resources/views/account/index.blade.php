<x-layout title="Minha Conta">
    <div class="flex justify-between mb-4">
        <div class="flex gap-2 items-center">
            <a href="#" title="Trocar seu email"
                class="flex ringo p-3 rounded-md text-white font-bold bg-yellow-800 hover:bg-yellow-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <span class="ml-2">Trocar Email</span>
            </a>

            <a href="#" title="Trocar sua senha"
                class="flex ringo p-3 rounded-md text-white font-bold bg-gray-600 hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <span class="ml-2">Trocar Senha</span>
            </a>
        </div>

        <div class="flex gap-2 items-center">
            <div class="ringo p-3 rounded-md text-white font-bold bg-green-600">
                Dias VIP: {{ auth()->user()->premdays }}
            </div>

            <div class="ringo p-3 rounded-md text-white font-bold bg-blue-500">
                Diamantes na conta: {{ auth()->user()->diamonds }}
            </div>

            <a href="{{ route('shop') }}" title="Comprar mais diamantes"
                class="ringo p-3 rounded-md text-white font-bold bg-blue-500 hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </a>

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button title="Sair da conta" class="ringo rounded-md text-white p-3 font-bold bg-red-600 hover:bg-red-700">
                    Sair
                </button>
            </form>
        </div>
    </div>

    <div>
        <x-heading h1="Meus Personagens" />

        <a href="{{ route('player.create') }}" title="Criar novo personagem"
            class="flex justify-center text-white mb-4 ringo p-3 rounded-md font-bold bg-indigo-500 hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <span class="ml-2">Criar Novo Personagem</span>
        </a>

        @if ($players->count() > 0)
        <div class="grid gap-2">
            @foreach ($players as $player)
            <div class="flex items-center">
                <a class="flex-1 bg-gray-900 hover:bg-gray-700 py-3 px-5 rounded-md"
                    href="{{ route('player.profile', ['name' => $player->name]) }}">
                    <span>{{ $player->name }}</span>
                </a>

                @if ($player->trashed())
                <form action="{{ route('player.restore', ['id' => $player->id]) }}" method="post">
                    @csrf
                    <button title="Deletar personagem temporariamente"
                        class="mx-2 text-green-600 hover:text-green-200 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </button>
                </form>
                @else
                <form action="{{ route('player.destroy', ['id' => $player->id]) }}" method="post">
                    @csrf
                    <button title="Deletar personagem temporariamente"
                        class="mx-2 text-red-600 hover:text-red-200 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form>
                @endif
            </div>
            @endforeach
        </div>
        @else
        <div class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mb-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-center">
                Você ainda não possui nenhum personagem criado.
            </p>
        </div>
        @endif
    </div>
</x-layout>