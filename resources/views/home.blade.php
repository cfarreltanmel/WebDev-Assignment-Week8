@extends('layouts.layout')
@section('content')
    <main class="grow items-center justify-center py-20 px-6">
        <div class="max-w-4xl mx-auto text-center flex flex-col items-center">

            <div class="mb-8">
                <img src="{{ asset('img/Bruh .jpg') }}" alt="{{ $Nama }}"
                    class="w-44 h-44 md:w-64 md:h-64 rounded-full object-cover shadow-lg ring-4 ring-yellow-800" />
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-slate-900 tracking-tight leading-tight mb-4">
                <span class="text-red-600">{{ $Nama }}</span>
            </h1>

            <p class="text-lg md:text-xl text-slate-200 font-normal max-w-2xl mb-8 leading-relaxed">
                Seorang mahasiswa IMT di Universitas Ciputra Makassar
            </p>

            <a href="about"
                class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-red-600 hover:bg-red-700 text-white font-medium shadow-md hover:shadow-lg transition-all transform active:scale-95 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                More About Me
            </a>

        </div>
    </main>
@endsection
