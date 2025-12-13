<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContentController;
use App\Models\Content;
use App\Http\Controllers\PageController;




Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/contact', [PageController::class, 'contact']);



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

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/contents', [ContentController::class, 'index'])->name('admin.contents.index');
    Route::get('/contents/create', [ContentController::class, 'create'])->name('admin.contents.create');
    Route::post('/contents', [ContentController::class, 'store'])->name('admin.contents.store');
    Route::get('/contents/{content}/edit', [ContentController::class, 'edit'])->name('admin.contents.edit');
    Route::put('/contents/{content}', [ContentController::class, 'update'])->name('admin.contents.update');
    Route::delete('/contents/{content}', [ContentController::class, 'destroy'])->name('admin.contents.destroy');
});

require __DIR__.'/auth.php';
