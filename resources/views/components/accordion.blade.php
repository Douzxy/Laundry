<!-- Wrapper utama untuk accordion -->
<div class="hs-accordion hs-accordion-active:border-gray-500 border border-transparent rounded-xl shadow mb-2"
    id="hs-active-bordered-heading-one">

    <!-- Tombol untuk mengontrol accordion -->
    <button
        class="hs-accordion-toggle hs-accordion-active:text-cyan-500 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start py-4 px-5 hover:text-cyan-500 disabled:opacity-50 disabled:pointer-events-none "
        aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-one">

        <!-- Judul accordion yang akan ditampilkan -->
        <span class="flex-1">{{ $title }}</span>

        <!-- Ikon tambah (plus) yang muncul saat accordion ditutup -->
        <svg class="hs-accordion-active:hidden block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="M12 5v14"></path>
        </svg>

        <!-- Ikon minus yang muncul saat accordion dibuka -->
        <svg class="hs-accordion-active:block hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
        </svg>
    </button>

    <!-- Konten accordion yang akan ditampilkan ketika dibuka -->
    <div id="hs-basic-active-bordered-collapse-one"
        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region"
        aria-labelledby="hs-active-bordered-heading-one">

        <!-- Bagian isi dari accordion -->
        <div class="pb-4 px-5">
            <p class="text-gray-800 ">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
