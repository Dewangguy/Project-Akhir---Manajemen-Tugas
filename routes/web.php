<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::middleware(['auth'])->group( function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // Route::get('/mapel', function(){return view('layout.mapel');});
    Route::get('/kelas/{id}', [DashboardController::class, 'show'])->name('kelas.show');
    Route::resource('/assignment', TugasController::class);
    Route::get('/classwork/{id}', [TugasController::class, 'classwork'])->name('class.work');
    Route::get('/nilai', function(){return view('layout.nilai');});
    Route::post('/tambahkelas', [DashboardController::class, 'store'])->name('kelas.store');
    Route::post('/kelas/{id}/delete', [DashboardController::class, 'delete'])->name('kelas.delete');
    Route::post('/profil/{id}/update', [DashboardController::class, 'editprofil'])->name('profile.update');
    Route::post('/pass/update', [DashboardController::class, 'ChangePass'])->name('pass.update');
    Route::post('/assignment/{id}', [TugasController::class, 'class_assignment'])->name('assignment_class_store');
    Route::post('/joinkelas', [DashboardController::class, 'joinkelas'])->name('kelas.join');
    Route::post('/submitlink', [TugasController::class, 'kirimtugas'])->name('kirim.tugas');

});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
