<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;


Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
    Route::post('/activities/{activity}/complete', [ActivityController::class, 'complete'])->name('activities.complete');

    Route::get('/achievements', [AchievementController::class, 'index'])->name('achievement.index');

    Route::resource('skills', SkillController::class)
    ->only(['index', 'store', 'update', 'destroy']);

    Route::resource('activities', ActivityController::class)
    ->only(['index', 'store', 'update', 'destroy']);

    Route::get('/notifications',[NotificationController::class, 'index'])->name('notifications.index');

    Route::post('/notifications/{notification}/read',[NotificationController::class, 'read'])->name('notifications.read');
    
    });

require __DIR__.'/auth.php';
