<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('layout.dashboard');
});

Route::get('/', function() {
    return view('admin.login');
});

Route::get('/login', function() {
    return view('admin.login');
});

Route::get('/mapel', function() {
    return view('layout.mapel');
});

Route::get('/selesai', function() {
    return view('DaftarTugas.selesai');
});
Route::get('/gorong', function() {
    return view('DaftarTugas.belum');
});

Route::resource('/profile', ProfileController::class);