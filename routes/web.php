<?php

use Illuminate\Support\Facades\Route;

// Consolidated Controller Imports (Alphabetized for clarity)
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountingPeriodController;
use App\Http\Controllers\AksesController;
use App\Http\Controllers\AktivitasInteraktifController;
use App\Http\Controllers\CashBankController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalGuruController;
use App\Http\Controllers\JournalEntryController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LedgerController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\QuizSoalController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ServisController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UnitController;


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

    // --- Hotel/Tourism/Service Management Routes ---
    Route::resource('tamu',TamuController::class);
    Route::resource('layanan',LayananController::class);
    Route::resource('promo',PromoController::class);
    Route::resource('checkout',CheckoutController::class);
    Route::resource('checkin',CheckinController::class);
    Route::resource('servis',ServisController::class);
    Route::resource('kamar',KamarController::class);
    Route::resource('reservasi',ReservasiController::class);

    // --- Accounting/Financial Management Routes ---
    Route::resource('accounts', AccountController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('journals', JournalEntryController::class);
    Route::post('transaksi/reset', [JournalEntryController::class,'reset_transaksi'])->name('transaksi.reset');
    
    // Accounting Reports
    Route::get('laporan/jurnal-umum', [ReportController::class, 'jurnalUmum'])->name('laporan.jurnal-umum');
    Route::get('laporan/neraca-saldo', [ReportController::class, 'trialBalance'])->name('laporan.neraca-saldo');
    Route::get('laporan/laba-rugi', [ReportController::class, 'incomeStatement'])->name('laporan.laba-rugi');
    Route::get('neraca', [ReportController::class, 'balanceSheet'])->name('laporan.neraca');
    Route::get('perubahan-modal', [ReportController::class, 'equityChange'])->name('laporan.perubahan-modal');
    Route::get('arus-kas', [ReportController::class, 'cashFlow'])->name('laporan.arus-kas');

    // Adjustment & Closing Journals
    Route::get('/journals/penyesuaian/index', [JournalEntryController::class, 'indexPenyesuaian'])->name('journals.penyesuaian');
    Route::post('/journals/penyesuaian/store', [JournalEntryController::class, 'storePenyesuaian'])->name('journals.penyesuaian.store');
    Route::get('/journals/penutup/index', [JournalEntryController::class, 'indexPenutup'])->name('journals.penutup');
    Route::post('/journals/penutup/store', [JournalEntryController::class, 'storePenutup'])->name('journals.penutup.store');

    // General Ledger and Cash/Bank
    Route::get('/buku-besar', [LedgerController::class, 'index'])->name('ledger.index');
    Route::get('/kas-bank', [CashBankController::class, 'index'])->name('cashbank.index');
    Route::post('/kas-bank', [CashBankController::class, 'store'])->name('cashbank.store');

    // Accounting Period and Unit Management
    Route::resource('/periode-akuntansi', AccountingPeriodController::class)->except(['show']);
    Route::resource('units', UnitController::class);

    // --- General/Education/HR Management Routes ---
    Route::resource('siswa', SiswaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('jadwal-guru', JadwalGuruController::class);
    Route::resource('pegawai', PegawaiController::class);

    // E-Learning/Interactive Modules
    Route::resource('akses', AksesController::class);
    Route::resource('tour', TourController::class);
    Route::resource('quiz_soal', QuizSoalController::class);
    Route::resource('aktivitas_interaktif', AktivitasInteraktifController::class);
    Route::resource('forum', ForumController::class);
});