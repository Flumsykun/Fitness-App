<?php
// Authentication Routes

//Request Password Reset Routes
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminWorkoutSplitController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::middleware('guest')->group(function(){
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password',[PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password{/token}', [NewPasswordController::class, 'store'])
        ->name('password.store');
});
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');



Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'checkRole:admin'], function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard');

        Route::get('admin/workout-split.create', [AdminWorkoutSplitController::class, 'create'])
            ->name('workout-split.create');
    });
});

