@extends('partials.main')

@section('tittle', 'About')

@section('content')



    <header>
        <section class=" py-16 flex flex-1 items-center bg-gradient-to-r from-cyan-500 to-blue-500">
            <div class=" pt-16 px-4 mx-auto max-w-screen-xl text-left sm:text-center lg:pb-14 lg:pt-32 lg:px-12 ">
                <h1 class="mb-8 text-4xl font-bold leading-none sm:text-6xl lg:text-7xl text-white">
                    Tentang HMIF
                </h1>
            </div>
        </section>
    </header>

    <main class=" relative pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="absolute grid grid-cols-2 gap-52 inset-0 w-full m-auto h-max opacity-40">
            <div class=" blur-[170px] h-40 bg-primary-500"></div>
            <div></div>
            <div></div>
            <div class="blur-[170px] h-40 bg-primary-500"></div>
            <div class=" blur-[170px] h-40 bg-primary-500"></div>
            <div></div>
        </div>
        <div class="flex justify-between px-4 mx-auto max-w-screen-2xl">
            <div
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">

                <article>
                    <h1
                        class="py-4 text-3xl font-extrabold leading-tight text-gray-900 lg:py-6 lg:text-4xl dark:text-white">
                        Himpunan Mahasiswa Informatika Universitas Internasional Semen Indonesia
                    </h1>
                    <p class=" text-gray-900 dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                        cumque nobis ab labore. Asperiores quis temporibus omnis id tempora, magni optio voluptatem dolor
                        consequatur quo laborum amet. Deleniti, quidem vero.</p>
                </article>

                <article>
                    <h1 class="py-4 text-3xl font-bold leading-tight text-gray-900 lg:py-6 lg:text-2xl dark:text-white">
                        Tujuan
                    </h1>
                    <ol class="space-y-1 text-gray-800 list-decimal list-inside dark:text-gray-100">
                        <li>
                            Menciptakan Mahasiswa Informatika UISI yang berkualitas, Inovatif, dan siap bersaing dalam dunia
                            kerja.
                        </li>
                        <li>
                            Menumbuhkan jiwa entrepreneurship bagi mahasiswa informatika UISI.
                        </li>
                        <li>
                            Menjalin hubungan yang baik dan berkontribusi aktif dalam kegiatan
                            kemasyarakatan yang berasaskan kekeluargaan.
                        </li>
                        <li>
                            Mewadahi, memproses, serta mengimplementasikan potensi dan
                            kompetensi setiap mahasiswa informatika UISI.
                        </li>
                    </ol>
                </article>

                <article class="text-gray-900 dark:text-white">
                    <h1 class="py-4 text-3xl font-bold leading-tight text-gray-900 lg:py-6 lg:text-2xl dark:text-white">
                        Visi & Misi
                    </h1>
                    <span class="font-bold text-xl">Visi</span>
                    <p class="mb-4">HMIF sebagai katalisator unggul dan harmonis</p>

                    <span class="font-bold text-xl">Misi</span>
                    <ol class="space-y-1 text-gray-900 list-decimal list-inside dark:text-white">
                        <li>Membangun HMIF sebagai rumah aspiratif, kolaboratif, dan harmoni.</li>
                        <li>Mengoptimalisasi inovasi dan potensi anggota HMIF berdasarkan minat dan
                            bakatnya.</li>
                        <li>Mengembangkan wadah untuk berkarya sebagai bentuk aktualisasi diri yang
                            berasaskan profesionalitas.</li>
                    </ol>
                </article>

                <article>
                    <h1 class="py-4 text-3xl font-bold leading-tight text-gray-900 lg:py-6 lg:text-2xl dark:text-white">
                        Makna Logo
                    </h1>
                    <figure>
                        <img class="h-auto max-w-56 md:max-w-64 lg:max-w-sm mx-auto my-6" src="{{ asset('img/logo.png') }}"
                            alt="image description">
                    </figure>
                    <ol class="space-y-1 text-gray-900 list-inside dark:text-white">
                        <li>
                            <span class="font-bold text-xl">Simbol</span>
                            <p class="mb-2">Inisial ‘IF’ yang merunduk kebawah mengartikan HMIF
                                mengaplikasikan ilmu padi yang semakin berisi semakin
                                merunduk dan membentuk segitiga sama sisi yang
                                menggambarkan sebuah pencapain tujuan.</p>
                            <p class="mb-4">
                                Lingkaran putus – putus yang mengelilingi logo ‘IF’
                                mengartikan bahwa HMIF di dalam sebuah lingkaran sosial
                                tetapi juga tidak menutup diri terhadap organisasi maupun
                                lembaga lain secara eksternal.
                            </p>
                        </li>
                        <li>
                            <span class="font-bold text-xl">Tulisan</span>
                            <p class="mb-2">Tulisan “HMIF” adalah singkatan dari Himpunan Mahasiswa
                                Informatika.</p>
                            <p class="mb-4">Tulisan “Universitas Internasional Semen Indonesia” untuk
                                menerangkan kedudukan dari HMIF
                            </p>
                        </li>
                        <li>
                            <span class="font-bold text-xl">Warna</span>
                            <p class="mb-2">Tulisan “HMIF” adalah singkatan dari Himpunan Mahasiswa
                                Informatika.</p>
                            <p class="mb-4">Tulisan “Universitas Internasional Semen Indonesia” untuk
                                menerangkan kedudukan dari HMIF
                            </p>
                        </li>
                    </ol>
                </article>

                <article>
                    <h1 class="py-4 text-3xl font-bold leading-tight text-gray-900 lg:py-6 lg:text-2xl dark:text-white">
                        Struktur dan Kepemimpinan
                    </h1>
                    <figure>
                        <img class="hidden dark:block h-auto max-w-full mx-auto my-6"
                            src="{{ asset('img/strukturDark.png') }}" alt="image description">
                    </figure>
                    <figure>
                        <img class="block dark:hidden h-auto max-w-full mx-auto my-6"
                            src="{{ asset('img/strukturHMIF.drawio.png') }}" alt="image description">
                    </figure>
                    <p class="text-gray-900 dark:text-white">Kekuasaan tertinggi HMIF berada pada Rapat Umum Mahasiswa
                        Departemen
                        (RUMD) HMIF. Kepemimpinan organisasi HMIF dijalankan sepenuhnya oleh pengurus HMIF
                        sedangkan Masa Jabatan pengurus HMIF adalah 1 periode kepengurusan yang dimulai
                        dari dilantiknya kepengurusan sampai dilantiknya kepengurusan berikutnya.</p>
                </article>

            </div>
        </div>
    </main>

@endsection
