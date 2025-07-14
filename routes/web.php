<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionContentController;
use App\Http\Controllers\FormPesanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🔹 Landing Page untuk umum
Route::get('/', function () {
    return view('landing');
});

// 🔹 Form "Pesan Sekarang"
Route::post('/form-pesan', [FormPesanController::class, 'store'])->name('form.pesan');

// 🔹 Auth (login/register/forgot password dll)
require __DIR__.'/auth.php';

// 🔹 Dashboard hanya bisa diakses setelah login & verifikasi
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::view('/profile', 'profile')->name('profile');

    // 🔹 Admin Area (Edit Konten)
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/content/{section}', [SectionContentController::class, 'edit'])->name('content.edit');
        Route::post('/content/{section}', [SectionContentController::class, 'save'])->name('content.save');
    });

});