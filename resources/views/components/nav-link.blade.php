@props(['active' => false, 'href' => '#'])

<li class="w-full">
    <!-- Membuat tautan dengan href, status aktif, dan menampilkan konten yang diteruskan melalui slot -->
    <a 
        href="{{ $href }}"
        class="md:px-4 py-2 bg-transparent rounded-lg focus:outline-none focus:shadow-outline whitespace-nowrap font-medium transition-all duration-300 nav-link
        {{ $active ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}" 
        aria-current="{{ $active ? 'page' : false }}">

        <!-- Konten yang diteruskan ke komponen melalui slot (biasanya teks atau elemen lainnya) -->
        {{ $slot }}
    </a>
</li>
