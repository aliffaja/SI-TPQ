<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\WaliSantriController;
use App\Models\WaliSantri;
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

// Main/Index
Route::get('/', function () {
    return view('mainpage');
});

// Route::get('/main', function() {
//     return view('mainpage');
// });

// Login
Route::get('/login', function() {
    return view('login');
});

// Controller
// PenggunaController
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('view-pengguna');
Route::get('/register-pengguna', function () {
    return view('Administrator/Penggunas/register-pengguna');
})->name('register-pengguna');
Route::post('/register-pengguna', [PenggunaController::class, 'insertdata']);
Route::get('/update-pengguna/{id}', [PenggunaController::class, 'readdata'])->name('update-pengguna');
Route::put('/update-pengguna/{id}', [PenggunaController::class, 'updatedata']);

// WaliSantriController
Route::get('/wali_santri', [WaliSantriController::class, 'add'])->name('wali_santri.index');
Route::get('/wali_santri/create', function () {
    return view('Administrator.WaliSantris.addwalisantri');
})->name('wali_santri.create');
Route::post('/wali_santri', [WaliSantriController::class, 'insertData'])->name('wali_santri.store');
Route::get('/wali_santri/{id}/edit', function ($id) {
    $waliSantri = WaliSantri::findOrFail($id);
    return view('Administrator.WaliSantris.editwalisantri', compact('waliSantri', 'id'));
})->name('wali_santri.edit');
Route::put('/wali_santri/{id}', [WaliSantriController::class, 'updateData'])->name('wali_santri.update');
Route::delete('/wali_santri/{id}', [WaliSantriController::class, 'delete'])->name('wali_santri.destroy');
Route::get('/pdf-wali_santri', [WaliSantriController::class, 'exportpdf'])->name('wali_santri.report.pdf');



// SantriController
Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');
Route::get('/santri/create', [SantriController::class, 'add'])->name('santri.create');
Route::post('/santri', [SantriController::class, 'insertData'])->name('santri.store');
Route::get('/santri/{id}/edit', [SantriController::class, 'edit'])->name('santri.edit');
Route::put('/santri/{id}', [SantriController::class, 'updateData'])->name('santri.update');
Route::delete('/santri/{id}', [SantriController::class, 'delete'])->name('santri.destroy');
// Route::get('/santri/report/pdf', [SantriController::class, 'exportpdf'])->name('santri.report');




// GuruController
Route::get('/Guru', [GuruController::class, 'insertdata']);

// MapelController


// KeuanganController


// NilaiController


// Route::get('/pengguna', function() {
//     return view('Administrator.Pengguna.pengguna');
// });