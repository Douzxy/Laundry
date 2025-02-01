<!-- FAQ section -->
<section class="w-full my-24" id="faq">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-3 grid grid-cols-12 gap-x-6 overflow-hidden">

        <!-- Gambar ilustrasi FAQ -->
        <div data-aos="fade-right" data-aos-delay="150" data-aos-once="true" class="col-span-12 lg:col-span-6">
            <div class="w-full">
                <img src="{{ asset('images/thinking-faq.png') }}" class="w-full" alt="Thinking FAQ Illustration" />
            </div>
        </div>

        <!-- Bagian FAQ -->
        <div data-aos="fade-left" data-aos-delay="150" data-aos-once="true"
            class="col-span-12 lg:col-span-6 px-0 sm:px-6 mt-8">

            <!-- Judul FAQ -->
            <h2 class="text-3xl sm:text-4xl font-semibold mb-10 sm:mb-6">Pertanyaan Umum</h2>

            <!-- Daftar Pertanyaan dalam bentuk Accordion -->
            <ul class="hs-accordion-group">

                <x-accordion title="Apa yang harus saya persiapkan untuk Pickup?"
                    description="Hal yang pertama siapkan pakaian Kotor, selanjutnya Hubungi Customer Service kami untuk Mengisi Form Pickup & Delivery, kemudian Staff kami akan menjemput pakaian kotor anda dan dikembalikan sesuai layanan yang Anda pilih." />

                <x-accordion title="Apakah saya mendapatkan tanda terima pesanan saya?"
                    description="Anda dapat melihat e-faktur akhir Anda di aplikasi dan situs web kami. Jika Anda memerlukan salinan faktur, informasikan ke customers service kami sebelum pengiriman dan kami akan mengirimkannya bersama pakaian Anda." />

                <x-accordion title="Estimasi Berapa lama?" description="Depens on layanan yang Anda pilih." />

                <x-accordion title="Metode Pembayaran" description="Metode Pembayaran Freshlt Laundry: Uang Tunai" />

                <x-accordion title="Apa yang terjadi jika saya meninggalkan barang-barang pribadi di saku saya?"
                    description="Kami biasanya memeriksanya pada saat pengambilan, namun jika kami melewatkan sesuatu, kami akan menyimpannya dan menghubungi Anda untuk memberi tahu." />

                <x-accordion title="Bisakah saya membatalkan pesanan saya?"
                    description="Tidak masalah! Cukup buka aplikasi Freshlt Laundry, Pilih Pesanan dan pilih Batalkan Pesanan. Maximal pembatalan pemesanan 3 jam setelah kami terima." />

                <x-accordion title="Bahan kimia dan deterjen apa yang Anda gunakan? Bisakah saya membuat permintaan?"
                    description="Kami biasanya menggunakan deterjen ramah lingkungan. Namun jika Anda secara khusus mengajukan permintaan kami akan menggunakan deterjen yang Anda inginkan." />

                <x-accordion title="Bagaimana cara memeriksa status pesanan saya?"
                    description="Anda dapat memeriksa status pesanan Anda di aplikasi kami." />

            </ul>
        </div>
    </div>
</section>
