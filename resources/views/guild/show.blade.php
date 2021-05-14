<x-layout title="Guild ({{ $guild->name }})">
  <x-heading h1="{{ $guild->name }}"
    span="{{ __('Guild criada em') }} {{ $guild->created_at }}." />
</x-layout>
