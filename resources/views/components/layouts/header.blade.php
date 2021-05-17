<header class="sticky top-0 bg-gray-800 shadow-lg mb-4">
    <nav class="w-full max-w-screen-2xl mx-auto">
        <div class="flex items-stretch">
            <a class="p-3" href="{{ route('home') }}" title="{{ __('Página Inicial') }}">
                <img class="w-8 min-w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                    alt="{{ __('Logo') }}" />
            </a>

            <nav
                class="md:flex flex-col md:flex-row absolute md:static bg-gray-800 w-full md:w-auto top-full py-3 md:p-0">
                <a href="{{ route('home') }}" class="menu-item">Início</a>
                <a href="{{ route('home') }}" class="menu-item">Wiki</a>
                <a href="{{ route('guilds.index') }}" class="menu-item">Guilds</a>
                <a href="{{ route('ranking') }}" class="menu-item">Rank</a>
                <a href="{{ route('shop') }}" class="menu-item">Shop</a>
                <a href="{{ route('download') }}" class="menu-item">Download</a>
            </nav>

            @livewire('search')

            @auth
            <a href="{{ route('account') }}" title="{{ __('Minha Conta') }}" class="menu-item hidden md:block">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </a>
            @else
            <a href="{{ route('login') }}" title="{{ __('Fazer Login') }}" class="menu-item hidden md:block">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </a>
            @endauth

            <button type="button" title="{{ __('Menu') }}" class="menu-item md:hidden">
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>
</header>