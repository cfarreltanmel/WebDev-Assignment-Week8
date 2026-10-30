@extends('layouts.layout')
@section('content')
    <main class="grow flex items-center justify-center py-16 px-6 bg-slate-50/50">
        <div class="w-full max-w-5xl mx-auto">

            <h1 class="text-4xl md:text-5xl font-light text-slate-900 text-center mb-12 tracking-tight">
                About Me
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">

                <div class="md:col-span-4 lg:col-span-4 flex justify-center">
                    <img src="{{ asset('img/bruh .jpg') }}" alt="{{ $Nama }}"
                        class="w-full max-w-sm md:max-w-none h-full max-h-115 object-cover rounded-2xl shadow-sm border border-slate-100" />
                </div>

                <div
                    class="md:col-span-8 lg:col-span-7 bg-white rounded-2xl p-8 md:p-10 shadow-sm border border-slate-100 flex flex-col justify-center">

                    <div class="mb-8">
                        <h2 class="text-xl md:text-2xl font-bold text-blue-600 mb-3">
                            Siapa Saya?
                        </h2>
                        <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                            Halo! Saya adalah seorang mahasiswa di Universitas Ciputra yang memiliki passion di bidang
                            komputer. Saya percaya bahwa teknologi dapat menyelesaikan berbagai masalah yang ada di
                            masyarakat dengan efisien.
                        </p>
                    </div>

                    <div>
                        <h2 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">
                            Pendidikan &amp; Pengalaman
                        </h2>
                        <ul class="space-y-3 text-sm md:text-base text-slate-700">
                            <li class="pb-3 border-b border-slate-100 last:border-b-0 last:pb-0">
                                <span class="font-bold text-slate-900">Universitas Ciputra</span>
                                <span class="text-slate-600">- Information &amp; Multimedia Technology (2025 -
                                    Sekarang)</span>
                            </li>
                            <li class="pb-3 border-b border-slate-100 last:border-b-0 last:pb-0">
                                <span class="font-bold text-slate-900">SMA Katolik Rajawali</span>
                                <span class="text-slate-600">- Jurusan IPA (2022 - 2025)</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </main>
@endsection
