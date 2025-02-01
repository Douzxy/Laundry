{{-- Footer --}}
<footer class="w-full bg-cyan-500 py-12">
    <!-- Bagian utama footer, diatur dengan grid system -->
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-12 gap-4 text-sm text-white">

        <!-- Kolom kiri untuk logo -->
        <div class="sm:col-span-2 flex flex-col sm:items-start sm:py-4">
            <a href="/" class="flex flex-col items-center">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Freshly Laundry Logo"
                    class="shadow-md rounded-full bg-white p-2 fill-none w-1/2 sm:h-auto sm:w-auto sm:mb-4">
            </a>
        </div>


        <!-- Kolom kanan untuk informasi lainnya -->
        <div class="sm:col-span-10 grid grid-cols-1 sm:grid-cols-3 gap-4 pl-0 sm:pl-20">

            <!-- Bagian alamat -->
            <div class="flex flex-col items-start p-5">
                <span class="text-base font-semibold text-white mb-2">Alamat Kami</span>
                <div class="flex items-center sm:items-start">
                    <div class="bg-white rounded-full flex items-start justify-center mr-4 shadow-md">
                        <!-- Ikon lokasi -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 sm:h-10 sm:w-10 p-2 fill-none stroke-cyan-500" viewBox="0 0 24 24"
                            stroke-width="2" stroke-linecap="round" fill="none" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <p class="text-white text-xs sm:text-sm">Jl. Amd. Babakan Pocis No.2, Bakti Jaya, Kec. Setu, Kota
                        Tangerang Selatan,
                        Banten 15315</p>
                </div>
            </div>

            <!-- Bagian kontak -->
            <div class="flex flex-col items-start p-5">
                <span class="text-base font-semibold text-white mb-2">Kontak</span>
                <div class="flex items-center sm:items-start mb-2">
                    <div class="bg-white rounded-full flex items-center justify-center mr-4 shadow-md">
                        <!-- Ikon telepon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10 p-2 stroke-cyan-500"
                            viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-white text-xs sm:text-sm">Telp: +62 123 456 789</p>
                </div>
                <div class="flex items-center sm:items-start">
                    <div class="bg-white rounded-full flex items-center justify-center mr-4 shadow-md">
                        <!-- Ikon WhatsApp -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="h-8 w-8 sm:h-10 sm:w-10 p-2 fill-cyan-500 stroke-cyan-500">
                            <path
                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                    </div>
                    <p class="text-white text-xs sm:text-sm">WhatsApp: +62 123 456 789</p>
                </div>
            </div>


            <!-- Jam buka -->
            <div class="flex flex-col items-start p-5">
                <span class="text-base font-semibold text-white mb-2">Jam Buka</span>
                <div class="flex items-center sm:items-start">
                    <div class="bg-white rounded-full flex items-start justify-center mr-4 shadow-md h-8 w-8 sm:h-10 sm:w-10">
                        <!-- Ikon jam -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="h-8 w-8 sm:h-10 sm:w-10 fill-cyan-500 p-2">
                            <path
                                d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-white text-xs sm:text-sm">08:00 - 22:00 WIB</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Garis pemisah -->
    <div class="p-5">
        <hr class=" max-w-screen-lg mx-auto border-gray-100">

    </div>

    <!-- Wrapper utama untuk konten footer -->
    <div class="max-w-screen-xl mx-auto mt-6 sm:mt-12 mb-12">
        <!-- Kontainer flex untuk menyusun elemen secara responsif, pusatkan pada layar kecil, dan sejajarkan pada layar besar -->
        <div class="flex items-center justify-center flex-col lg:justify-between lg:flex-row">

            <!-- Teks hak cipta di footer -->
            <p class="text-white text-sm text-center sm:text-left">&copy; Hak Cipta 2025 - Freshly Laundry. Semua hak
                dilindungi undang-undang.
            </p>

            <!-- Kontainer untuk ikon media sosial -->
            <div class="flex mt-4 space-x-4 sm:justify-center lg:mt-0">
                {{-- Ikon Twitter --}}
                <a href="javascript:;"
                    class="w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-[#33CCFF] ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <g id="Social Media">
                            <path id="Vector"
                                d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z"
                                fill="white" />
                        </g>
                    </svg>
                </a>
                {{-- Ikon Instagram --}}
                <a href="javascript:;"
                    class="relative w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-[linear-gradient(45deg,#FEE411_6.9%,#FEDB16_10.98%,#FEC125_17.77%,#FE983D_26.42%,#FE5F5E_36.5%,#FE2181_46.24%,#9000DC_85.57%)] 
                        ">
                    <svg class="w-[1.25rem] h-[1.125rem] text-white" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.63434 7.99747C5.63434 6.69062 6.6941 5.63093 8.00173 5.63093C9.30936 5.63093 10.3697 6.69062 10.3697 7.99747C10.3697 9.30431 9.30936 10.364 8.00173 10.364C6.6941 10.364 5.63434 9.30431 5.63434 7.99747ZM4.35427 7.99747C4.35427 10.0108 5.98723 11.6427 8.00173 11.6427C10.0162 11.6427 11.6492 10.0108 11.6492 7.99747C11.6492 5.98418 10.0162 4.3522 8.00173 4.3522C5.98723 4.3522 4.35427 5.98418 4.35427 7.99747ZM10.9412 4.20766C10.9411 4.37615 10.991 4.54087 11.0846 4.681C11.1783 4.82113 11.3113 4.93037 11.4671 4.99491C11.6228 5.05945 11.7942 5.07639 11.9595 5.04359C12.1249 5.01078 12.2768 4.92971 12.3961 4.81062C12.5153 4.69153 12.5966 4.53977 12.6295 4.37453C12.6625 4.2093 12.6457 4.03801 12.5812 3.88232C12.5168 3.72663 12.4076 3.59354 12.2674 3.49988C12.1273 3.40622 11.9625 3.35619 11.7939 3.35612H11.7936C11.5676 3.35623 11.3509 3.44597 11.1911 3.60563C11.0313 3.76529 10.9414 3.98182 10.9412 4.20766ZM5.132 13.7759C4.43946 13.7444 4.06304 13.6291 3.81289 13.5317C3.48125 13.4027 3.24463 13.249 2.99584 13.0007C2.74705 12.7524 2.59305 12.5161 2.46451 12.1847C2.367 11.9348 2.25164 11.5585 2.22016 10.8664C2.18572 10.1181 2.17885 9.89331 2.17885 7.99752C2.17885 6.10174 2.18629 5.87758 2.22016 5.12866C2.2517 4.43654 2.36791 4.06097 2.46451 3.81035C2.59362 3.47891 2.7474 3.24242 2.99584 2.99379C3.24428 2.74515 3.48068 2.59124 3.81289 2.46278C4.06292 2.36532 4.43946 2.25004 5.132 2.21857C5.88074 2.18416 6.10566 2.17729 8.00173 2.17729C9.89779 2.17729 10.1229 2.18472 10.8723 2.21857C11.5648 2.25009 11.9406 2.36623 12.1914 2.46278C12.5231 2.59124 12.7597 2.74549 13.0085 2.99379C13.2573 3.24208 13.4107 3.47891 13.5398 3.81035C13.6373 4.06023 13.7527 4.43654 13.7841 5.12866C13.8186 5.87758 13.8255 6.10174 13.8255 7.99752C13.8255 9.89331 13.8186 10.1175 13.7841 10.8664C13.7526 11.5585 13.6367 11.9347 13.5398 12.1847C13.4107 12.5161 13.2569 12.7526 13.0085 13.0007C12.76 13.2488 12.5231 13.4027 12.1914 13.5317C11.9414 13.6292 11.5648 13.7444 10.8723 13.7759C10.1236 13.8103 9.89865 13.8172 8.00173 13.8172C6.10481 13.8172 5.88051 13.8103 5.132 13.7759ZM5.07318 0.941429C4.31699 0.975845 3.80027 1.09568 3.34902 1.27116C2.88168 1.45239 2.48605 1.69552 2.09071 2.09C1.69537 2.48447 1.45272 2.88049 1.27139 3.34755C1.0958 3.79882 0.975892 4.31494 0.941455 5.07068C0.90645 5.82761 0.898438 6.0696 0.898438 7.99747C0.898438 9.92534 0.90645 10.1673 0.941455 10.9243C0.975892 11.68 1.0958 12.1961 1.27139 12.6474C1.45272 13.1142 1.69543 13.5106 2.09071 13.9049C2.48599 14.2992 2.88168 14.542 3.34902 14.7238C3.80113 14.8993 4.31699 15.0191 5.07318 15.0535C5.83096 15.0879 6.0727 15.0965 8.00173 15.0965C9.93075 15.0965 10.1729 15.0885 10.9303 15.0535C11.6865 15.0191 12.2029 14.8993 12.6544 14.7238C13.1215 14.542 13.5174 14.2994 13.9127 13.9049C14.3081 13.5105 14.5502 13.1142 14.7321 12.6474C14.9077 12.1961 15.0281 11.68 15.062 10.9243C15.0964 10.1668 15.1044 9.92534 15.1044 7.99747C15.1044 6.0696 15.0964 5.82761 15.062 5.07068C15.0276 4.31489 14.9077 3.79853 14.7321 3.34755C14.5502 2.88077 14.3075 2.4851 13.9127 2.09C13.518 1.69489 13.1215 1.45239 12.655 1.27116C12.2029 1.09568 11.6865 0.975277 10.9308 0.941429C10.1735 0.907013 9.93132 0.898438 8.00229 0.898438C6.07327 0.898438 5.83096 0.906445 5.07318 0.941429Z"
                            fill="white" />
                    </svg>

                </a>
                {{-- ikon facebook --}}
                <a href="javascript:;"
                    class="relative w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-[#337FFF]   ">
                    <svg class="w-[1rem] h-[1rem] text-white" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.04111 7.81204L7.41156 5.46043H5.1296V3.93188C5.1296 3.28886 5.44818 2.66054 6.46692 2.66054H7.51899V0.657999C6.90631 0.560385 6.28723 0.507577 5.66675 0.5C3.78857 0.5 2.56239 1.62804 2.56239 3.66733V5.46043H0.480469V7.81204H2.56239V13.5H5.1296V7.81204H7.04111Z"
                            fill="currentColor" />
                    </svg>

                </a>
            </div>
        </div>
    </div>
</footer>

{{-- Footer selesai --}}
