<!-- Komponen tombol yang dapat dikonfigurasi dengan properti 'type' -->
@props(['type' => 'button'])

<button type="{{ $type }}" {!! $attributes->merge([
    'class' =>
        'text-sm text-center rounded-full hover:shadow-md hover:shadow-cyan-500/50 transition duration-300 px-8 xl:px-10 py-3 ',
]) !!}>
    
    <!-- Slot untuk konten tombol -->
    {{ $slot }}
</button>
