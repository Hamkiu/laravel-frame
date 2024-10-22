<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth','role:admin'])->group(function () {
    // Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard',[AdminController::class, 'dashboard']);

        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::get('create', [UserController::class, 'create'])->name('user.create');
            Route::post('store', [UserController::class, 'store'])->name('user.store');
            Route::any('list', [UserController::class, 'list'])->name('user.list');
            Route::get('edit/{id}',[UserController::class, 'edit'])->name('user.edit');
            Route::post('update/{id}', [UserController::class, 'update'])->name('user.update');
            Route::get('delete/{id}',[UserController::class, 'delete'])->name('user.delete');
      
        });

        // Route::prefix('form')->group(function () {
        //     Route::get('/', [FormController::class, 'index'])->name('form');
        //     Route::get('create', [FormController::class, 'create'])->name('form.create');
        //     Route::post('store', [FormController::class, 'store'])->name('form.store');
        //     Route::any('list', [FormController::class, 'list'])->name('form.list');
        //     Route::get('edit/{id}',[FormController::class, 'edit'])->name('form.edit');
        //     Route::post('update/{id}', [FormController::class, 'update'])->name('form.update');
        //     Route::get('delete/{id}',[FormController::class, 'delete'])->name('form.delete');
      
        // });

    });
});

Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('vendor/dashboard', [VendorController::class, 'dashboard']);

});

