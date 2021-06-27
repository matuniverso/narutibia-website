<button {{ $attributes->merge([
    'class' => "font-bold ringo w-full rounded-md bg-$color-500 p-3 hover:bg-$color-600 select-none text-white"
]) }}>
    {{ $slot }}
</button>