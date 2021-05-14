<x-layout title="{{ __('Cadastrar') }}">
  <x-heading h1="{{ __('Cadastrar') }}"
    span="{{ __('Comece a jogar agora mesmo.') }}" />

  <div>
    <p class="mb-1">
      {{ __('Já possui uma conta?') }}
      <a href="{{ route('login') }}" class="underline hover:no-underline font-bold">
        {{ __('Entrar Agora') }}
      </a>
    </p>

    @if ($errors->any())
      <div class="bg-red-500 rounded p-3 mb-2 font-bold">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('register') }}" method="POST" autocomplete="off">
      @csrf
      <x-input type="text" name="name" placeholder="{{ __('Digite seu Usuário') }}"
        value="{{ old('name') }}" required />

      <x-input type="email" name="email" placeholder="{{ __('Digite seu E-mail') }}"
        value="{{ old('email') }}" required />

      <x-input type="password" name="password"
        placeholder="{{ __('Digite sua Senha') }}" required />

      <x-input type="password" name="password_confirmation"
        placeholder="{{ __('Repetir Senha') }}" required />

      <x-button color="indigo">
        {{ __('Entrar') }}
      </x-button>
    </form>
  </div>
</x-layout>
