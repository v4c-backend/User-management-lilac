<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;















Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/search', [UserController::class, 'search'])->name('search');
