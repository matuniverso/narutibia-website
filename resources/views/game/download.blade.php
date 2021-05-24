<x-layout title="Download">
  <x-heading h1="Download"
    span="{{ __('Escolha seu sistema operacional.') }}" />
  <div class="flex flex-col md:flex-row">
    {{-- Windows --}}
    <div class="flex flex-col items-center flex-1 mb-16">
      <a class="flex w-full md:w-auto items-center justify-center ringo select-none font-bold text-3xl p-8 mb-14 bg-green-600 hover:bg-green-700 rounded-md whitespace-nowrap"
        href="#" target="_blank" title="{{ __('Launcher para Windows') }}">
        Windows {{ __('Launcher') }}
      </a>
      <img class="w-48" src="{{ asset('storage/windows.svg') }}" alt="Windows">
    </div>
    {{-- Linux --}}
    <div class="flex flex-col items-center flex-1">
      <a class="flex w-full md:w-auto items-center justify-center ringo select-none font-bold text-3xl p-8 mb-10 bg-green-600 hover:bg-green-700 rounded-md whitespace-nowrap"
        href="#" target="_blank" title="{{ __('Launcher para Linux') }}">
        Linux {{ __('Launcher') }}
      </a>
      <img class="w-48" src="{{ asset('storage/tux.svg') }}" alt="Linux">
    </div>
  </div>
</x-layout>