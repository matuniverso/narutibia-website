<div class="flex flex-1 min-w-0" x-data="{ open: @entangle('isOpen').defer }">
  <button type="button" title="Pesquisa" @click="open = !open"
    class="flex items-center w-full px-3 group bg-gray-700 focus:outline-none focus:bg-gray-600 hover:bg-gray-600 gap-3 min-w-6">
    <svg
      class="min-w-6 w-6 group-hover:text-white group-focus:text-white text-gray-400"
      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
    <span
      class="text-lg text-gray-400 font-bold group-hover:text-white group-focus:text-white tracking-wide truncate">
      {{ __('Pesquise por players, vocações, guilds, ou quests.') }}
    </span>
  </button>

  <div x-show.transition.opacity="open" @keydown.escape="$wire.close()"
    class="flex justify-center inset-0 bg-opacity-80 fixed bg-gray-900 overflow-y-auto">
    <div class="flex flex-col w-11/12 md:w-7/12 mt-8">
      <x-input wire:model.debounce.350ms="search" type="search" name="search"
        id="searchInput" placeholder="Exemplo: Kakashi, Kage Quest"
        autocomplete="off" maxlength="50" />

      @if ($search)
      <div class="bg-white rounded-md p-2 mb-3 overflow-y-auto">

      </div>
      @endif

      <button type="button" @click="$wire.close()"
        class="bg-red-500 hover:bg-red-600 py-3 px-5 font-bold rounded-md ringo">
        {{ __('Fechar') }}
      </button>
    </div>
  </div>
</div>