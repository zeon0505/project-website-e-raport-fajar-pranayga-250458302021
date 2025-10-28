<?php

use App\Livewire\Features;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', Features\Dashboard::class)->name('admin.dashboard');
    Route::get('/list-laporan', Features\ListLaporan::class)->name('admin.list-laporan');
    Route::get('/list-warga', Features\ListWarga::class)->name('admin.list-warga');
    Route::get('/profile', Features\MyProfile::class)->name('admin.profile');
});
    //Detail
   Route::get('/laporan/detail/{id}', Features\Admin\LaporanDetail::class)->name('admin.detail-laporan');

Route::middleware('auth')->prefix('warga')->group(function () {
    Route::get('/', Features\Warga\Dashboard::class)->name('warga.dashboard');

    //CRUD Laporan
    Route::get('/laporan', Features\Warga\Laporan::class)->name('warga.laporan');
    Route::get('/list-laporan', Features\Warga\Laporan\CreateLaporan::class)->name('warga.create-laporan');
    Route::get('/list-laporan/{id}', Features\Warga\Laporan\EditLaporan::class)->name('warga.edit-laporan');
    Route::get('/profile', Features\Warga\Profile::class)->name('warga.profile');
});
