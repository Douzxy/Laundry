@props(['href' => '#', 'active' => false, 'text'])

<li>
    <!-- Membuat tautan dengan pengaturan href, aktif atau tidak, dan teks yang diteruskan ke komponen -->
    <a href="{{ $href }}"
        class="py-2 flex flex-col items-center text-center text-xs border-t-2 transition-all nav-link
        {{ $active ? 'border-cyan-500 text-cyan-500' : 'border-transparent' }}"
        aria-current="{{ $active ? 'page' : false }}">

        <!-- Menampilkan ikon SVG yang diteruskan ke komponen melalui slot -->
        <div class="h-6 w-6 flex items-center justify-center ">
            {{ $slot }}
        </div>

        <!-- Menampilkan teks yang diteruskan ke komponen -->
        {{ $text }}
    </a>
</li>
