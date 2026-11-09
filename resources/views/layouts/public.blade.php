
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'PT Equityworld Futures')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#FFF9F0] font-sans text-[#51413E] antialiased">
    <x-public.header />

    <main>
        @yield('content')
    </main>

    <x-public.footer />
</body>
</html>
