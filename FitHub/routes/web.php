<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminWorkoutSplitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\UserWorkoutSplitController;
use Illuminate\Support\Facades\Route;

//public routes
Route::get('/', function () {
    return view('home.index');
})->name('home.index');;

Route::post('/users/{user}/assign-role', [UserRoleController::class, 'assignRole']);

//Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

 Route::get('admin/workout-split/create', [AdminWorkoutSplitController::class, 'create'])->name('admin.workout-split.create');
    Route::post('admin/workout-split/store', [AdminWorkoutSplitController::class, 'store'])->name('admin.workout-split.store');
    Route::get('admin/workout-split/edit/{split}', [AdminWorkoutSplitController::class, 'edit'])->name('admin.workout-split.edit');
    Route::put('admin/workout-split/update/{split}', [AdminWorkoutSplitController::class, 'update'])->name('admin.workout-split.update');
    Route::delete('admin/workout-split/delete/{split}', [AdminWorkoutSplitController::class, 'delete'])->name('admin.workout-split.delete');
});

// TODO: Add the auth middleware to the user routes

//User routes
Route::middleware(['auth'])->as('user.')->prefix('user')->group(function (){
    Route::get('split/request', [UserWorkoutSplitController::class, 'create'])->name('split.request');  //show the form to request a workout split
    Route::post('split/request', [UserWorkoutSplitController::class, 'store'])->name('split.store'); //store the workout split request
});




