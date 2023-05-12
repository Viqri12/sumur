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
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
    });
});

Route::group(['prefix' => 'kepala', 'as' => 'kepala.'], function () {
    Route::group(['middleware' => ['role:kepala', 'auth']], function () {
        Route::get('/dashboard',[App\Http\Controllers\Kepala\DashboardKepala::class,'index'])->name('dashboard_kepala');
        Route::get('/donatur',[App\Http\Controllers\Kepala\DonaturController::class,'index'])->name('donatur');
    });
});

Route::group(['prefix' => 'mandor', 'as' => 'mandor.'], function () {
    Route::group(['middleware' => ['role:mandor', 'auth']], function () {
    Route::get('/dashboard',[App\Http\Controllers\Mandor\DashboardController::class,'index'])->name('dashboard');
    });
});





// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
