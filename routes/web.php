<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataHistoriPelayananPesertaController;
use App\Http\Controllers\DataKunjunganController;
use App\Http\Controllers\Dokter;
use App\Http\Controllers\IcareController;
use App\Http\Controllers\JmlSep;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RujukanMultiController;
use App\Http\Controllers\RujukanSingleController;
use App\Http\Controllers\SepController;
use App\Http\Controllers\TempatTidurController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


route::get('/dashboard',[TempatTidurController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('contacts', ContactController::class);

    Route::get('peserta', [PesertaController::class,'index'])->name('peserta.index');
    Route::post('peserta/proses', [PesertaController::class,'proses'])->name('peserta.proses');
    
    Route::get('rujukan/multi', [RujukanMultiController::class,'index'])->name('rujukan.multi.index');
    Route::post('rujukan/multi/proses', [RujukanMultiController::class,'proses'])->name('rujukan.multi.proses');
    
    Route::get('rujukan/multi', [RujukanSingleController::class,'index'])->name('rujukan.multi.index');
    Route::post('rujukan/multi/proses', [RujukanSingleController::class,'proses'])->name('rujukan.multi.proses');
    
    Route::get('rujukan/single', [RujukanSingleController::class,'index'])->name('rujukan.single.index');
    Route::post('rujukan/single/proses', [RujukanSingleController::class,'proses'])->name('rujukan.single.proses');
    
    
    Route::get('jumlah/sep', [JmlSep::class,'index'])->name('jumlah.sep.index');
    Route::post('jumlah/sep', [JmlSep::class,'proses'])->name('jumlah.sep.proses');
    
    Route::get('sep', [SepController::class,'index'])->name('sep.index');
    Route::post('sep', [SepController::class,'proses'])->name('sep.proses');
    
    Route::get('data/kunjungan', [DataKunjunganController::class,'index'])->name('data.kunjungan.index');
    Route::post('data/kunjungan', [DataKunjunganController::class,'proses'])->name('data.kunjungan.proses');
    
    Route::get('data/pelayanan', [DataHistoriPelayananPesertaController::class,'index'])->name('data.pelayanan.index');
    Route::post('data/pelayanan', [DataHistoriPelayananPesertaController::class,'proses'])->name('data.pelayanan.proses');
    
    Route::get('dokter', [Dokter::class,'index'])->name('dokter.index');
    Route::post('dokter', [Dokter::class,'proses'])->name('dokter.proses');
    
    Route::get('icare', [IcareController::class,'index'])->name('icare.index');
    Route::post('icare', [IcareController::class,'proses'])->name('icare.proses');

    
    // route::resource('tt',TempatTidurController::class);

});

require __DIR__.'/auth.php';
