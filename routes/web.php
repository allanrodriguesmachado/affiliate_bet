<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('user', UserController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy', 'create']);


Route::resource('affiliated', AffiliateController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy', 'create']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
