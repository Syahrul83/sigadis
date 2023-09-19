<?php

use App\Http\Livewire\Students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterawalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })
//     ->middleware(['auth'])
//     ->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function () {
    Route::resource('master', MasterController::class)->only(['index', 'show']);

    Route::resource('awal', AwalController::class);
    Route::resource('masterawal', MasterawalController::class);
    Route::resource('user', UserController::class);
    Route::get('awal-copy/{id}', [AwalController::class, 'copy'])->name(
        'awal.copy'
    );
    Route::post('awal-copy', [AwalController::class, 'save'])->name(
        'save.copy'
    );
    Route::get('monitor1', [MonitorController::class, 'index']);
    Route::get('monitor2', [MonitorController::class, 'index']);
    Route::get('monitor3', [MonitorController::class, 'index']);
    Route::get('lap_analisa', [MonitorController::class, 'lap_analisa'])->name(
        'lap.analisa'
    );

    Route::get('monitor4', [MonitorController::class, 'index'])->name(
        'monitor.index'
    );

    Route::get('ma_aktif/{id}', [MasterawalController::class, 'aktif'])->name(
        'masterawal.aktif'
    );
    Route::get('ma_naktif/{id}', [MasterawalController::class, 'naktif'])->name(
        'masterawal.naktif'
    );

    // Route::get('/students', Students::class);
    Route::post('/upload-content', [MasterController::class, 'store'])->name(
        'store.master'
    );

    Route::get('/downloadFile', [MasterController::class, 'downloadFile']);

    Route::get('/pdf1', [PdfController::class, 'AnalisaTrafo']);
    Route::get('/pdf2', [PdfController::class, 'AnalisaTrafo']);
    Route::get('/pdf3', [PdfController::class, 'AnalisaTrafo']);
    Route::get('/pdf4', [PdfController::class, 'AnalisaTrafo']);
    Route::get('/pdf5', [PdfController::class, 'AnalisaTrafo']);
    Route::get('/pdf6', [PdfController::class, 'AnalisaTrafo']);
    Route::get('/data-trafo', [PdfController::class, 'AnalisaTrafo']);
    Route::get('/grafik', [PdfController::class, 'AnalisaTrafo']);
});