<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;



Route::middleware('auth')->group(function () {
    Route::get('/', [DatasetController::class, 'index']);
    Route::resource('tags', TagController::class);
    Route::resource('datasets', DatasetController::class);
});



Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);
