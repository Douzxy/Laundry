{{-- Section Promo --}}
<section class="bg-cyan-50">
    <div class="py-8 px-4 mx-3 max-w-screen-xl lg:py-16 lg:px-6" data-aos="fade-up" data-aos-delay="300"
        data-aos-once="true">
        <!-- Layout untuk gambar dan konten -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">

            <!-- Gambar Promo - sebelah kiri -->
            <div class="flex justify-center lg:justify-start">
                <img src="{{ asset('images/promo.png') }}" alt="Promo Image" class="w-full max-w-sm" />
            </div>

            <!-- Konten - sebelah kanan -->
            <div class="text-center lg:text-left">
                <!-- Judul -->
                <h2 class="text-5xl font-bold text-gray-900 leading-tight text-header-gradient mb-5">Promo Spesial Hari
                    Ini!</h2>

                <!-- Deskripsi -->
                <p class="text-lg text-center text-gray-700 mb-6">
                    Jangan sampai terlewat! Ambil kesempatan untuk <br> mendapatkan promo eksklusif kami hari ini. Ayo segera ambil promo ini sebelum waktunya habis!
                </p>

                <!-- Tombol -->
                <div class="flex justify-center">
                    <a href="#cta"
                        class="flex w-fit items-center justify-center px-8 py-3 bg-orange-600 text-white font-semibold rounded-lg shadow-xl hover:bg-orange-500 hover:scale-105 transition duration-300 ease-in-out transform">
                        Ambil Promo Sekarang!
                    </a>
                </div>

                <!-- Countdown -->
                <div id="countdown" class="mt-8 text-2xl font-semibold text-gray-800">
                    <p class="text-lg font-semibold mb-4 text-center">Promo Berakhir Dalam:</p>
                    <div class="flex gap-2 justify-center text-xl">
                        <div class="text-center">
                            <div class="h-16 w-16 flex items-center justify-center bg-red-500 p-3 rounded-lg">
                                <span id="days" class="text-3xl font-bold text-white"></span>
                            </div>
                            <div class="text-sm">Hari</div>
                        </div>
                        <div class="text-center">
                            <div class="h-16 w-16 flex items-center justify-center bg-red-500 p-3 rounded-lg">
                                <span id="hours" class="text-3xl font-bold text-white"></span>
                            </div>
                            <div class="text-sm">Jam</div>
                        </div>
                        <div class="text-center">
                            <div class="h-16 w-16 flex items-center justify-center bg-red-500 p-3 rounded-lg">
                                <span id="minutes" class="text-3xl font-bold text-white"></span>
                            </div>
                            <div class="text-sm">Menit</div>
                        </div>
                        <div class="text-center">
                            <div class="h-16 w-16 flex items-center justify-center bg-red-500 p-3 rounded-lg">
                                <span id="seconds" class="text-3xl font-bold text-white"></span>
                            </div>
                            <div class="text-sm">Detik</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
{{-- Section Promo Selesai --}}

<script>
    // Menghitung waktu 24 jam dari sekarang
    const countdownDate = new Date();
    countdownDate.setHours(countdownDate.getHours() + 24); // Menambahkan 24 jam dari waktu sekarang
    const countdownElement = document.getElementById("countdown");

    // Fungsi untuk format angka dua digit
    function formatTime(unit) {
        return unit < 10 ? "0" + unit : unit;
    }

    // Fungsi untuk mengupdate countdown
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = countdownDate.getTime() - now;

        // Jika waktu sudah habis, tampilkan pesan waktu habis
        if (distance <= 0) {
            countdownElement.innerHTML = "<p class='text-xl font-bold text-red-500'>Waktu telah habis!</p>";
            clearInterval(countdownInterval);
            return;
        }

        // Hitung hari, jam, menit, detik
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Update elemen dengan waktu yang diformat
        document.getElementById("days").innerText = formatTime(days);
        document.getElementById("hours").innerText = formatTime(hours);
        document.getElementById("minutes").innerText = formatTime(minutes);
        document.getElementById("seconds").innerText = formatTime(seconds);
    }

    // Update setiap detik
    const countdownInterval = setInterval(updateCountdown, 1000);
</script>
