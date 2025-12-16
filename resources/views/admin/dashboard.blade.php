{{-- resources/views/admin/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-3">
                    <svg class="w-9 h-9 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Dashboard Admin
                </h2>
                <p class="text-gray-500 mt-1">Selamat datang kembali, <span class="font-semibold text-gray-700">{{ Auth::user()->name }}</span></p>
            </div>
            <div class="flex items-center gap-3">
                <div class="text-right hidden md:block">
                    <p class="text-sm text-gray-500">{{ now()->format('l') }}</p>
                    <p class="text-lg font-semibold text-gray-800">{{ now()->format('d F Y') }}</p>
                </div>
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Welcome Card -->
            <div class="bg-gradient-to-r from-blue-600 via-blue-700 to-purple-700 rounded-3xl shadow-2xl p-8 mb-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>
                <div class="relative z-10">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="text-white mb-6 md:mb-0">
                            <h3 class="text-3xl font-bold mb-2">👋 Selamat Datang di Dashboard!</h3>
                            <p class="text-blue-100 text-lg">Kelola semua konten dan pengaturan website Anda dengan mudah</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <a href="{{ route('admin.contents.index') }}" 
                               class="inline-flex items-center gap-2 bg-white text-blue-600 px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Kelola Content
                            </a>
                            <a href="{{ route('admin.contents.create') }}" 
                               class="inline-flex items-center gap-2 bg-blue-800 hover:bg-blue-900 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                Tambah Content
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Content -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-blue-500 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-medium uppercase tracking-wide">Total Content</p>
                            <p class="text-4xl font-bold text-gray-800 mt-2">{{ \App\Models\Content::count() }}</p>
                            <p class="text-green-600 text-sm font-medium mt-2 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                +12% dari bulan lalu
                            </p>
                        </div>
                        <div class="bg-blue-100 rounded-2xl p-4">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Total Pages -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-purple-500 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-medium uppercase tracking-wide">Total Pages</p>
                            <p class="text-4xl font-bold text-gray-800 mt-2">{{ \App\Models\Page::count() }}</p>
                            <p class="text-gray-500 text-sm font-medium mt-2 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Semua aktif
                            </p>
                        </div>
                        <div class="bg-purple-100 rounded-2xl p-4">
                            <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Total Sections -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-green-500 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-medium uppercase tracking-wide">Total Sections</p>
                            <p class="text-4xl font-bold text-gray-800 mt-2">{{ \App\Models\Section::count() }}</p>
                            <p class="text-blue-600 text-sm font-medium mt-2 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                                Berbagai tipe
                            </p>
                        </div>
                        <div class="bg-green-100 rounded-2xl p-4">
                            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Users -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-orange-500 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-medium uppercase tracking-wide">Total Users</p>
                            <p class="text-4xl font-bold text-gray-800 mt-2">{{ \App\Models\User::count() }}</p>
                            <p class="text-orange-600 text-sm font-medium mt-2 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                Active users
                            </p>
                        </div>
                        <div class="bg-orange-100 rounded-2xl p-4">
                            <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Recent Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                
                <!-- Quick Actions -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Quick Actions
                    </h3>
                    <div class="space-y-3">
                        <a href="{{ route('admin.contents.create') }}" 
                           class="flex items-center gap-3 p-4 bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 rounded-xl transition-all duration-200 group">
                            <div class="bg-blue-600 rounded-lg p-2 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-800">Tambah Content</p>
                                <p class="text-sm text-gray-500">Buat konten baru</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="{{ route('admin.contents.index') }}" 
                           class="flex items-center gap-3 p-4 bg-gradient-to-r from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 rounded-xl transition-all duration-200 group">
                            <div class="bg-purple-600 rounded-lg p-2 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-800">Kelola Content</p>
                                <p class="text-sm text-gray-500">Edit & hapus content</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-purple-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="#" 
                           class="flex items-center gap-3 p-4 bg-gradient-to-r from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 rounded-xl transition-all duration-200 group">
                            <div class="bg-green-600 rounded-lg p-2 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-800">Pengaturan</p>
                                <p class="text-sm text-gray-500">Konfigurasi website</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-green-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="/" target="_blank"
                           class="flex items-center gap-3 p-4 bg-gradient-to-r from-orange-50 to-orange-100 hover:from-orange-100 hover:to-orange-200 rounded-xl transition-all duration-200 group">
                            <div class="bg-orange-600 rounded-lg p-2 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-800">Lihat Website</p>
                                <p class="text-sm text-gray-500">Preview frontend</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Recent Content -->
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Recent Content
                        </h3>
                        <a href="{{ route('admin.contents.index') }}" class="text-blue-600 hover:text-blue-700 font-medium text-sm flex items-center gap-1">
                            Lihat Semua
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="space-y-3">
                        @forelse(\App\Models\Content::with(['page', 'section'])->latest()->take(5)->get() as $content)
                        <div class="flex items-center gap-4 p-4 bg-gray-50 hover:bg-gray-100 rounded-xl transition-colors duration-200 group">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-600 rounded-lg flex items-center justify-center text-white font-bold shadow-md flex-shrink-0">
                                {{ substr($content->page->name, 0, 1) }}
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-800 truncate">{{ $content->title }}</p>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-xs px-2 py-1 bg-blue-100 text-blue-700 rounded-full font-medium">
                                        {{ $content->page->name }}
                                    </span>
                                    <span class="text-xs px-2 py-1 bg-purple-100 text-purple-700 rounded-full font-medium">
                                        {{ $content->section->name }}
                                    </span>
                                </div>
                            </div>
                            <div class="text-right flex-shrink-0">
                                <p class="text-xs text-gray-500">{{ $content->updated_at->diffForHumans() }}</p>
                                <a href="{{ route('admin.contents.edit', $content) }}" 
                                   class="text-sm text-blue-600 hover:text-blue-700 font-medium inline-flex items-center gap-1 mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                    Edit
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="text-gray-500 font-medium">Belum ada content</p>
                            <p class="text-gray-400 text-sm mt-1">Mulai dengan menambahkan content baru</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- System Info & Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <!-- System Info -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                        System Info
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Laravel Version</p>
                                    <p class="text-sm text-gray-600">{{ app()->version() }}</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Active</span>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                            <div class="flex items-center gap-3">
<div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">PHP Version</p>
                                    <p class="text-sm text-gray-600">{{ phpversion() }}</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Running</span>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Database</p>
                                    <p class="text-sm text-gray-600">MySQL Connected</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Online</span>
                        </div>
                    </div>
                </div>

                <!-- Activity Log -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                        Recent Activity
                    </h3>
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div class="flex-1">
                                <p class="text-gray-800 font-medium">Content berhasil ditambahkan</p>
                                <p class="text-sm text-gray-500">5 menit yang lalu</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div class="flex-1">
                                <p class="text-gray-800 font-medium">Page "Home" diupdate</p>
                                <p class="text-sm text-gray-500">2 jam yang lalu</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div class="flex-1">
                                <p class="text-gray-800 font-medium">{{ Auth::user()->name }} login ke sistem</p>
                                <p class="text-sm text-gray-500">{{ now()->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div class="flex-1">
                                <p class="text-gray-800 font-medium">Section "Services" dimodifikasi</p>
                                <p class="text-sm text-gray-500">Kemarin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>