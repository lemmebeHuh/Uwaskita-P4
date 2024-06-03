<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Models\Nilai;
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
Route::middleware(['guest'])->group(function (){
    Route::get('/login', [SesiController::class,'index'])->name('login');
    Route::post('/login', [SesiController::class,'login']);
    Route::get('/register' ,[SesiController::class,'register'])->name('register'); 
    Route::post('/register' ,[SesiController::class,'registerStore'])->name('registerPost'); 
    Route::get('/', [SesiController::class, 'homee']);
    Route::resource('mahasiswas', SesiController::class);
    
});

Route::get('/invoice', [MahasiswaController::class,'generateInvoice']);
Route::get('/home', function(){
    return redirect('/dashboard');
});

Route::get('/logout', [SesiController::class, 'logout']);
Route::get('/dashboard', [AdminController::class, 'index']);

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard/mahasiswa', [AdminController::class, 'mahasiswa'])->middleware('userAkses:mahasiswa');
    Route::get('/profile/{id}', [AdminController::class,'profile'])->middleware('userAkses:mahasiswa');
    Route::get('/nilais', [NilaiController::class, 'index'])->name('nilais.index');
    
    Route::get('/dashboard/dosen', [AdminController::class, 'dosen'])->middleware('userAkses:dosen');
    Route::get('/profile/{id}', [AdminController::class,'profile'])->middleware('userAkses:dosen');
    Route::resource('mahasiswas', MahasiswaController::class)->middleware('userAkses:dosen');
    Route::resource('dosens', DosenController::class)->middleware('userAkses:dosen');
    Route::resource('mata_kuliahs', MataKuliahController::class)->middleware('userAkses:dosen');
    
    
    Route::get('/dashboard/operator', [AdminController::class, 'operator'])->middleware('userAkses:operator');
    Route::get('/profile/{id}', [AdminController::class,'profile'])->middleware('userAkses:operator');
    Route::resource('mahasiswas', MahasiswaController::class)->middleware('userAkses:operator');
    Route::resource('dosens', DosenController::class)->middleware('userAkses:operator');
    Route::resource('mata_kuliahs', MataKuliahController::class)->middleware('userAkses:operator');
    Route::resource('nilais', NilaiController::class)->middleware('userAkses:operator');
    Route::get('/nilais/print', 'NilaiController@print')->name('nilais.print');
    Route::resource('tahun_akademiks', TahunAkademikController::class)->middleware('userAkses:operator');
});