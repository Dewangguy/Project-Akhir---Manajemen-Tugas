<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;
use App\Models\Kelas;

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


Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/mapel', []);
Route::get('/assignment', function(){return view('layout.assignment', [
    'kelas' => Kelas::all()
]);});
Route::post('/assignment', [TugasController::class, 'store_assignment']);
Route::get('/classwork', function(){return view('layout.classwork');});
Route::get('/nilai', function(){return view('layout.nilai');});
Route::post('/tambahkelas', [DashboardController::class, 'store'])->name('kelas.store');
Route::post('/kelas/{id}/delete', [DashboardController::class, 'delete'])->name('kelas.delete');
Route::post('/profil/{id}/update', [DashboardController::class, 'editprofil'])->name('profile.update');
Route::post('/pass/update', [DashboardController::class, 'ChangePass'])->name('pass.update');