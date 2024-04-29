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
                <div class="max-w-lg" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image"
                        class="object-cover rounded-lg shadow-md">
                </div>
                <div class="mt-12 md:mt-0" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">Tentang HMIF</h2>
                    <p class="mt-4 text-gray-600 text-lg dark:text-gray-400 truncate text-ellipsis">Organisasi yang
                        beroperasi di bawah naungan
                        Program Studi Informatika di Universitas Internasional
                        Semen Indonesia (UISI). Organisasi ini Diresmikan pada tanggal 24 Januari 2024, Himpunan Mahasiswa
                        Informatika UISI (HMIF UISI) menjadi wadah utama bagi mahasiswa Departemen Informatika di
                        universitas tersebut. Keanggotaan HMIF adalah mahasiswa aktif Teknik Informatika di UISI. Misi utama
                        HMIF adalah untuk meningkatkan kemampuan mahasiswa Informatika di bidang akademik dan non-akademik.
                        Dengan
                        berbagai program dan kegiatan yang diselenggarakan, HMIF UISI berkomitmen untuk memberikan platform
                        bagi mahasiswa untuk berkembang dalam berbagai aspek kehidupan mereka, baik dalam konteks akademis
                        maupun pengembangan keterampilan lainnya.</p>
                    <div class="mt-8">
                        <a href="{{ route('about') }}" class="text-blue-500 hover:text-blue-600 font-medium">Lihat
                            selengkapnya
                            <span class="ml-2">&#8594;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 sm:px-16 py-12 lg:py-16 items-center">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900
                m:text-4xl lg:text-4xl sm:text-center lg:text-left dark:text-white"
                data-aos="fade-right" data-aos-duration="700">
                Tujuan
            </h1>
            <p class="font-ligth text-gray-500 md:text-lg sm:text-center lg:text-left mb-2 dark:text-gray-400"
            data-aos="fade-right" data-aos-duration="700"  data-aos-delay="100">
                lorem ipsum dolor shit amet
            </p>

            <div class=" grid grid-cols md:grid-cols-2 gap-4 py-6 ">
                <div
                    class="bg-gray-50 text-gray-500 dark:bg-gray-800 p-6 dark:text-gray-400
                     hover:bg-gray-300 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200
                      hover:border-blue-500 transition-all duration-500 rounded-lg"
                      data-aos="fade-up" data-aos-duration="700"  data-aos-delay="200">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Mahasiswa Berkualitas</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Menciptakan Mahasiswa Informatika UISI yang berkualitas, Inovatif, dan siap bersaing dalam
                        dunia kerja.
                    </p>
                </div>

                <div
                    class="bg-gray-50 text-gray-500 dark:bg-gray-800 p-6 dark:text-gray-400
                     hover:bg-gray-300 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200
                      hover:border-blue-500 transition-all duration-500 rounded-lg "
                      data-aos="fade-up" data-aos-duration="700"  data-aos-delay="200">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Entrepreneurial Spirit</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Menumbuhkan jiwa entrepreneurship bagi mahasiswa informatika UISI.
                    </p>
                </div>

                <div
                    class="bg-gray-50 text-gray-500 dark:bg-gray-800 p-6 dark:text-gray-400
                     hover:bg-gray-300 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200
                      hover:border-blue-500 transition-all duration-500 rounded-lg "
                      data-aos="fade-up" data-aos-duration="700"  data-aos-delay="300">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Hubungan Kemasyarakatan</h3>
                    <p class="text-gray-500 dark:text-gray-400">Menjalin hubungan yang baik dan berkontribusi
                        aktif dalam kegiatan kemasyarakatan
                        yang berasaskan kekeluargaan.</p>
                </div>

                <div
                    class="bg-gray-50 text-gray-500 dark:bg-gray-800 p-6 dark:text-gray-400
                     hover:bg-gray-300 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200
                      hover:border-blue-500 transition-all duration-500 rounded-lg "
                      data-aos="fade-up" data-aos-duration="700"  data-aos-delay="300">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Pengembangan Potensi</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Mewadahi, memproses, serta mengimplementasikan potensi dan kompetensi mahasiswa informatika UISI.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 sm:px-16 ">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Badan Pengurus Harian</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio praesentium voluptate nemo incidunt error odio suscipit doloribus eaque totam quas quasi, illo unde, a perspiciatis quis itaque perferendis ea?</p>
            </div>
            <div class="grid gap-4 mb-6 sm:grid-cols-2 lg:grid-cols-3 antialiased">
                <div class="grayscale hover:grayscale-0 transition duration-700 ease-out isolate flex flex-col justify-end overflow-hidden rounded-2xl
                px-8 pb-8 pt-40 w-full shadow-lg dark:shadow-primary-900 mx-auto mt-16"
                data-aos="zoom-in" data-aos-duration="700">
                    <img src="{{ asset('img/2023/BPH/ucup.JPG') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900 via-violet-800/5"></div>
                    <h3 class="z-10 w-full text-3xl font-bold text-white">Bima Fahrudin Yusup</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-white">Ketua Himpunan</div>
                </div>

                <div class="relative grayscale hover:grayscale-0 transition duration-700 ease-out isolate flex flex-col justify-end overflow-hidden rounded-2xl
                px-8 pb-8 pt-40 w-full shadow-lg dark:shadow-primary-900 mx-auto mt-16"
                data-aos="zoom-in" data-aos-duration="700" data-aos-delay="100">
                    <img src="{{ asset('img/2023/BPH/wakil.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900 via-violet-800/5"></div>
                    <h3 class="z-10 mt-3 w-full text-3xl font-bold text-white">Ardiva Kamila Rohmadhani</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-white">Wakil Ketua</div>
                </div>

                <div class="relative grayscale hover:grayscale-0 transition duration-700 ease-out isolate flex flex-col justify-end overflow-hidden
                 rounded-2xl px-8 pb-8 pt-40 w-full shadow-lg dark:shadow-primary-900 mx-auto mt-16"
                 data-aos="zoom-in" data-aos-duration="700" data-aos-delay="200">
                    <img src="{{ asset('img/2023/BPH/sekretaris1.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900 via-violet-800/5"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Fatima Shinta Faradina</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-white">Sekretaris 1</div>
                </div>

                <div class="relative grayscale hover:grayscale-0 transition duration-700 ease-out isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 w-full shadow-lg dark:shadow-primary-900 mx-auto mt-16"
                data-aos="zoom-in" data-aos-duration="700" data-aos-delay="100">
                    <img src="{{ asset('img/2023/BPH/saekretaris2.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900 via-violet-800/5"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Siti Nurul Hidayati</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-white">Sekretaris 2</div>
                </div>

                <div class="relative grayscale hover:grayscale-0 transition duration-700 ease-out isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 w-full shadow-lg dark:shadow-primary-900 mx-auto mt-16"
                data-aos="zoom-in" data-aos-duration="700" data-aos-delay="200">
                    <img src="{{ asset('img/2023/BPH/bendahara1.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900 via-violet-800/5"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Febianti Roselina</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-white">Bendahara 1</div>
                </div>

                <div class="relative grayscale hover:grayscale-0 transition duration-700 ease-out isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 w-full shadow-lg dark:shadow-primary-900  mx-auto mt-16"
                data-aos="zoom-in" data-aos-duration="700" data-aos-delay="300">
                    <img src="{{ asset('img/2023/BPH/bendahara2.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900 via-violet-800/5"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Naurah Safina</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-white">Bendahara 2</div>
                </div>

            </div>
        </div>
    </section>

    <section id="follow" class="bg-gray-50 dark:bg-gray-800">
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
