<?php

use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', function () {
    return view('home');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/agenda_detail', function () {
    return view('agenda_detail');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/demografi', function () {
    return view('demografi');
});

Route::get('/kades', function () {
    return view('kades');
});

Route::get('/informasipelayanan', function () {
    return view('informasipelayanan');
});

Route::get('/permohonansuratan', function () {
    return view('permohonansuratan');
});

Route::get('/detail_suratan', function () {
    return view('detail_suratan');
});

Route::get('/lembaga_detailBPD', function () {
    return view('lembaga_detailBPD');
});
Route::get('/lembaga_detailLPMD', function () {
    return view('lembaga_detailLPMD');
});
Route::get('/lembaga_detailPKK', function () {
    return view('lembaga_detailPKK');
});
Route::get('/lembaga_detailKT', function () {
    return view('lembaga_detailKT');
});
Route::get('/lembaga_detailLD', function () {
    return view('lembaga_detailLD');
});
Route::get('/lembaga_detailBD', function () {
    return view('lembaga_detailBD');
});

Route::get('/lembaga', function () {
    return view('lembaga');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/monografi_dashboard', function () {
    return view('monografi_dashboard');
});

Route::get('/monografi', function () {
    return view('monografi');
});

Route::get('/visi_misi', function () {
    return view('visi_misi');
});

Route::get('/apb', function () {
    return view('apb');
});

Route::get('/rpjm', function () {
    return view('rpjm');
});

Route::get('/rka', function () {
    return view('rka');
});

Route::get('/perangkat_desa', function () {
    return view('perangkat_desa');
});

Route::get('/produkhukum', function () {
    return view('produkhukum');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/transparansi', function () {
    return view('transparansi');
});
Route::view('/admin/dashboard', 'admin.dashboard')->name('dashboard');
Route::view('/admin/kades', 'admin.kades')->name('kades');
Route::view('/admin/perangkat-desa', 'admin.perangkat-desa')->name('perangkat-desa');
Route::view('/admin/struktur', 'admin.struktur')->name('struktur');
Route::view('/admin/pemerintahan', 'admin.pemerintahan')->name('pemerintahan');
Route::view('/admin/agenda', 'admin.agenda')->name('agenda');
Route::view('/admin/produk-hukum', 'admin.produk-hukum')->name('produk-hukum');
Route::view('/admin/transparansi', 'admin.transparansi')->name('transparansi');
Route::view('/admin/monografi', 'admin.monografi-dashboard')->name('monografi');
