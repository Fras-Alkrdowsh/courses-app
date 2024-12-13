<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatigoryController;
use App\Http\Controllers\UserDashboardController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/
//Route::resource('dashboard', UserDashboardController::class);

Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/show/{id}', [UserDashboardController::class, 'show'])->name('dashboard.show');
Route::get('/dashboard/test', [UserDashboardController::class, 'show_qustions'])->name('dashboard.test');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';

