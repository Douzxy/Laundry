{{-- Section Home --}}
<section id="home" class="w-full min-h-screen flex justify-center items-center ">
    <div class="relative w-full max-w-screen-xl mx-auto grid grid-cols-12 gap-x-6 px-6 lg:px-12">

        <!-- Konten Kiri: Judul, deskripsi, dan tombol CTA -->
        <div class="col-span-12 lg:col-span-7 flex items-center order-2 lg:order-1">
            <div class="space-y-6 text-center lg:text-left">
                <!-- Judul utama dengan animasi AOS fade-right -->
                <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold leading-tight capitalize" data-aos="fade-right"
                    data-aos-delay="300" data-aos-once="true">
                    Mau <span class="text-header-gradient">Nyuci</span>?
                    <span id="gsap-first"></span>
                    <span id="gsap-second"></span>
                    <span id="gsap-third"></span>
                </h1>

                <!-- Paragraf deskripsi layanan, hanya tampil di perangkat sm ke atas -->
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300"
                    class="text-lg sm:text-xl text-gray-700 hidden sm:block">
                    Serahin aja ke kita buat <span class="font-bold">dicuci</span> dan kamu bisa
                    <span class="font-bold">lanjut ngerjain tugasmu atau beraktivitas</span>
                    di luar rumah tanpa khawatir cucian menumpuk di rumah, kos, atau kontrakan.
                </p>

                <!-- Tombol CTA (Call to Action), dengan animasi fade-down -->
                <div data-aos="fade-down" data-aos-once="true"
                    class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mt-6 items-center justify-center sm:items-start sm:justify-normal">
                    <x-button
                        class="px-8 py-4 text-lg bg-gradient-to-r from-cyan-500 to-cyan-600 border border-cyan-500 text-white max-w-fit">
                        Hubungi Sekarang!
                    </x-button>
                </div>
            </div>
        </div>

        <!-- Konten Gambar Kanan: Gambar hero dengan animasi fade-up -->
        <div class="col-span-12 lg:col-span-5 flex justify-center items-center order-1 lg:order-2">
            <img data-aos="fade-up" data-aos-once="true" src="{{ asset('images/hero-image.png') }}"
                class="w-3/4 sm:w-full max-w-md lg:max-w-lg xl:max-w-xl " alt="" />
        </div>

        <!-- Pola Dekoratif: Elemen dekoratif hanya tampil di layar besar dengan posisi absolute -->
        <img data-aos="fade-up" data-aos-delay="300" src="{{ asset('images/pattern/ellipse-1.png') }}"
            class="hidden lg:block absolute -bottom-20 left-0 w-5" />
        <img data-aos="fade-up" data-aos-delay="300" src="{{ asset('images/pattern/ellipse-2.png') }}"
            class="hidden lg:block absolute top-10 right-1/3 w-5" />
        <img data-aos="fade-up" data-aos-delay="300" src="{{ asset('images/pattern/ellipse-3.png') }}"
            class="hidden lg:block absolute bottom-40 right-0 w-5" />
        <img data-aos="fade-up" data-aos-delay="300" src="{{ asset('images/pattern/star.png') }}"
            class="hidden lg:block absolute top-20 right-16 w-12" />
    </div>
</section>
{{-- Section Home Selesai --}}
