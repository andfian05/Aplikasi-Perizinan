<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailPerizinanController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\IzinMahasantriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** Routes Untuk Tampilan Informasi */
Route::get('/', function () {
    return view('welcome');
});

/** ADMINISTRATOR */
Route::middleware('auth:administrator')->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'dashboardAdmin'])->name('admin.dashboard');

    /** Update Password */
    Route::get('ubah-sandi/edit', [HomeController::class, 'editPassAdmin'])->name('admin.editPass');
    Route::put('ubah-sandi', [HomeController::class, 'updatePassAdmin'])->name('admin.updatePass');

    /** Data Manage-User */
    Route::resource('manage-user', UserController::class);
    Route::get('manage-user-pdf', [UserController::class, 'exportPDF'])->name('manage-user.pdf');
    
    /** Perizinan */
    Route::resource('perizinan', PerizinanController::class);
    Route::post('activate-perizinan/{perizinan}', [PerizinanController::class, 'activePerizinan'])->name('perizinan.active');

    /** Detail Perizinan */
    Route::resource('detail-perizinan', DetailPerizinanController::class);
    Route::get('detail-perizinan-pdf', [DetailPerizinanController::class, 'exportPDF'])->name('detail-perizinan.pdf');
    
    /** Data Approval */
    Route::resource('approval', ApproveController::class);
    Route::get('approval/approve/{approval}', [ApproveController::class, 'approveAcc'])->name('approval.approveAcc');
    Route::get('approval/non-approve/{approval}', [ApproveController::class, 'nonApproveAcc'])->name('approval.nonApproveAcc');
});

/** MAHASANTRI */
Route::middleware('auth:mahasantri')->prefix('mahasantri')->group(function () {
    Route::get('perizinan', [HomeController::class, 'dashboardMahasantri'])->name('mahasantri.perizinan');
    
    /** Update Password */
    Route::get('ubah-sandi/edit', [HomeController::class, 'editPassMahasantri'])->name('mahasantri.editPass');
    Route::put('ubah-sandi', [HomeController::class, 'updatePassMahasantri'])->name('mahasantri.updatePass');

    /** Keterangan Perizinan */
    Route::get('keterangan-izin', [IzinMahasantriController::class, 'create'])->name('mahasantri.createIzin');
    Route::post('keterangan-izin', [IzinMahasantriController::class, 'store'])->name('mahasantri.storeIzin');
    Route::get('keterangan-izin/berhasil', [IzinMahasantriController::class, 'success'])->name('mahasantri.izinSukses');
    Route::get('keterangan-izin/report/berhasil', [IzinMahasantriController::class, 'successArrival'])->name('mahasantri.reportSukses');
});

/** SECURITY */
Route::middleware('auth:security')->prefix('security')->group(function () {
    Route::get('pelaporan', [HomeController::class, 'dashboardSecurity'])->name('security.pelaporan');

    /** Update Password */
    Route::get('ubah-sandi/edit', [HomeController::class, 'editPassSecurity'])->name('security.editPass');
    Route::put('ubah-sandi', [HomeController::class, 'updatePassSecurity'])->name('security.updatePass');

    /** Report Data Pelaporan Perizinan */
    Route::get('pelaporan/{pelaporan}/report', [HomeController::class, 'report'])->name('security.reportPelaporan');
});

Route::get('/ubah-sandi-admin', function () {
    return view('admin.ubah-sandi-admin');
});


/** Data Manage-User */
Route::get('/data-user', function () {
    return view('admin.manage-user.data-user');
});

Route::get('/add-user', function () {
    return view('admin.manage-user.add-user');
});

Route::get('/detail-user', function () {
    return view('admin.manage-user.detail-user');
});

Route::get('/edit-user', function () {
    return view('admin.manage-user.edit-user');
});

Route::get('/ubah-sandi-admin', function () {
    return view('admin.ubah-sandi-admin');
});


/** Manage-Mahasantri */
Route::get('/data-mahasantri', function () {
    return view('admin.manage-mahasantri.data-mahasantri');
});

Route::get('/add-perizinan', function () {
    return view('admin.perizinan.add-perizinan');
});

Route::get('/detail-perizinan', function () {
    return view('admin.perizinan.detail-perizinan');
});

Route::get('/edit-perizinan', function () {
    return view('admin.perizinan.edit-perizinan');
});

Route::get('/ubah-sandi-admin', function () {
    return view('admin.ubah-sandi-admin');
});

Route::get('/sukseslapor', function () {
    return view('mahasantri.sukseslapor');
});




/** Perizinan */
Route::get('/data-perizinan', function () {
    return view('admin.perizinan.data-perizinan');
});

Route::get('/add-perizinan', function () {
    return view('admin.perizinan.add-perizinan');
});

Route::get('/detail-perizinan', function () {
    return view('admin.perizinan.detail-perizinan');
});

Route::get('/edit-perizinan', function () {
    return view('admin.perizinan.edit-perizinan');
});

Route::get('/ubah-sandi-admin', function () {
    return view('admin.ubah-sandi-admin');
});


/** Detail Perizinan */
Route::get('/data-info-izin', function () {
    return view('admin.detail-perizinan.data-info-izin');
});

Route::get('/detail-info-izin', function () {
    return view('admin.detail-perizinan.detail-info-izin');
});

Route::get('/ubah-sandi-admin', function () {
    return view('admin.ubah-sandi-admin');
});


/** Aprovel */
Route::get('/data-aprovel', function () {
    return view('admin.aprovel.data-aprovel');
});

Route::get('/ubah-sandi-admin', function () {
    return view('admin.ubah-sandi-admin');
});


/** Security */
Route::get('/data-lapor', function () {
    return view('satpam.security.data-lapor');
});

Route::get('/ubah-sandi', function () {
    return view('satpam.security.ubah-sandi');
});




/** Informasi Izin */
Route::get('/perizinan', function () {
    return view('mahasantri.perizinan-mahasantri');
});

Route::get('/edit-keterangan', function () {
    return view('mahasantri.edit-keterangan');
});

Route::get('/berhasil', function () {
    return view('mahasantri.notifsucces');
});

Route::get('/ubah-sandi-mahasantri', function () {
    return view('mahasantri.ubah-sandi-mahasantri');
});


/** Auth */
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [AuthController::class, 'login'])->name('postlogin');
Route::post('/', [AuthController::class, 'logout'])->name('logout');
