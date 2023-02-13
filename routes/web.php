<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainingController;
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
Route::put('/alunos/{student}',[StudentController::class, 'update'])->name('student.update');
Route::delete('/alunos/{student}',[StudentController::class, 'destroy'])->name('student.destroy');

//AULAS
Route::get('/aula',[TrainingController::class, 'index'])->name('training.index');
Route::get('/aula/create',[TrainingController::class, 'create'])->name('training.create');
Route::post('/aula',[TrainingController::class, 'store'])->name('training.store');
Route::get('/aula/{training}',[TrainingController::class, 'show'])->name('training.show');
Route::get('/aula/{training}/edit',[TrainingController::class, 'edit'])->name('training.edit');
Route::put('/aula/{training}',[TrainingController::class, 'update'])->name('training.update');
Route::delete('/aula/{training}',[TrainingController::class, 'destroy'])->name('training.destroy');

require __DIR__.'/auth.php';
