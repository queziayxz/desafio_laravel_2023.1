<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

//FUNCIONÁRIOS
Route::get('/funcionarios',[UserController::class, 'index'])->name('user.index');
Route::get('/funcionarios/create',[UserController::class, 'create'])->name('user.create');
Route::post('/funcionarios',[UserController::class, 'store'])->name('user.store');
Route::get('/funcionarios/{user}',[UserController::class, 'show'])->name('user.show');
Route::get('/funcionarios/{user}/edit',[UserController::class, 'edit'])->name('user.edit');
Route::put('/funcionarios/{user}',[UserController::class, 'update'])->name('user.update');
Route::delete('/funcionarios/{user}',[UserController::class, 'destroy'])->name('user.destroy');

//ALUNOS
Route::get('/alunos',[StudentController::class, 'index'])->name('student.index');
Route::get('/alunos/create',[StudentController::class, 'create'])->name('student.create');
Route::post('/alunos',[StudentController::class, 'store'])->name('student.store');
Route::get('/alunos/{student}',[StudentController::class, 'show'])->name('student.show');
Route::get('/alunos/{student}/edit',[StudentController::class, 'edit'])->name('student.edit');
Route::put('/alunos/{student}',[UserContStudentControllerroller::class, 'update'])->name('student.update');
Route::delete('/alunos/{student}',[StudentController::class, 'destroy'])->name('student.destroy');

require __DIR__.'/auth.php';
