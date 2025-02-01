<!-- Deklarasi tipe dokumen HTML dan pengaturan bahasa untuk halaman -->
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<!-- Komponen header diimpor dari file Blade (misalnya untuk menampilkan logo atau judul halaman) -->
<x-header></x-header>

<body class="min-h-screen overflow-x-hidden bg-gray-100">
    <!-- Bagian atas halaman dengan latar belakang gradasi warna cyan -->
    <div class="top-0 left-0 w-full h-[850px] bg-gradient-to-b from-cyan-50 to-cyan-100 ">

        <!-- Navbar diimpor dari file Blade, digunakan untuk navigasi -->
        <x-navbar></x-navbar>

        <!-- Konten utama halaman -->
        <main>
            <div class="min-h-screen font-sans antialiased relative">
                <div class="relative">
                    <!-- Konten dinamis ditampilkan di sini, menggunakan $slot untuk menampilkan konten yang diteruskan -->
                    <div class="mx-auto">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Script tambahan diimpor di sini -->
    <x-script></x-script>

</body>

</html>
