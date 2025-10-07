<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/home', function () {
    return redirect('/pegawai');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/pegawai/tambah', [PegawaiController::class, 'create']);
    Route::post('/pegawai', [PegawaiController::class, 'store']);
    Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);
    Route::put('/pegawai/{id}', [PegawaiController::class, 'update']);
    Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']);

    Route::get('/pegawai/history', [PegawaiController::class, 'history']);
    Route::put('/pegawai/{id}/restore', [PegawaiController::class, 'restore']);
    Route::delete('/pegawai/{id}/force-delete', [PegawaiController::class, 'forceDelete']);
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

});