<x-layout title="{{ __('Nova') }} Guild">
  <x-heading h1="{{ __('Nova') }} Guild"
    span="{{ __('Hora de escolher o nome da sua nova guild.') }}" />
  <form action="{{ route('guilds.store') }}">
    @csrf
    {{--  --}}
  </form>
</x-layout>
