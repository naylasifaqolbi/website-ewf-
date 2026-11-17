<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'PT Equityworld Futures')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-white font-sans text-[#25344F] antialiased selection:bg-[#D5B893]/40 selection:text-[#25344F]">

    {{-- HEADER --}}
    <x-public.header />

    {{-- KONTEN UTAMA --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <x-public.footer />

</body>
</html>