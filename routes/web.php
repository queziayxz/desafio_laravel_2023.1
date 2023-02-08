<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/funcionarios',[UserController::class, 'index'])->name('user.index');
Route::get('/funcionarios/create',[UserController::class, 'create'])->name('user.create');
Route::post('/funcionarios',[UserController::class, 'store'])->name('user.store');
Route::get('/funcionarios/{user}',[UserController::class, 'show'])->name('user.show');
Route::get('/funcionarios/{user}/edit',[UserController::class, 'edit'])->name('user.edit');
Route::put('/funcionarios/{user}',[UserController::class, 'update'])->name('user.update');
Route::delete('/funcionarios/{user}',[UserController::class, 'destroy'])->name('user.destroy');

require __DIR__.'/auth.php';
