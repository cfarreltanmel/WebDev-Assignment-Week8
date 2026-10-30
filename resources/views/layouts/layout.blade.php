<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @yield('head')
</head>

<body class="min-h-screen flex flex-col font-sans text-slate-800 antialiased bg-white">
    @include('partials.navbar')

    <main class="grow flex">
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('scripts')
</body>

</html>
