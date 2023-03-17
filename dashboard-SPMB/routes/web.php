<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LulusController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\WebController;
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

Route::group(['domain' => ''], function() {
    Route::redirect('', 'dashboard', 301);
    Route::get('auth',[AuthController::class, 'index'])->name('auth.index');
    Route::prefix('auth')->name('auth.')->group(function(){
        Route::post('login',[AuthController::class, 'do_login'])->name('login');
        Route::get('logout',[AuthController::class, 'logout'])->name('logout');
    });
    Route::get('pendaftar',[WebController::class, 'pendaftar'])->name('pendaftar');
    Route::get('lulus',[WebController::class, 'lulus'])->name('lulus');
    Route::get('perbandingan',[WebController::class, 'perbandingan'])->name('perbandingan');
    Route::get('ulang',[WebController::class, 'ulang'])->name('ulang');
    Route::get('dashboard',[WebController::class, 'dashboard'])->name('dashboard');
    Route::get('usm3',[WebController::class, 'usm3'])->name('usm3');
    Route::get('lulus-pmdk',[LulusController::class, 'pmdk'])->name('lulus.pmdk');
    Route::get('lulus-usm1',[LulusController::class, 'usm1'])->name('lulus.usm1');
    Route::get('lulus-usm2',[LulusController::class, 'usm2'])->name('lulus.usm2');
    Route::get('lulus-usm3',[LulusController::class, 'usm3'])->name('lulus.usm3');
    Route::get('lulus-all',[LulusController::class, 'all'])->name('lulus.all');
    
    Route::get('pendaftar-pmdk',[PendaftarController::class, 'pmdk'])->name('pendaftar.pmdk');
    Route::get('pendaftar-usm1',[PendaftarController::class, 'usm1'])->name('pendaftar.usm1');
    Route::get('pendaftar-usm2',[PendaftarController::class, 'usm2'])->name('pendaftar.usm2');
    Route::get('pendaftar-usm3',[PendaftarController::class, 'usm3'])->name('pendaftar.usm3');
    Route::get('pendaftar-all',[PendaftarController::class, 'all'])->name('pendaftar.all');
});

