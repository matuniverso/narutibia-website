<div {{ $attributes->merge([
    'class' => 'bg-gray-800 p-4 font-bold mb-5 rounded-md',
]) }}>
    <h1 class="text-2xl text-white">{{ $h1 }}
        <span class="ml-1 text-lg text-gray-400">{{ $span ?? '' }}</span>
    </h1>
</div>