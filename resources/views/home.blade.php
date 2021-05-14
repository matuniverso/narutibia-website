<x-layout title="{{ __('Página Inicial') }}">
  <div class="flex items-center flex-col my-20 font-bold">
    <div class="text-center">
      <h1 class="text-5xl md:text-6xl mb-6">
        {{ config('app.name') }}
      </h1>
      <p class="mb-8 tracking-wider">
        {{ __('O mundo shinobi pode ser bastante desafiador, quer testar sua sorte?') }}
      </p>
    </div>

    <div class="flex gap-4">
      <a href="{{ route('login') }}"
        class="ringo bg-blue-500 hover:bg-blue-600 py-6 px-8 font-bold rounded">
        {{ __('Entrar Agora') }}
      </a>
      <a href="{{ route('download') }}"
        class="ringo bg-green-600 hover:bg-green-700 py-6 px-8 font-bold rounded">
        {{ __('Fazer Download') }}
      </a>
    </div>
  </div>
</x-layout>
