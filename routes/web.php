<?php

use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\StudentController;
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
    return view('home');
})->name('home');

// Route::get('/aluno')->uses([StudentController::class, 'index'])->name('aluno');

Route::get('/turma')->uses([SchoolClassController::class, 'index'])->name('turma');

Route::resource('/classes', 'App\Http\Controllers\SchoolClassController');

Route::resource('/aluno', 'App\Http\Controllers\StudentController');

Route::resource('/disciplina', 'App\Http\Controllers\SubjectController');

Route::resource('/professor', 'App\Http\Controllers\TeacherController');
