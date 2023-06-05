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
use App\Http\Controllers\UserController;
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

// ROUTE UNTUK LANDING-PAGE

Route::get('/', function () {
    return view('welcome');
});

// ROUTE UNTUK APLIKASI PERGUDANGAN

Route::get('/barang-pdf', [ExportController::class, 'barangPDF'])->name('barang.pdf');
Route::get('/pengiriman-pdf', [ExportController::class, 'pengrimanPDF'])->name('pengiriman.pdf');
Route::get('/kategori-barang-pdf', [ExportController::class, 'kategoriPDF'])->name('kategori.pdf');
Route::get('/jadwal-pdf', [ExportController::class, 'jadwalPDF'])->name('jadwal.pdf');
Route::get('/gudang-pdf', [ExportController::class, 'gudangPDF'])->name('gudang.pdf');
Route::get('/stok-pdf', [ExportController::class, 'stokPDF'])->name('stok.pdf');
Route::get('/truk-pdf', [ExportController::class, 'trukPDF'])->name('truk.pdf');
Route::get('/supir-pdf', [ExportController::class, 'supirPDF'])->name('supir.pdf');
Route::get('/rute-pdf', [ExportController::class, 'rutePDF'])->name('rute.pdf');
Route::get('/user-pdf', [ExportController::class, 'userPDF'])->name('user.pdf');
Route::get('/outlet-pdf', [ExportController::class, 'outletPDF'])->name('outlet.pdf');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index')->middleware(['auth', 'role:gudang,admin']);
Route::get('/barang/add', [BarangController::class, 'addView'])->name('barang.create')->middleware(['auth', 'role:gudang,admin']);
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store')->middleware(['auth', 'role:gudang,admin']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit')->middleware(['auth', 'role:gudang,admin']);
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update')->middleware(['auth', 'role:gudang,admin']);
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy')->middleware(['auth', 'role:gudang,admin']);
Route::get('/barang/tampil_hapus', [BarangController::class, 'tampil_hapus'])->name('barang.deleted')->middleware(['auth', 'role:gudang,admin']);
Route::get('/barang/restore/{id}', [BarangController::class, 'restore'])->name('barang.restore')->middleware(['auth', 'role:gudang,admin']);

Route::get('/kategori', [KategoriBarangController::class, 'index'])->name('kategori.index')->middleware(['auth', 'role:gudang,admin']);
Route::get('/kategori/add', [KategoriBarangController::class, 'addView'])->name('kategori.create')->middleware(['auth', 'role:gudang,admin']);
Route::post('/kategori', [KategoriBarangController::class, 'store'])->name('kategori.store')->middleware(['auth', 'role:gudang,admin']);
Route::get('/kategori/edit/{id}', [KategoriBarangController::class, 'edit'])->name('kategori.edit')->middleware(['auth', 'role:gudang,admin']);
Route::put('/kategori/update/{id}', [KategoriBarangController::class, 'update'])->name('kategori.update')->middleware(['auth', 'role:gudang,admin']);
Route::get('/kategori/delete/{id}', [KategoriBarangController::class, 'destroy'])->name('kategori.destroy')->middleware(['auth', 'role:gudang,admin']);

Route::get('/gudang/index', [GudangController::class, 'index'])->name('gudang.index')->middleware(['auth', 'role:gudang,admin']);
Route::get('/gudang/create', [GudangController::class, 'addView'])->name('gudang.create')->middleware(['auth', 'role:gudang,admin']);
Route::post('/gudang', [GudangController::class, 'store'])->name('gudang.store')->middleware(['auth', 'role:gudang,admin']);
Route::get('/gudang/edit/{id}', [GudangController::class, 'edit'])->name('gudang.edit')->middleware(['auth', 'role:gudang,admin']);
Route::put('/gudang/update/{id}', [GudangController::class, 'update'])->name('gudang.update')->middleware(['auth', 'role:gudang,admin']);
Route::delete('/gudang/delete/{id}', [GudangController::class, 'destroy'])->name('gudang.destroy')->middleware(['auth', 'role:gudang,admin']);

Route::get('/stok', [StokController::class, 'index'])->name('stok.index')->middleware(['auth', 'role:gudang,admin']);
Route::get('/stok/create', [StokController::class, 'addView'])->name('stok.create')->middleware(['auth', 'role:gudang,admin']);
Route::post('/stok', [StokController::class, 'store'])->name('stok.store')->middleware(['auth', 'role:gudang,admin']);
Route::get('/stok/edit/{id}', [StokController::class, 'edit'])->name('stok.edit')->middleware(['auth', 'role:gudang,admin']);
Route::put('/stok/update/{id}', [StokController::class, 'update'])->name('stok.update')->middleware(['auth', 'role:gudang,admin']);
Route::delete('/stok/delete/{id}', [StokController::class, 'destroy'])->name('stok.destroy')->middleware(['auth', 'role:gudang,admin']);

// ROUTE UNTUK APLIKASI PENGIRIMAN

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

Route::get('/pengiriman/index', [PengirimanController::class, 'index'])->name('pengiriman.index')->middleware(['auth', 'role:pengiriman,admin']);
Route::get('/pengiriman/create', [PengirimanController::class, 'addView'])->name('pengiriman.create');
Route::post('/pengiriman/index', [PengirimanController::class, 'store'])->name('pengiriman.store')->middleware(['auth', 'role:pengiriman,admin']);
Route::get('/pengiriman/edit/{id}', [PengirimanController::class, 'edit'])->name('pengiriman.edit');
Route::put('/pengiriman/update/{id}', [PengirimanController::class, 'update'])->name('pengiriman.update');
Route::get('/pengiriman/delete/{id}', [PengirimanController::class, 'destroy']);

Route::get('/jadwal_pengiriman', [JadwalPengirimanController::class, 'index'])->name('jadwal_pengiriman.index');
Route::get('/jadwal_pengiriman/create', [JadwalPengirimanController::class, 'addView'])->name('jadwal_pengiriman.create');
Route::post('/jadwal_pengiriman', [JadwalPengirimanController::class, 'store']);
Route::get('/jadwal_pengiriman/edit/{id}', [JadwalPengirimanController::class, 'edit'])->name('jadwal_pengiriman.edit');
Route::put('/jadwal_pengiriman/update/{id}', [JadwalPengirimanController::class, 'update'])->name('jadwal_pengiriman.update');
Route::get('/jadwal_pengiriman/delete/{id}', [JadwalPengirimanController::class, 'destroy']);

// ROUTE UNTUK HAK AKSES ADMINISTRATOR

Route::get('/user_system', [UserController::class, 'index'])->name('admin.index')->middleware(['auth', 'role:admin']);
Route::get('/user_system/create', [UserController::class, 'addView'])->name('admin.create')->middleware(['auth', 'role:admin']);
Route::post('/user_system', [UserController::class, 'store'])->name('admin.store')->middleware(['auth', 'role:admin']);
Route::get('/user_system/edit/{id}', [UserController::class, 'edit'])->name('admin.edit')->middleware(['auth', 'role:admin']);
Route::put('/user_system/update/{id}', [UserController::class, 'update'])->name('admin.update')->middleware(['auth', 'role:admin']);
Route::get('/user_system/delete/{id}', [UserController::class, 'destroy']);

// ROUTE FOR AUTHENTICATE

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
});
Route::middleware(['auth', 'role:gudang'])->prefix('gudang')->group(function () {
    Route::get('/', [App\Http\Controllers\GudangController::class, 'index'])->name('gudang.home');
});
Route::middleware(['auth', 'role:pengiriman'])->prefix('pengiriman')->group(function () {
    Route::get('/', [App\Http\Controllers\PengirimanController::class, 'index'])->name('pengiriman.home');
});

// ROUTE UNTUK DASHBOARD HALAMAN MASING MASING ROLE

Route::get('/admin', function () {
    return view('admin.home');
})->middleware(['auth', 'role:admin']);

Route::get('/gudang/home-page', function () {
    return view('gudang.home');
})->middleware(['auth', 'role:gudang']);

Route::get('/pengiriman/home-page', function () {
    return view('pengiriman.home');
})->middleware(['auth', 'role:pengiriman']);

//ROUTE UNTUK LOG-OUT

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
