<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Company Profile')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 antialiased">

    {{-- NAVBAR --}}
    <header class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur border-b">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="text-xl font-bold tracking-wide text-blue-600">
                    Company
                </a>

                <nav x-data="{open:false}" class="fixed w-full z-50 bg-white/80 backdrop-blur shadow-sm">
    <div class="max-w-7xl mx-auto px-10 py-4 flex justify-between items-center">
        <h1 class="font-bold text-xl text-blue-600">Company</h1>

        {{-- Desktop --}}
        <div class="hidden md:flex space-x-8 font-medium">
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="/about" class="hover:text-blue-600">About</a>
            <a href="/services" class="hover:text-blue-600">Services</a>
            <a href="/contact" class="hover:text-blue-600">Contact</a>
        </div>

        {{-- Mobile Button --}}
        <button @click="open=!open" class="md:hidden">
            ☰
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-transition class="md:hidden bg-white shadow">
        <a href="/" class="block px-6 py-3">Home</a>
        <a href="/about" class="block px-6 py-3">About</a>
        <a href="/services" class="block px-6 py-3">Services</a>
        <a href="/contact" class="block px-6 py-3">Contact</a>
    </div>
</nav>

            </div>
        </div>
    </header>

    {{-- CONTENT --}}
    <main class="pt-16">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-gray-300 mt-24">
        <div class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-10">
            <div>
                <h3 class="text-white font-semibold text-lg mb-4">Company</h3>
                <p class="text-sm leading-relaxed">
                    Kami menyediakan solusi digital modern untuk membantu bisnis berkembang
                    dengan teknologi yang tepat.
                </p>
            </div>

            <div>
                <h3 class="text-white font-semibold text-lg mb-4">Menu</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-white">Home</a></li>
                    <li><a href="/about" class="hover:text-white">About</a></li>
                    <li><a href="/services" class="hover:text-white">Services</a></li>
                    <li><a href="/contact" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold text-lg mb-4">Contact</h3>
                <p class="text-sm">Email: info@company.com</p>
                <p class="text-sm">Telp: +62 812 xxxx xxxx</p>
            </div>
        </div>

        <div class="border-t border-gray-800 py-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} Company Profile. All rights reserved.
        </div>
    </footer>

</body>
</html>
