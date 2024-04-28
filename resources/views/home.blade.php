@extends('partials.main')

@section('tittle', 'Home')

@section('content')
    {{-- bg-blend-overlay bg-fixed bg-black/50 --}}
    <section class="relative py-16 flex flex-1 items-center bg-center bg-cover bg-white dark:bg-gray-900">
        <div class="absolute grid grid-cols-2 gap-0 inset-0 w-full m-auto top-40 h-max opacity-40">
            <div class="blur-[125px] h-56 bg-primary-400"></div>
            <div class="blur-[125px] h-56 bg-violet-500"></div>
        </div>
        <div class="pt-12 px-4 mx-auto max-w-screen-xl text-center lg:pb-20 lg:pt-32 lg:px-12 ">
            <h1 class="mb-4 text-4xl font-bold leading-none sm:text-6xl lg:text-7xl text-gray-900 dark:text-white">
                HIMPUNAN MAHASISWA <br> <span
                    class="bg-gradient-to-r from-indigo-600 to-cyan-500 inline-block text-transparent bg-clip-text ">INFORMATIKA</span>
            </h1>
            <p class="mb-4 text-lg font-semibold text-gray-600 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-300">
                Universitas Internasional Semen Indonesia</p>
        </div>
    </section>

    <section class=" bg-white dark:bg-gray-900">
        <div class="py-16 px-4 sm:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image"
                        class="object-cover rounded-lg shadow-md">
                </div>
                <div class="mt-12 md:mt-0">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">Tentang HMIF</h2>
                    <p class="mt-4 text-gray-600 text-lg dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Sed quis
                        eros at lacus feugiat hendrerit sed ut tortor. Suspendisse et magna quis elit efficitur consequat.
                        Mauris eleifend velit a pretium iaculis. Donec sagittis velit et magna euismod, vel aliquet nulla
                        malesuada. Nunc pharetra massa lectus, a fermentum arcu volutpat vel.</p>
                    <div class="mt-8">
                        <a href="{{ route('about') }}" class="text-blue-500 hover:text-blue-600 font-medium">Lihat selengkapnya
                            <span class="ml-2">&#8594;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 sm:px-16 py-12 lg:py-16 items-center">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-4xl lg:text-4xl sm:text-center lg:text-left dark:text-white">
                Tujuan
            </h1>
            <p class="font-ligth text-gray-500 md:text-lg sm:text-center lg:text-left mb-2 dark:text-gray-400">
                lorem ipsum dolor shit amet
            </p>

            <div class=" grid grid-cols md:grid-cols-2 gap-4 py-6">
                <div
                    class="bg-gray-50 text-gray-500 dark:bg-gray-800 p-6 dark:text-gray-400 hover:bg-gray-300 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:border-blue-500 transition-all duration-500 rounded-lg  ">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Mahasiswa Berkualitas</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Menciptakan Mahasiswa Informatika UISI yang berkualitas, Inovatif, dan siap bersaing dalam
                        dunia kerja.
                    </p>
                </div>

                <div
                    class="bg-gray-50 text-gray-500 dark:bg-gray-800 p-6 dark:text-gray-400 hover:bg-gray-300 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:border-blue-500 transition-all duration-500 rounded-lg ">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Entrepreneurial Spirit</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Menumbuhkan jiwa entrepreneurship bagi mahasiswa informatika UISI
                    </p>
                </div>

                <div
                    class="bg-gray-50 text-gray-500 dark:bg-gray-800 p-6 dark:text-gray-400 hover:bg-gray-300 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:border-blue-500 transition-all duration-500 rounded-lg ">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Hubungan Kemasyarakatan</h3>
                    <p class="text-gray-500 dark:text-gray-400">Menjalin hubungan yang baik dan berkontribusi aktif dalam
                        kegiatan kemasyarakatan
                        yang berasaskan kekeluargaan</p>
                </div>

                <div
                    class="bg-gray-50 text-gray-500 dark:bg-gray-800 p-6 dark:text-gray-400 hover:bg-gray-300 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:border-blue-500 transition-all duration-500 rounded-lg ">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Pengembangan Potensi</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Mewadahi, memproses, serta mengimplementasikan potensi dan kompetensi mahasiswa informatika UISI
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 sm:px-16 py-12 lg:py-16">
            <h1 class="mb-8 text-4xl font-extrabold text-center leading-none tracking-tight text-gray-900 sm:text-4xl lg:text-4xl dark:text-white">
                Tujuan
            </h1>
            <div id="controls-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-80 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://source.unsplash.com/random"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="https://source.unsplash.com/random"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://source.unsplash.com/random"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://source.unsplash.com/random"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://source.unsplash.com/random"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30
                         group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white
                          dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

    </section>

    <section id="follow" class="bg-white dark:bg-gray-800">
        <div class="gap-16 items-center py-8 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-12">
            <div class="px-4 font-light text-gray-600 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Ikuti Kami
                </h2>
                <p class="mb-4">
                    Follow sosial media kami untuk mendapatkan update terbaru.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <a href="https://www.instagram.com/hmif.uisi/"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white rounded-lg bg-gradient-to-br from-purple-800 via-rose-600 to-yellow-400 focus:ring-4 hover:shadow-rose-500 shadow-md focus:ring-blue-300 dark:focus:ring-blue-900 transition-all duration-500">
                        Instagram
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-black rounded-lg hover:bg-gray-100 dark:text-white hover:dark:text-black dark:hover:shadow-red-600 shadow-md dark:focus:ring-gray-600 transition-all duration-500">
                        Tiktok
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8 px-4">
                <img class="w-full rounded-lg hover:translate-x-2 hover:translate-y-2 transition-all duration-500"
                    src="{{ asset('img/ig.jpg') }}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg hover:translate-x-2 hover:translate-y-2 transition-all duration-500"
                    src="{{ asset('img/tk.jpg') }}" alt="office content 2">
            </div>
        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Hubungi Kami
            </h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Anda punya
                pertanyaan, kritik atau saran, Beritahu Kami.</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="name@gmail.com" required>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Beritahu kami bagaimana kami membantumu.." required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Tinggalkan komentar..."></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                        message</button>
                </div>
            </form>
        </div>
    </section>

@endSection
