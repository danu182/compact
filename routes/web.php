<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RujukanMultiController;
use App\Http\Controllers\RujukanSingleController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('contacts', ContactController::class);

    Route::get('peserta', [PesertaController::class,'index'])->name('peserta.index');
    Route::post('peserta/proses', [PesertaController::class,'proses'])->name('peserta.proses');
    
    Route::get('rujukan/multi', [RujukanMultiController::class,'index'])->name('rujukan.multi.index');
    Route::post('rujukan/multi/proses', [RujukanMultiController::class,'proses'])->name('rujukan.multi.proses');
    
    Route::get('rujukan/single', [RujukanSingleController::class,'index'])->name('rujukan.multi.index');
    Route::post('rujukan/single/proses', [RujukanSingleController::class,'proses'])->name('rujukan.multi.proses');
    

});

require __DIR__.'/auth.php';
