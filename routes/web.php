<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => ['role:admin', 'auth']], function () {
        Route::get('/dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
    });
});

Route::group(['prefix' => 'kepala', 'as' => 'kepala.'], function () {
    Route::group(['middleware' => ['role:kepala', 'auth']], function () {
        Route::get('/dashboard',[\App\Http\Controllers\kepala\DashboardController::class,'index'])->name('dashboard_kepala');
        Route::get('/donatur',[\App\Http\Controllers\kepala\DonaturController::class,'index'])->name('donatur');
        Route::get('/mandor',[\App\Http\Controllers\kepala\MandorController::class,'index'])->name('mandor');
        Route::get('/tugas',[\App\Http\Controllers\kepala\TugasController::class,'index'])->name('tugas');
        Route::get('/role_akses',[\App\Http\Controllers\kepala\RoleAksesController::class,'index'])->name('role_akses');
        Route::get('/profile',[\App\Http\Controllers\kepala\ProfileController::class,'index'])->name('profile');
    });
}); 

Route::group(['prefix' => 'mandor', 'as' => 'mandor.'], function () {
    Route::group(['middleware' => ['role:mandor', 'auth']], function () {
        Route::get('/dashboard',[\App\Http\Controllers\Mandor\DashboardController::class,'index'])->name('dashboard');
        Route::get('/tugas',[\App\Http\Controllers\Mandor\TugasController::class,'index'])->name('tugas');
        Route::get('/riwayat_tugas',[\App\Http\Controllers\Mandor\RiwayatTugasController::class,'index'])->name('riwayat_tugas');
        Route::get('/profile',[\App\Http\Controllers\Mandor\ProfileController::class,'index'])->name('profile');
    });
});





// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
