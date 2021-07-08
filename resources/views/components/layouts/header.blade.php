<header class="sticky top-0 bg-gray-900 mb-4" x-data="{ menu: false }">
    <nav class="w-full max-w-screen-2xl mx-auto">
        <div class="flex justify-between">
            <a class="menu-item" href="{{ route('home') }}" title="Página Inicial">
                <img class="w-8 min-w-8" alt="SNS Logo"
                    src="https://tailwindui.com/img/logos/workflow-mark-indigo-400.svg" />
            </a>

            <nav class="hidden md:flex">
                <a href="{{ route('home') }}" class="menu-item">Wiki</a>
                <a href="{{ route('guilds.index') }}" class="menu-item">Guilds</a>
                <a href="{{ route('ranking') }}" class="menu-item">Rank</a>
                <a href="{{ route('shop') }}" class="menu-item">Shop</a>
                <a href="{{ route('download') }}" class="menu-item">Download</a>
                @auth
                <a href="{{ route('account') }}" title="Minha Conta" class="menu-item">Minha Conta</a>
                @else
                <a href="{{ route('login') }}" title="Fazer Login" class="menu-item">Entrar</a>
                <a href="{{ route('register') }}" title="Criar uma Conta" class="menu-item">Registrar</a>
                @endauth
            </nav>

            @livewire('search')

            {{-- <button x-on:click="menu: !menu" type="button" title="Menu" class="menu-item md:hidden">
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button> --}}
        </div>
    </nav>
</header>
