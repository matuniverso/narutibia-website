<x-layout title="Esqueci minha Senha">
    <x-heading h1="Esqueci minha Senha" span="Digite seu email para recuperar sua conta." />

    <form action="{{ route('password.email') }}" method="POST" autocomplete="off">
        @csrf
        <x-input type="email" name="email" placeholder="Digite seu E-mail" value="{{ old('email') }}" required
            autofocus />

        <x-button color="indigo">
            Enviar
        </x-button>
    </form>
</x-layout>