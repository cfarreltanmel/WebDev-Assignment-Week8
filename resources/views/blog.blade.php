@extends('layouts.layout')
@section('content')
    <main class="grow flex items-center justify-center py-20 px-6">
        <div class="max-w-4xl mx-auto text-center flex flex-col items-center">

            <h1 class="text-4xl md:text-5xl font-light text-slate-900 text-center mb-12 tracking-tight">
                Blog
            </h1>

            <article class="text-lg md:text-xl text-slate-600 font-normal max-w-2xl mb-8 leading-relaxed">
                Selamat datang di blog saya! Di sini, saya berbagi berbagai artikel yang mungkin berguna untuk
                pengembangan website/aplikasi menggunakan laravel.
            </article>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
                <div class="bg-white rounded-lg shadow-md p-6 border border-slate-100">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2">Routing</h2>
                    <p class="text-sm text-slate-500 mb-4">Tanggal: 23 Oktober 2026</p>
                    <p class="text-slate-700">Penjelasan tentang cara kerja routing di Laravel dan bagaimana mengatur
                        rute untuk aplikasi Anda.</p>
                    <a href="https://laravel.com/framework/docs/routing"
                        class="mt-4 inline-block text-blue-600 hover:underline">Baca Selengkapnya</a>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 border border-slate-100">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2">Blade Templates</h2>
                    <p class="text-sm text-slate-500 mb-4">Tanggal: 24 Oktober 2026</p>
                    <p class="text-slate-700">Informasi dan tutorial mengenai penggunaan Blade templating engine di
                        Laravel.</p>
                    <a href="https://laravel.com/framework/docs/blade"
                        class="mt-4 inline-block text-blue-600 hover:underline">Baca Selengkapnya</a>
                </div>

            </div>
        </div>
    </main>
@endsection
