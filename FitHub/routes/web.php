<?php

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

//User Routes
Route::middleware(['auth'])->group(function () {
    Route::post('/like{split}', [UserController::class, 'like'])->name('split.like');
    Route::post('/dislike{split}', [UserController::class, 'dislike'])->name('split.dislike');
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


