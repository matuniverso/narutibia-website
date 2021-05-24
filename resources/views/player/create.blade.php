<x-layout title="{{ __('Criar Personagem') }}">
  <x-heading h1="{{ __('Criar Personagem') }}"
    span="{{ __('Sua jornada está prestes a começar.') }}" />
  @if ($errors->any())
  {{ $errors->first() }} </div>
  @endif
  <form action="{{ route('player.store') }}" method="post" autocomplete="off">
    @csrf
    <x-input type="text" name="name" placeholder="Nome do Personagem" autofocus
      required />
    <div
      class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 place-items-center gap-3 mb-4">
      @foreach ($vocations as $key => $value)
      <div>
        <input type="radio" name="vocation" value="{{ $key }}">
        <p>{{ $key }}</p>
      </div>
      @endforeach
    </div>
    <x-button color="indigo">
      {{ __('Enviar') }}
    </x-button>
  </form>
</x-layout>