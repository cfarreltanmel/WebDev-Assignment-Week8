@extends('layouts.layout')
@section('content')
    <main class="grow py-16 px-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold text-slate-900 text-center mb-12">
                My Projects
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between">
                    <div>
                        <div class="h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('img/Outfix.png') }}" alt="Outfix" class="w-full h-full object-cover" />
                        </div>
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-slate-900 mb-2">Outfix</h2>
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                Project ALP semester 2 gabungan 2 mata kuliah.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="px-2.5 py-1 text-xs font-semibold rounded-md bg-blue-600 text-white">HTML</span>
                                <span
                                    class="px-2.5 py-1 text-xs font-semibold rounded-md bg-emerald-600 text-white">Java</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="#"
                            class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl border border-blue-500 text-blue-600 font-medium text-sm hover:bg-blue-50 transition-colors">
                            Lihat Project
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between">
                    <div>
                        <div class="h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('img/FlutterApp.png') }}" alt="Flutter App"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-slate-900 mb-2">Flutter App</h2>
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                Aplikasi reminder barang pinjaman menggunakan Flutter.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="px-2.5 py-1 text-xs font-semibold rounded-md bg-amber-500 text-slate-900">Flutter</span>
                                <span
                                    class="px-2.5 py-1 text-xs font-semibold rounded-md bg-rose-500 text-white">Dart</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="#"
                            class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl border border-blue-500 text-blue-600 font-medium text-sm hover:bg-blue-50 transition-colors">
                            Lihat Project
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between">
                    <div>
                        <div class="h-64 overflow-hidden bg-slate-100">
                            <img src="{{ asset('img/MLBBItemTree.png') }}" alt="MLBB Item Tree"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-slate-900 mb-2">MLBB Item Tree</h2>
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                Implementasi struktur data tree untuk item dalam game Mobile Legends.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="px-2.5 py-1 text-xs font-semibold rounded-md bg-cyan-500 text-white">Java</span>
                                <span
                                    class="px-2.5 py-1 text-xs font-semibold rounded-md bg-emerald-600 text-white">TreeDataStructure</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="#"
                            class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-xl border border-blue-500 text-blue-600 font-medium text-sm hover:bg-blue-50 transition-colors">
                            Lihat Project
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
