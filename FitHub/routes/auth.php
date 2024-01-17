<?php
// Authentication Routes

//Request Password Reset Routes
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminWorkoutSplitController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::middleware('auth')->group(function(){
    Route::get('register',[RegisteredUserController::class, 'create'])
        ->name('register');

   Route::post('register',[RegisteredUserController::class, 'store']);

   Route::get('login',[AuthenticatedSessionController::class, 'create'])
       ->name('login');

   Route::post('login', [AuthenticatedSessionController::class, 'store']);

   Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
       ->name('logout');

   Route::get('reset-password/{reset}', [UserController::class, 'requestPasswordReset'])
       ->middleware(['auth'])
       ->name('request.password.reset');

   Route::group(['middleware' => 'checkRole:admin'], function(){
       Route::get('dashboard', [AdminController::class, 'dashboard'])
           ->name('dashboard');

       Route::get('admin/workout-split.create', [AdminWorkoutSplitController::class, 'create'])
           ->name('workout-split.create');
   });
});

