<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ ucfirst($page->name ?? 'Company Profile') }}</title>
</head>
<body>

    {{-- NAVBAR --}}
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
    </nav>

    {{-- CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer>
        <small>© {{ date('Y') }} Company</small>
    </footer>

</body>
</html>
