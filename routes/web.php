<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;




Route::get('/', [DatasetController::class, 'index']);
Route::get('datasets', [DatasetController::class, 'index'])->name('datasets.index'); 
Route::get('datasets/{dataset}', [DatasetController::class, 'show'])->name('datasets.show');

Route::middleware('auth')->group(function () {
    Route::resource('tags', TagController::class);
    Route::get('datasets/create', [DatasetController::class, 'create'])->name('datasets.create');
    Route::post('datasets', [DatasetController::class, 'store'])->name('datasets.store'); 
    Route::get('datasets/{dataset}/edit', [DatasetController::class, 'edit'])->name('datasets.edit');
    Route::put('datasets/{dataset}', [DatasetController::class, 'update'])->name('datasets.update'); 
    Route::delete('datasets/{dataset}', [DatasetController::class, 'destroy'])->name('datasets.destroy'); 

});

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);
