<?php

use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\{
  DashboardController,
  UserController,
  PengaduanController,
  PetugasController,
  MasyarakatController,
  LaporanController
};

Route::get('/', function () {
  return view('welcome');
});
//masyarakat
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::post('/store', [UserController::class, 'storePengaduan'])->name('pekat.store');
Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('pekat.laporan');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth', 'checkRole:admin'], function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

  Route::resource('/user', UserController::class);
  Route::get('/user/{id}/profile', [UserController::class, 'profile'])->name('user.profile');
  // Route::post('/profile/{id}', [UserController::class, 'update'])->name('profile.update');
  Route::resource('pengaduan', PengaduanController::class);
  Route::resource('/petugas', PetugasController::class);
    Route::resource('masyarakat', MasyarakatController::class);
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
});
