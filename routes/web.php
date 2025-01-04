<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKelompokUmurController;
use App\Http\Controllers\DataKependudukanAgamaController;
use App\Http\Controllers\DataPekerjaanController;
use App\Http\Controllers\DataPersebaranPendudukController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonografiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PendidikanTerakhirController;
use App\Http\Controllers\PopulationDataController;
use App\Http\Controllers\VillageInstrumentController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/demografi', function () {
    return view('demografi');
});

Route::get('/kades', [VillageInstrumentController::class, 'showKades']);
Route::get('/profile', [VillageInstrumentController::class, 'showStrukturDesa']);
Route::get('/perangkat_desa', [VillageInstrumentController::class, 'showPerangkatDesa']);

Route::get('/visi_misi', function () {
    return view('visi_misi');
});

Route::get('/rpjm', function () {
    return view('rpjm');
});

Route::get('/rka', function () {
    return view('rka');
});

Route::get('/apb', function () {
    return view('apb');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/lembaga_detailBD', function () {
    return view('lembaga_detailBD');
});

Route::get('/lembaga_detailBPD', function () {
    return view('lembaga_detailBPD');
});

Route::get('/lembaga_detailKT', function () {
    return view('lembaga_detailKT');
});

Route::get('/lembaga_detailLD', function () {
    return view('lembaga_detailLD');
});

Route::get('/lembaga_detailLPMD', function () {
    return view('lembaga_detailLPMD');
});

Route::get('/lembaga_detailPKKe:\Profile-Desa\public\assets\documents', function () {
    return view('lembaga_detailPKKe:\Profile-Desa\public\assets\documents');
});

Route::get('/lembaga', function () {
    return view('lembaga');
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

Route::get('/monografi', [MonografiController::class, 'show'])->name('monografi');

Route::get('/rpjm', [DocumentController::class, 'rpjm']);
Route::get('/apb', [DocumentController::class, 'apb']);
Route::get('/rka', [DocumentController::class, 'rka']);
Route::get('/produkhukum', [DocumentController::class, 'produkHukum']);
Route::get('/transparansi', [DocumentController::class, 'transparansiAnggaran']);

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::view('/admin/transparansi', 'admin.transparansi')->name('transparansi');

Route::get('/admin/monografi', [MonografiController::class, 'index'])->name('admin.monografi');
Route::post('/data-persebaran', [DataPersebaranPendudukController::class, 'store'])->name('data-persebaran.store');
Route::get('/data-persebaran/{id}/edit', [DataPersebaranPendudukController::class, 'edit'])->name('data-persebaran.edit');
Route::put('/data-persebaran/{id}', [DataPersebaranPendudukController::class, 'update'])->name('data-persebaran.update');
Route::delete('/data-persebaran/{id}', [DataPersebaranPendudukController::class, 'destroy'])->name('data-persebaran.destroy');

Route::get('/data-populasi', [PopulationDataController::class, 'index'])->name('population.index');
Route::post('/data-populasi', [PopulationDataController::class, 'store'])->name('population.store');
Route::get('/data-populasi/{id}/edit', [PopulationDataController::class, 'edit'])->name('population.edit');
Route::put('/data-populasi/{id}', [PopulationDataController::class, 'update'])->name('population.update');
Route::delete('/data-populasi/{id}', [PopulationDataController::class, 'destroy'])->name('population.destroy');

Route::get('/data-agama', [DataKependudukanAgamaController::class, 'index'])->name('agama.index');
Route::post('/data-agama', [DataKependudukanAgamaController::class, 'store'])->name('agama.store');
Route::get('/data-agama/{id}/edit', [DataKependudukanAgamaController::class, 'edit'])->name('agama.edit');
Route::put('/data-agama/{id}', [DataKependudukanAgamaController::class, 'update'])->name('agama.update');
Route::delete('/data-agama/{id}', [DataKependudukanAgamaController::class, 'destroy'])->name('agama.destroy');

Route::get('/data-pendidikan', [PendidikanTerakhirController::class, 'index'])->name('pendidikan_terakhir.index');
Route::post('/data-pendidikan', [PendidikanTerakhirController::class, 'store'])->name('pendidikan_terakhir.store');
Route::get('/data-pendidikan/{id}/edit', [PendidikanTerakhirController::class, 'edit'])->name('pendidikan_terakhir.edit');
Route::put('/data-pendidikan/{id}', [PendidikanTerakhirController::class, 'update'])->name('pendidikan_terakhir.update');
Route::delete('/data-pendidikan/{id}', [PendidikanTerakhirController::class, 'destroy'])->name('pendidikan_terakhir.destroy');

Route::get('/data-pekerjaan', [DataPekerjaanController::class, 'index'])->name('data_pekerjaan.index');
Route::post('/data-pekerjaan', [DataPekerjaanController::class, 'store'])->name('data_pekerjaan.store');
Route::get('/data-pekerjaan/{id}/edit', [DataPekerjaanController::class, 'edit'])->name('data_pekerjaan.edit');
Route::put('/data-pekerjaan/{id}', [DataPekerjaanController::class, 'update'])->name('data_pekerjaan.update');
Route::delete('/data-pekerjaan/{id}', [DataPekerjaanController::class, 'destroy'])->name('data_pekerjaan.destroy');

Route::get('/data-kelompok-umur', [DataKelompokUmurController::class, 'index'])->name('data_kelompok_umur.index');
Route::post('/data-kelompok-umur', [DataKelompokUmurController::class, 'store'])->name('data_kelompok_umur.store');
Route::get('/data-kelompok-umur/{id}/edit', [DataKelompokUmurController::class, 'edit'])->name('data_kelompok_umur.edit');
Route::put('/data-kelompok-umur/{id}', [DataKelompokUmurController::class, 'update'])->name('data_kelompok_umur.update');
Route::delete('/data-kelompok-umur/{id}', [DataKelompokUmurController::class, 'destroy'])->name('data_kelompok_umur.destroy');

Route::prefix('berita')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');  // Menampilkan daftar berita
    Route::get('/create', [NewsController::class, 'create'])->name('news.create');  // Form tambah berita
    Route::post('/', [NewsController::class, 'store'])->name('news.store');  // Simpan berita baru
    Route::get('/{news}', [NewsController::class, 'show'])->name('news.show');  // Menampilkan detail berita
    Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');  // Form edit berita
    Route::put('/{news}', [NewsController::class, 'update'])->name('news.update');  // Update berita
    Route::delete('/{news}', [NewsController::class, 'destroy'])->name('news.destroy');  // Hapus berita
});

Route::prefix('agenda')->group(function () {
    Route::get('/', [AgendaController::class, 'showAll'])->name('agenda.showAll');  // Menampilkan daftar agenda
    Route::get('/create', [AgendaController::class, 'create'])->name('agenda.create');  // Form tambah agenda
    Route::post('/', [AgendaController::class, 'store'])->name('agenda.store');  // Simpan agenda baru
    Route::get('/{agenda}', [AgendaController::class, 'show'])->name('agenda.show');  // Menampilkan detail agenda
    Route::get('/{agenda}/edit', [AgendaController::class, 'edit'])->name('agenda.edit');  // Form edit agenda
    Route::put('/{agenda}', [AgendaController::class, 'update'])->name('agenda.update');  // Update agenda
    Route::delete('/{agenda}', [AgendaController::class, 'destroy'])->name('agenda.destroy');  // Hapus agenda
});
Route::get('/admin/agenda', [AgendaController::class, 'index'])->name('agenda');

Route::prefix('documents')->group(function () {
    Route::get('/', [DocumentController::class, 'index'])->name('documents.index');  // Menampilkan daftar dokumen
    Route::get('/create', [DocumentController::class, 'create'])->name('documents.create');  // Form tambah dokumen
    Route::post('/', [DocumentController::class, 'store'])->name('documents.store');  // Simpan dokumen baru
    Route::get('/{document}', [DocumentController::class, 'show'])->name('documents.show');  // Menampilkan detail dokumen
    Route::get('/{document}/edit', [DocumentController::class, 'edit'])->name('documents.edit');  // Form edit dokumen
    Route::put('/{document}', [DocumentController::class, 'update'])->name('documents.update');  // Update dokumen
    Route::delete('/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');  // Hapus dokumen
});
Route::get('/admin/pemerintahan', [DocumentController::class, 'index'])->name('index');
Route::get('/admin/produk-hukum', [DocumentController::class, 'produkHukum'])->name('produk-hukum');

Route::prefix('gallery')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});

Route::prefix('village-instruments')->group(function () {
    Route::get('/', [VillageInstrumentController::class, 'index'])->name('village-instruments.index');
    Route::get('/create', [VillageInstrumentController::class, 'create'])->name('village-instruments.create');
    Route::post('/', [VillageInstrumentController::class, 'store'])->name('village-instruments.store');
    Route::get('/{villageInstrument}', [VillageInstrumentController::class, 'show'])->name('village-instruments.show');
    Route::get('/{villageInstrument}/edit', [VillageInstrumentController::class, 'edit'])->name('village-instruments.edit');
    Route::put('/{villageInstrument}', [VillageInstrumentController::class, 'update'])->name('village-instruments.update');
    Route::delete('/{villageInstrument}', [VillageInstrumentController::class, 'destroy'])->name('village-instruments.destroy');
});
Route::get('/admin/kades', [VillageInstrumentController::class, 'getKades'])->name('getkades');
Route::get('/admin/perangkat-desa', [VillageInstrumentController::class, 'getPerangkatDesa'])->name('perangkat-desa');
Route::get('/admin/struktur', [VillageInstrumentController::class, 'getStrukturDesa'])->name('getStrukturDesa');
