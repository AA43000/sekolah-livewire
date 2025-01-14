<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\OrangtuaController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login/proses', [LoginController::class, 'prosesLogin'])->name('proses-login');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/load-guru', [DashboardController::class, 'loadGuru'])->name('dashboard.load-guru');
    Route::get('/dashboard/load-siswa', [DashboardController::class, 'loadSiswa'])->name('dashboard.load-siswa');
    
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
    Route::get('/kelas/create', [KelasController::class, 'createPage'])->name('kelas.create');
    Route::get('/kelas/edit/{id}', [KelasController::class, 'editPage'])->name('kelas.edit');

    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
    Route::get('/siswa/create', [SiswaController::class, 'createPage'])->name('siswa.create');
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'editPage'])->name('siswa.edit');

    Route::get('/guru', [GuruController::class, 'index'])->name('guru');
    Route::get('/guru/create', [GuruController::class, 'createPage'])->name('guru.create');
    Route::get('/guru/edit/{id}', [GuruController::class, 'editPage'])->name('guru.edit');
});