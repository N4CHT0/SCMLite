<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\JadwalPengirimanController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\TrukController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pdf', [ExportController::class, 'exportPDF'])->name('export.pdf');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/add', [BarangController::class, 'addView'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::get('/barang/delete/{id}', [BarangController::class, 'destroy']);

Route::get('/kategori', [KategoriBarangController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriBarangController::class, 'addView'])->name('kategori.create');
Route::post('/kategori', [KategoriBarangController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriBarangController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [KategoriBarangController::class, 'update'])->name('kategori.update');
Route::get('/kategori/delete/{id}', [KategoriBarangController::class, 'destroy']);

Route::get('/gudang', [GudangController::class, 'index'])->name('gudang.index');
Route::get('/gudang/create', [GudangController::class, 'addView'])->name('gudang.create');
Route::post('/gudang', [GudangController::class, 'store']);
Route::get('/gudang/edit/{id}', [GudangController::class, 'edit'])->name('gudang.edit');
Route::put('/gudang/update/{id}', [GudangController::class, 'update'])->name('gudang.update');
Route::get('/gudang/delete/{id}', [GudangController::class, 'destroy']);

Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
Route::get('/stok/create', [StokController::class, 'addView'])->name('stok.create');
Route::post('/stok', [StokController::class, 'store']);
Route::get('/stok/edit/{id}', [StokController::class, 'edit'])->name('stok.edit');
Route::put('/stok/update/{id}', [StokController::class, 'update'])->name('stok.update');
Route::get('/stok/delete/{id}', [StokController::class, 'destroy']);

Route::get('/outlet', [OutletController::class, 'index'])->name('outlet.index');
Route::get('/outlet/create', [OutletController::class, 'addView'])->name('outlet.create');
Route::post('/outlet', [OutletController::class, 'store']);
Route::get('/outlet/edit/{id}', [OutletController::class, 'edit'])->name('outlet.edit');
Route::put('/outlet/update/{id}', [OutletController::class, 'update'])->name('outlet.update');
Route::get('/outlet/delete/{id}', [OutletController::class, 'destroy']);

Route::get('/rute', [RuteController::class, 'index'])->name('rute.index');
Route::get('/rute/create', [RuteController::class, 'addView'])->name('rute.create');
Route::post('/rute', [RuteController::class, 'store']);
Route::get('/rute/edit/{id}', [RuteController::class, 'edit'])->name('rute.edit');
Route::put('/rute/update/{id}', [RuteController::class, 'update'])->name('rute.update');
Route::get('/rute/delete/{id}', [RuteController::class, 'destroy']);

Route::get('/truk', [TrukController::class, 'index'])->name('truk.index');
Route::get('/truk/create', [TrukController::class, 'addView'])->name('truk.create');
Route::post('/truk', [TrukController::class, 'store']);
Route::get('/truk/edit/{id}', [TrukController::class, 'edit'])->name('truk.edit');
Route::put('/truk/update/{id}', [TrukController::class, 'update'])->name('truk.update');
Route::get('/truk/delete/{id}', [TrukController::class, 'destroy']);

Route::get('/supir', [SupirController::class, 'index'])->name('supir.index');
Route::get('/supir/create', [SupirController::class, 'addView'])->name('supir.create');
Route::post('/supir', [SupirController::class, 'store']);
Route::get('/supir/edit/{id}', [SupirController::class, 'edit'])->name('supir.edit');
Route::put('/supir/update/{id}', [SupirController::class, 'update'])->name('supir.update');
Route::get('/supir/delete/{id}', [SupirController::class, 'destroy']);

Route::get('/pengiriman', 'PengirimanController@index')->name('pengiriman.index')->middleware(['auth', 'role:pengiriman']);
Route::get('/pengiriman/create', [PengirimanController::class, 'addView'])->name('pengiriman.create');
Route::post('/pengiriman', [PengirimanController::class, 'store']);
Route::get('/pengiriman/edit/{id}', [PengirimanController::class, 'edit'])->name('pengiriman.edit');
Route::put('/pengiriman/update/{id}', [PengirimanController::class, 'update'])->name('pengiriman.update');
Route::get('/pengiriman/delete/{id}', [PengirimanController::class, 'destroy']);

Route::get('/jadwal_pengiriman', [JadwalPengirimanController::class, 'index'])->name('jadwal_pengiriman.index');
Route::get('/jadwal_pengiriman/create', [JadwalPengirimanController::class, 'addView'])->name('jadwal_pengiriman.create');
Route::post('/jadwal_pengiriman', [JadwalPengirimanController::class, 'store']);
Route::get('/jadwal_pengiriman/edit/{id}', [JadwalPengirimanController::class, 'edit'])->name('jadwal_pengiriman.edit');
Route::put('/jadwal_pengiriman/update/{id}', [JadwalPengirimanController::class, 'update'])->name('jadwal_pengiriman.update');
Route::get('/jadwal_pengiriman/delete/{id}', [JadwalPengirimanController::class, 'destroy']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// tambahkan middleware role pada route
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
});

Route::middleware(['auth', 'role:gudang'])->prefix('gudang')->group(function () {
    Route::get('/', [App\Http\Controllers\GudangController::class, 'index'])->name('gudang.home');
});

Route::middleware(['auth', 'role:pengiriman'])->prefix('pengiriman')->group(function () {
    Route::get('/', [App\Http\Controllers\PengirimanController::class, 'index'])->name('pengiriman.home');
});
Route::get('/admin', function () {
    return view('admin.home');
})->middleware(['auth', 'role:admin']);

Route::get('/gudang', function () {
    return view('gudang.home');
})->middleware(['auth', 'role:gudang']);

Route::get('/pengiriman/home-page', function () {
    return view('pengiriman.home');
})->middleware(['auth', 'role:pengiriman']);

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
