<x-layout title="{{ __('Perfil') }} ({{ $player->name }})">
  <x-heading h1="{{ $player->name }}"
    span="Última vez online: {{ $player->lastday ?? 'Nunca' }}." />
</x-layout>
