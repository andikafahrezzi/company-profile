<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Company Profile')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- nanti css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    {{-- NAVBAR --}}
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
    </nav>

    {{-- KONTEN HALAMAN --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer>
        <p>&copy; {{ date('Y') }} Company Name</p>
    </footer>

</body>
</html>
