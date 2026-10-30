@extends('layouts.layout')
@section('content')
    <main class="grow flex items-center justify-center py-16 px-6 bg-slate-50/50">
        <div class="w-full max-w-xl mx-auto">

            <h1 class="text-4xl md:text-5xl font-light text-slate-900 text-center mb-10 tracking-tight">
                Send a Message
            </h1>

            <div class="bg-white rounded-2xl p-8 md:p-10 shadow-sm border border-slate-100">
                <form action="contact" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="nama" class="block text-sm font-medium text-slate-600 mb-2">
                            Nama Lengkap
                        </label>
                        <input type="text" id="nama" name="nama" pattern=".*\S.*"
                            placeholder="Masukkan nama lengkap Anda" required
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder:text-slate-400">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-600 mb-2">
                            Alamat Email
                        </label>
                        <input type="email" id="email" name="email" pattern=".*\S.*" placeholder="nama@email.com"
                            required
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder:text-slate-400">
                    </div>

                    <div>
                        <label for="pesan" class="block text-sm font-medium text-slate-600 mb-2">
                            Pesan
                        </label>
                        <textarea id="pesan" name="pesan" onblur="this.value = this.value.trim()" rows="5"
                            placeholder="Tuliskan pesan Anda di sini..." required
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all placeholder:text-slate-400 resize-y"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="w-full py-3.5 px-6 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm shadow-sm hover:shadow transition-all duration-150 active:scale-[0.99] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Kirim Pesan
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </main>
@endsection
