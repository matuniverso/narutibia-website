<header class="relative bg-gray-800 shadow-lg mb-4" x-data="{ menu: false }">
  <nav class="w-full max-w-screen-2xl mx-auto">
    <div class="flex items-stretch">
      <a class="p-3" href="{{ route('home') }}"
        title="{{ __('Página Inicial') }}">
        <img class="w-8 min-w-8"
          src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
          alt="{{ __('Logo') }}" />
      </a>

      <nav
        class="flex flex-col md:flex-row absolute md:static bg-gray-800 w-full md:w-auto top-full py-2 md:p-0"
        x-show="show"
        x-transition:enter="transition duration-200 transform ease-out"
        x-transition:enter-start="scale-75"
        x-transition:leave="transition duration-100 transform ease-in"
        x-transition:leave-end="opacity-0 scale-90">
        <a href="{{ route('home') }}" class="menu-item">Wiki</a>
        <a href="{{ route('guilds.index') }}" class="menu-item">Guilds</a>
        <a href="{{ route('ranking') }}" class="menu-item">Rank</a>
        <a href="{{ route('shop') }}" class="menu-item">Shop</a>
        <a href="{{ route('download') }}" class="menu-item">Download</a>
      </nav>

      @livewire('search')

      @auth
      <a href="{{ route('account') }}" title="{{ __('Minha Conta') }}"
        class="menu-item hidden md:block">
        Minha Conta
      </a>
      @else
      <a href="{{ route('login') }}" title="{{ __('Fazer Login') }}"
        class="menu-item hidden md:block">
        Entrar
      </a>
      @endauth

      <button x-on:click="menu: !menu" type="button" title="{{ __('Menu') }}"
        class="menu-item md:hidden">
        <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </nav>
</header>