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
        Route::get('/kepala',[\App\Http\Controllers\Admin\KepalaController::class,'index'])->name('kepala');
        Route::get('/mandor',[\App\Http\Controllers\Admin\MandorController::class,'index'])->name('mandor');
        Route::get('/role_akses',[\App\Http\Controllers\Admin\RoleAksesController::class,'index'])->name('role_akses');
        Route::get('/destroy/{id}',[\App\Http\Controllers\Admin\KepalaController::class,'destroy'])->name('destroy');
        Route::get('/tambah_data',[\App\Http\Controllers\Admin\KepalaController::class,'create'])->name('tambah_data');
        Route::post('/tambah_data_store',[\App\Http\Controllers\Admin\KepalaController::class,'store'])->name('tambah_data_store');
        Route::get('/edit_kepala/{id}',[\App\Http\Controllers\Admin\KepalaController::class,'edit'])->name('edit_kepala');
        Route::post('/edit_kepala_update',[\App\Http\Controllers\Admin\KepalaController::class,'update'])->name('kepala_update');
        Route::get('/tambah_mandor',[\App\Http\Controllers\Admin\MandorController::class,'create'])->name('tambah_mandor');
        Route::post('/tambah_mandor_store',[\App\Http\Controllers\Admin\MandorController::class,'store'])->name('tambah_mandor_store');
        Route::post('/delete_mandor/{id}',[\App\Http\Controllers\Admin\MandorController::class,'destroy'])->name('delete_mandor');
        Route::get('/edit_mandor/{id}',[\App\Http\Controllers\Admin\MandorController::class,'edit'])->name('edit_mandor');
        Route::post('/update_mandor',[\App\Http\Controllers\Admin\MandorController::class,'update'])->name('update_mandor');
        Route::get('/profile',[\App\Http\Controllers\Admin\ProfileController::class,'index'])->name('profile');
        Route::post('/update_profile',[\App\Http\Controllers\Admin\ProfileController::class,'update'])->name('update_profile');
    });
});

Route::group(['prefix' => 'kepala', 'as' => 'kepala.'], function () {
    Route::group(['middleware' => ['role:kepala', 'auth']], function () {
        Route::get('/dashboard',[\App\Http\Controllers\kepala\DashboardController::class,'index'])->name('dashboard_kepala');
        Route::get('/donatur',[\App\Http\Controllers\kepala\DonaturController::class,'index'])->name('donatur');
        Route::get('/mandor',[\App\Http\Controllers\kepala\MandorController::class,'index'])->name('mandor');
        Route::get('/tugas',[\App\Http\Controllers\kepala\TugasController::class,'index'])->name('tugas');
        Route::post('/kirim_tugas_mandor',[\App\Http\Controllers\kepala\TugasController::class,'create'])->name('send_tugas');
        Route::get('/kirim_tugas',[\App\Http\Controllers\kepala\TugasController::class,'kirim_tugas'])->name('kirim_tugas');
        Route::get('/role_akses',[\App\Http\Controllers\kepala\RoleAksesController::class,'index'])->name('role_akses');
        Route::get('/profile',[\App\Http\Controllers\kepala\ProfileController::class,'index'])->name('profile');
        Route::post('update_foto',[\App\Http\Controllers\kepala\ProfileController::class,'update'])->name('update_foto');
    });
});

Route::group(['prefix' => 'mandor', 'as' => 'mandor.'], function () {
    Route::group(['middleware' => ['role:mandor', 'auth']], function () {
        Route::get('/dashboard',[\App\Http\Controllers\mandor\DashboardController::class,'index'])->name('dashboard');
        Route::get('/tugas',[\App\Http\Controllers\mandor\TugasController::class,'index'])->name('tugas');
        Route::get('/riwayat_tugas',[\App\Http\Controllers\mandor\RiwayatTugasController::class,'index'])->name('riwayat_tugas');
        Route::get('/profile',[\App\Http\Controllers\mandor\ProfileController::class,'index'])->name('profile');
        Route::get('upload_bukti',[\App\Http\Controllers\mandor\TugasController::class,'upload'])->name('upload_bukti');
        Route::post('update_profile',[\App\Http\Controllers\mandor\ProfileController::class,'update'])->name('update_profile');
    });
});





// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
