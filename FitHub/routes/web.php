<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminWorkoutSplitController;

use Illuminate\Support\Facades\Route;

//public routes
Route::get('/', function () {
    return view('home');
});
// Authentication Routes
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Request Password Reset Routes
Route::get('/request-password-reset', [UserController::class, 'requestPasswordReset'])->name('request.password.reset');

//register routes
Route::post('/register', [UserController::class, 'register'])->name('register');

// Authenticated User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user-profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/like/{split}', [UserController::class, 'like'])->name('split.like');
    Route::post('/dislike/{split}', [UserController::class, 'dislike'])->name('split.dislike');
});

//Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('admin/workout-split/create', [AdminWorkoutSplitController::class, 'create'])->name('admin.workout-split.create');
    Route::post('admin/workout-split/store', [AdminWorkoutSplitController::class, 'store'])->name('admin.workout-split.store');
    Route::get('admin/workout-split/edit/{split}', [AdminWorkoutSplitController::class, 'edit'])->name('admin.workout-split.edit');
    Route::put('admin/workout-split/update/{split}', [AdminWorkoutSplitController::class, 'update'])->name('admin.workout-split.update');
    Route::delete('admin/workout-split/delete/{split}', [AdminWorkoutSplitController::class, 'delete'])->name('admin.workout-split.delete');
});

//Post Routes


//Comment Routes


//Like Routes


//Dislike Routes


