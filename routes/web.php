<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\DashboardController;


// HALAMAN PUBLIK (untuk pengunjung, tidak perlu login)
Route::get('/', function () {
    return view('welcome'); // homepage
});

Route::get('/about', function () {
    return view('about'); // halaman profile company
});

Route::get('/services', function () {
    return view('services'); // halaman layanan/perusahaan
});

Route::get('/contact', function () {
    return view('contact'); // halaman kontak
});

// ADMIN ROUTE
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth'])->get('/dashboard', function () {
    // cek role
    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    // jika nanti ada role lain, redirect ke halaman publik
    return redirect('/');
})->name('dashboard');

// USER ROUTE
Route::middleware(['auth'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
