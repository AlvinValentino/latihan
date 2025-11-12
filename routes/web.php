<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('mahasiswa')->group(function() {
    Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});

Route::prefix('mata_kuliah')->group(function() {
    Route::get('/', [MataKuliahController::class, 'index'])->name('mata_kuliah.index');
    Route::get('/create', [MataKuliahController::class, 'create'])->name('mata_kuliah.create');
    Route::post('/store', [MataKuliahController::class, 'store'])->name('mata_kuliah.store');
    Route::get('/edit/{id}', [MataKuliahController::class, 'edit'])->name('mata_kuliah.edit');
    Route::put('/update/{id}', [MataKuliahController::class, 'update'])->name('mata_kuliah.update');
    Route::delete('/destroy/{id}', [MataKuliahController::class, 'destroy'])->name('mata_kuliah.destroy');
});

Route::prefix('absensi')->group(function() {
    Route::get('/', [AbsensiController::class, 'index'])->name('absensi.index');
    Route::get('/{angkatan}', [AbsensiController::class, 'pilihMataKuliah'])->name('absensi.pilihMataKuliah');
    Route::get('/{angkatan}/{kode_mk}', [AbsensiController::class, 'absensi'])->name('absensi.absensi');
    Route::post('/submit/{angkatan}/{kode_mk}', [AbsensiController::class, 'submitAbsensi'])->name('absensi.submitAbsensi');
});