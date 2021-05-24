<x-layout title="{{ __('Nova') }} Guild">
  <x-heading h1="{{ __('Nova') }} Guild"
    span="{{ __('Hora de escolher o nome da sua nova guild.') }}" />

  <form action="{{ route('guilds.store') }}">
    @csrf

    <x-input placeholder="Digite o nome da sua guild." />

    <select name="ownerid">
      @foreach ($players as $player)
      <option value="{{ $player->id }}">
        {{ $player->name }}
      </option>
      @endforeach
    </select>
  </form>
</x-layout>