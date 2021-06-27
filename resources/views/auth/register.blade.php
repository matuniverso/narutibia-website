<x-layout title="Cadastrar">
    <x-heading h1="Cadastrar" span="Comece a jogar agora mesmo." />

    <x-box>
        <p class="mb-1">
            Já possui uma conta?
            <a href="{{ route('login') }}" class="underline hover:no-underline font-bold">
                Entrar Agora
            </a>
        </p>

        @if ($errors->any())
        <div class="bg-red-500 rounded p-3 mb-2 font-bold">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('register') }}" method="POST" autocomplete="off">
            @csrf
            <x-input type="text" name="name" placeholder="Digite seu Usuário" value="{{ old('name') }}" required />

            <x-input type="email" name="email" placeholder="Digite seu E-mail" value="{{ old('email') }}" required />

            <x-input type="password" name="password" placeholder="Digite sua Senha" required />

            <x-input type="password" name="password_confirmation" placeholder="Repetir Senha" required />

            <x-button color="indigo">
                Registrar
            </x-button>
        </form>
    </x-box>
</x-layout>