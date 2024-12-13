<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CatigoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TrainerController;

Route::group(
      [
            'middleware' => ['admin', 'auth']
      ],
      function () {
            Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
            
            Route::resource('students', StudentController::class);
            Route::resource('courses', CatigoryController::class);
            Route::resource('lessons', LessonController::class);

            Route::resource('trainers', TrainerController::class);


      }
);

