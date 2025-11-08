<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ServisController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LayananController;

use App\Http\Controllers\AccountingPeriodController;
use App\Http\Controllers\CashBankController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalGuruController;
use App\Http\Controllers\PromoController;

use App\Http\Controllers\LedgerController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UnitController;

use App\Http\Controllers\AksesController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\QuizSoalController;
use App\Http\Controllers\AktivitasInteraktifController;
use App\Http\Controllers\ForumController;

Route::get('/', function () {
    return view('frontend');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('tamu',TamuController::class);
    Route::resource('layanan',LayananController::class);
    Route::resource('promo',PromoController::class);
    Route::resource('checkout',CheckoutController::class);
    Route::resource('checkin',CheckinController::class);
    Route::resource('servis',ServisController::class);
    Route::resource('kamar',KamarController::class);
    Route::resource('reservasi',ReservasiController::class);
    Route::get('laporan/jurnal-umum', [ReportController::class, 'jurnalUmum'])->name('laporan.jurnal-umum');
    Route::get('laporan/neraca-saldo', [ReportController::class, 'trialBalance'])->name('laporan.neraca-saldo');
    Route::get('laporan/laba-rugi', [ReportController::class, 'incomeStatement'])->name('laporan.laba-rugi');
    Route::get('neraca-saldo', [ReportController::class, 'trialBalance'])->name('laporan.neraca-saldo');
    Route::get('laba-rugi', [ReportController::class, 'incomeStatement'])->name('laporan.laba-rugi');
    Route::get('neraca', [ReportController::class, 'balanceSheet'])->name('laporan.neraca');
    Route::get('perubahan-modal', [ReportController::class, 'equityChange'])->name('laporan.perubahan-modal');
    Route::get('arus-kas', [ReportController::class, 'cashFlow'])->name('laporan.arus-kas');

    Route::get('/buku-besar', [LedgerController::class, 'index'])->name('ledger.index');

    Route::get('/kas-bank', [CashBankController::class, 'index'])->name('cashbank.index');
    Route::post('/kas-bank', [CashBankController::class, 'store'])->name('cashbank.store');

    Route::resource('/periode-akuntansi', AccountingPeriodController::class)->except(['show']);
    Route::resource('units', UnitController::class);
    
    Route::resource('siswa', SiswaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('jadwal-guru', JadwalGuruController::class);
    Route::resource('pegawai', PegawaiController::class);


    
    Route::resource('akses', AksesController::class);
    Route::resource('tour', TourController::class);
    Route::resource('quiz_soal', QuizSoalController::class);
    Route::resource('aktivitas_interaktif', AktivitasInteraktifController::class);


    Route::resource('forum', ForumController::class);









    

});
