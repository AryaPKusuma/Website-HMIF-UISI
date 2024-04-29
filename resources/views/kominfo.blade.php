@extends('partials.main')

@section('tittle', 'Divisi Komunikasi dan Informasi')

@section('content')

    <section class=" py-16 flex flex-1 items-center bg-center bg-cover bg-gradient-to-r from-blue-600 to-violet-600">
        <div class=" pt-16 px-4 mx-auto max-w-screen-xl text-left sm:text-center lg:pb-14 lg:pt-32 lg:px-12 ">
            <h1 class="mb-4 text-4xl font-bold leading-none sm:text-6xl lg:text-7xl tracking-widest text-white">
                KOMINFO
            </h1>
            <p class="mb-4 text-lg font-light text-gray-200 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-300">
                Komunikasi dan Informasi
            </p>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 sm:py-12 lg:py-16  px-4 mx-auto max-w-screen-md">

            <p class="font-normal text-gray-500 dark:text-gray-400 sm:text-xl">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum rem natus quis dolores doloremque iste dolorum
                tempora assumenda. Odio doloremque repellendus, itaque enim magnam incidunt aut voluptatibus impedit
                pariatur accusamus.
            </p>

        </div>
    </section>

    <section class="bg-white dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-20">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Prospek Kerja
                </h2>

                <div class="mt-4">
                    <p class="inline-flex items-center font-light text-gray-500 sm:text-xl dark:text-gray-400">
                        Cari tau tentang program kerja kami
                    </p>
                </div>
            </div>

            <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
                <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">

                    <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                        <h3 class="w-32 sm:text-right text-lg font-semibold text-gray-900 dark:text-white shrink-0">
                            Lorem</a>
                        </h3>
                        <p class=" text-lg font-normal text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis nemo soluta illo aliquam ad
                            dignissimos, molestias delectus adipisci expedita repudiandae odio debitis nesciunt ea harum!
                            Sed repudiandae iste maiores praesentium!
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-lg text-center lg:py-16 sm:lg-6 lg:px-16">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Daftar Anggota</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Jelajadi profile anggota</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class="text-center text-gray-500 dark:text-gray-400 mb-2">
                    <img class="mx-auto mb-4 w-48 h-w-48 rounded-md transition duration-700 ease-in-out grayscale hover:grayscale-0"
                        src="{{ asset('img/2023/KOMINFO/airlanggaadipratama.JPG') }}" alt="Bonnie Avatar">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Airlangga Adi Pratama</a>
                    </h3>
                    <span class="bg-primary-500 text-xs text-white px-3 py-1 rounded-full">Ketua Divisi</span>
                </div>

                <div class="text-center text-gray-500 dark:text-gray-400 mb-2">
                    <img class="mx-auto mb-4 w-48 h-w-48 rounded-md transition duration-700 ease-in-out grayscale hover:grayscale-0"
                        src="{{ asset('img/2023/KOMINFO/amirrotunnabilaromadlona.JPG') }}" alt="Bonnie Avatar">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Amirrotun Nabila Romadlona</a>
                    </h3>
                </div>

                <div class="text-center text-gray-500 dark:text-gray-400 mb-2">
                    <img class="mx-auto mb-4 w-48 h-w-48 rounded-md transition duration-700 ease-in-out grayscale hover:grayscale-0"
                        src="{{ asset('img/2023/KOMINFO/andreaspratama.JPG') }}" alt="Bonnie Avatar">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Andreas Pratama</a>
                    </h3>
                </div>

                <div class="text-center text-gray-500 dark:text-gray-400 mb-2">
                    <img class="mx-auto mb-4 w-48 h-w-48 rounded-md transition duration-700 ease-in-out grayscale hover:grayscale-0"
                        src="{{ asset('img/2023/KOMINFO/rayhanarramadhanwillysaputra.JPG') }}" alt="Bonnie Avatar">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Rayhan Arramadhan</a>
                    </h3>
                </div>

            </div>

        </div>
    </section>

@endsection
