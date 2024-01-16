<?php
// Authentication Routes

//Request Password Reset Routes
use App\Http\Controllers\UserController;
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

});

