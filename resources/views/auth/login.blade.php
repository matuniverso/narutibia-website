<x-layout title="Login">
    <x-heading h1="Login" span="Digite suas credenciais." />

    <x-box>
        <p class="mb-1">
            Ainda não possui uma conta?
            <a href="{{ route('register') }}" class="underline hover:no-underline font-bold">
                Cadastre-se
            </a>
        </p>

        @if ($errors->any())
        <div class="bg-red-500 rounded p-3 mb-2 font-bold">{{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST" autocomplete="off">
            @csrf
            <x-input type="text" name="name" placeholder="Digite seu Login" value="{{ old('name') }}" required />

            <x-input type="password" name="password" placeholder="Digite sua Senha" required />

            <x-button color="indigo">
                Entrar
            </x-button>
        </form>

        <a href="{{ route('password.request') }}" class="inline-block mt-3 underline hover:no-underline font-bold">
            Esqueceu a senha?
        </a>
    </x-box>
</x-layout>