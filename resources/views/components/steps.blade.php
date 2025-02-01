<!-- Section Langkah -->
<section id="steps" class="max-w-screen-xl py-24 mx-3 md:mx-auto flex flex-col overflow-hidden px-4 sm:px-6 lg:px-8">

    <!-- Judul dan deskripsi -->
    <div class="mb-10 text-left" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
        <h2 class="text-4xl font-bold text-gray-900 leading-tight text-header-gradient text-left"> Bagaimana Kami
            Bekerja</h2>
        <p class="text-lg font-normal text-gray-500 mt-4 mb-10 ">
            Pelajari bagaimana tim kami memberikan layanan laundry terbaik dengan kualitas yang terjamin!
        </p>
    </div>

    <!-- Grid Langkah-langkah -->
    <div class="grid grid-cols-12 gap-6">
        
        <!-- Bagian Gambar -->
        <div class="gambar col-span-12 sm:col-span-5 flex justify-center items-center" data-aos="fade-right"
            data-aos-delay="300" data-aos-once="true">
            <img src="{{ asset('images/step/staff.png') }}" alt="karyawan"
                class="w-auto max-w-full h-2/3 object-contain rounded-lg" />
        </div>

        <!-- Langkah-langkah -->
        <div class="grid col-span-12 sm:col-span-7 grid-cols-1 sm:grid-cols-2 gap-8 w-full rounded-2xl sm:rounded-xl" data-aos="fade-left"
            data-aos-delay="300" data-aos-once="true">

            <!-- Langkah 1 -->
            <div class="transform -translate-y-5">
                <x-step number="1" title="Pemesanan"
                    image='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-16 h-16 fill-cyan-500"><path d="M36.8 192l566.3 0c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0L121.7 0c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224l0 160 0 80c0 26.5 21.5 48 48 48l224 0c26.5 0 48-21.5 48-48l0-80 0-160-64 0 0 160-192 0 0-160-64 0zm448 0l0 256c0 17.7 14.3 32 32 32s32-14.3 32-32l0-256-64 0z"/></svg>'
                    description="Hubungi Freshly Laundry melalui WhatsApp atau datang langsung outlet kami. Tentukan jenis layanan yang Anda butuhkan dan jadwal penjemputan yang diinginkan." />
            </div>

            <!-- Langkah 2 -->
            <div class="transform translate-y-5">
                <x-step number="2" title="Penjemputan"
                    image='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-16 h-16 fill-cyan-500"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>'
                    description="Tim akan datang tepat waktu ke lokasi untuk menjemput pakaian kotor. Pakaian Anda akan dicatat dan dikemas rapi untuk memastikan tidak ada yang tertinggal." />
            </div>

            <!-- Langkah 3 -->
            <div class="transform -translate-y-5">
                <x-step number="3" title="Pencucian dan Pengeringan"
                    image='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-16 h-16 fill-cyan-500"><path d="M96 24c0-13.3 10.7-24 24-24l80 0c13.3 0 24 10.7 24 24l0 24 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24L88 96C74.7 96 64 85.3 64 72s10.7-24 24-24l8 0 0-24zM0 256c0-70.7 57.3-128 128-128l128 0c70.7 0 128 57.3 128 128l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256zm256 0l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32z"/></svg>'
                    description="Pakaian dicuci dengan deterjen berkualitas dan dikeringkan dengan mesin modern untuk hasil bersih, segar, dan siap pakai" />
            </div>

            <!-- Langkah 4 -->
            <div class="transform translate-y-5">
                <x-step number="4" title="Pengantaran"
                    image='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-16 h-16 fill-cyan-500"><path d="M48 0C21.5 0 0 21.5 0 48L0 368c0 26.5 21.5 48 48 48l16 0c0 53 43 96 96 96s96-43 96-96l128 0c0 53 43 96 96 96s96-43 96-96l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64 0-32 0-18.7c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7L416 96l0-48c0-26.5-21.5-48-48-48L48 0zM416 160l50.7 0L544 237.3l0 18.7-128 0 0-96zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>'
                    description="Setelah pakaian selesai, kami akan mengantarkannya kembali ke lokasi sesuai jadwal yang telah ditentukan. Nikmati pakaian bersih dan harum tanpa repot!" />
            </div>

        </div>

    </div>

</section>
{{-- Section Langkah Selesai --}}