<x-layout title="{{ __('Página Não Encontrada') }}">
  <x-heading h1="{{ __('Página Não Encontrada') }}"
    span="{{ __('Erro 404') }}" />

  <div class="flex flex-col items-center">
    <svg class="w-14 mb-4" xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
        clip-rule="evenodd" />
    </svg>
    <p class="text-center">
      {{ __('Desculpe, essa página não existe ou foi apagada.') }}
    </p>
  </div>
</x-layout>
