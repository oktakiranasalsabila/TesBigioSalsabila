<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokalController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\JenkelController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\GuruBackendController;
use App\Http\Controllers\SiswaBackendController;
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
Route::get('/home', function () {
    return view('home');
});

Route::get('/backend', function () {
    return view('backend.index');
 })->middleware('auth');

Route::get('/siswa',[SiswaController::class, 'index'])->name('siswa');
Route::get('/jenkel',[JenkelController::class, 'index'])->name('jenkel');
Route::get('/prodi',[ProdiController::class, 'index'])->name('prodi');
Route::get('/nilai',[NilaiController::class, 'index'])->name('nilai');
Route::get('/mapel',[MapelController::class, 'index'])->name('mapel');
Route::get('/guru',[GuruController::class, 'index'])->name('guru');
Route::get('/lokal',[LokalController::class, 'index'])->name('lokal');
Route::get('/login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::resource('siswa-backend',SiswaBackendController::class);
Route::resource('guru-backend',GuruBackendController::class);
