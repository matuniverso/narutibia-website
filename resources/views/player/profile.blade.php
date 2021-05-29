<x-layout title="Perfil ({{ $player->name }})">
    <x-heading h1="{{ $player->name }}" span="Última vez online: {{ $player->lastday ?? 'Nunca' }}." />
</x-layout>