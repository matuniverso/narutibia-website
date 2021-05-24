<x-layout title="Login">
  <x-heading h1="Login" span="{{ __('Digite suas credenciais.') }}" />

  <div>
    <p class="mb-1">
      {{ __('Ainda não possui uma conta?') }}
      <a href="{{ route('register') }}"
        class="underline hover:no-underline font-bold">
        {{ __('Cadastre-se') }}
      </a>
    </p>

    @if ($errors->any())
    <div class="bg-red-500 rounded p-3 mb-2 font-bold">{{ $errors->first() }}
    </div>
    @endif

    <form action="{{ route('login') }}" method="POST" autocomplete="off">
      @csrf
      <x-input type="text" name="name"
        placeholder="{{ __('Digite seu Login') }}" value="{{ old('name') }}"
        required />

      <x-input type="password" name="password"
        placeholder="{{ __('Digite sua Senha') }}" required />

      <x-button color="indigo">
        {{ __('Entrar') }}
      </x-button>
    </form>

    <a href="{{ route('password.request') }}"
      class="inline-block mt-3 underline hover:no-underline font-bold">
      {{ __('Esqueceu a senha?') }}
    </a>
  </div>
</x-layout>