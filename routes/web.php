<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RequestController;

// User Routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Define the create route here
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Define the store route here
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// Request Routes
Route::get('/requests', [RequestController::class, 'index'])->name('requests.index');
Route::get('/requests/create', [RequestController::class, 'create'])->name('requests.create');
Route::post('/requests', [RequestController::class, 'store'])->name('requests.store');
Route::get('/requests/{request}', [RequestController::class, 'show'])->name('requests.show');
Route::get('/requests/{request}/edit', [RequestController::class, 'edit'])->name('requests.edit');
Route::put('/requests/{request}', [RequestController::class, 'update'])->name('requests.update');
Route::delete('/requests/{request}', [RequestController::class, 'destroy'])->name('requests.destroy');
