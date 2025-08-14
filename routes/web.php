<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('admin.index');
});
Route::get('/template', function () {
    return view('admin.template-surat');
});
Route::get('/surat', function () {
    return view('admin.membuat_surat');
});



Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/dashboard', [LoginController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/membuat-surat', [SuratController::class, 'index'])->middleware(['auth'])->name('membuat-surat');
    Route::get('/pilih-template', [SuratController::class, 'pilih'])->middleware(['auth'])->name('pilih-template');
    Route::get('/riwayat-surat', [SuratController::class, 'riwayat'])->middleware(['auth'])->name('riwayat-surat');
    Route::get('/template-surat', [SuratController::class, 'template'])->middleware(['auth'])->name('template-surat');
    Route::post('/templates/store', [SuratController::class, 'store'])->middleware(['auth'])->name('template.store');
    Route::get('/profil', function () {
        return view('admin.profil');
    })->name('profil');
});