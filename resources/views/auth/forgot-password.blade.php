<x-layout title="{{ __('Esqueci minha Senha') }}">
  <x-heading h1="{{ __('Esqueci minha Senha') }}"
    span="{{ __('Digite seu email para recuperar sua conta.') }}" />

  <form action="{{ route('password.email') }}" method="POST" autocomplete="off">
    @csrf
    <x-input type="email" name="email"
      placeholder="{{ __('Digite seu E-mail') }}" value="{{ old('email') }}"
      required autofocus />

    <x-button color="indigo">
      {{ __('Enviar') }}
    </x-button>
  </form>
</x-layout>