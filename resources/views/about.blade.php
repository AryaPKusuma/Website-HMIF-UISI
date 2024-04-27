@extends('partials.main')

@section('tittle', 'About')

@section('content')

    <header>
        <section class=" py-16 flex flex-1 items-center bg-center bg-cover bg-gradient-to-r from-violet-600 to-indigo-600">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-left sm:text-center lg:py-20 lg:px-12 ">
                <h1 class="mb-4 text-2xl font-bold leading-none md:text-6xl lg:text-4xl text-white">
                    Tentang HMIF
                </h1>
            </div>
        </section>
    </header>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <h1 class="py-4 text-3xl font-extrabold leading-tight text-gray-900 lg:py-6 lg:text-4xl dark:text-white">
                    Himpunan Mahasiswa Informatika Universitas Internasional Semen Indonesia
                </h1>
                <p class=" text-gray-900 dark:text-white">Before going digital, you might benefit from scribbling down some
                    ideas in a sketchbook. This way,
                    you can think things through before committing to an actual design project.</p>
                <h1 class="py-4 text-3xl font-extrabold leading-tight text-gray-900 lg:py-6 lg:text-4xl dark:text-white">
                    Tujuan
                </h1>
                <h1 class="py-4 text-3xl font-extrabold leading-tight text-gray-900 lg:py-6 lg:text-4xl dark:text-white">
                    Visi & Misi
                </h1>
                <h1 class="py-4 text-3xl font-extrabold leading-tight text-gray-900 lg:py-6 lg:text-4xl dark:text-white">
                    Makna Logo
                </h1>
                <h1 class="py-4 text-3xl font-extrabold leading-tight text-gray-900 lg:py-6 lg:text-4xl dark:text-white">
                    Struktur dan Kepemimpinan
                </h1>
            </article>
        </div>
    </main>

@endsection
