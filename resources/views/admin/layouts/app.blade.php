<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white min-h-screen p-4">
            <h2 class="text-xl font-bold mb-6">Admin Panel</h2>

            <nav class="space-y-3">
                <a href="{{ route('admin.dashboard') }}" class="block">Dashboard</a>
                <a href="{{ route('admin.pages.index') }}" class="block">Kelola Halaman</a>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
