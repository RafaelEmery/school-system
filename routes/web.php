<?php

use App\Http\Controllers\SchoolClassController;
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

Route::get('/aluno', function () {
    return view('student.detalhes');
})->name('aluno');

Route::get('/turma', function () {
    return view('turmas.listar');
})->name('turma');

Route::get('/turma/detalhes', function () {
    return view('turmas.detalhes');
})->name('turma/detalhes');

Route::resource('/classes', SchoolClassController::class);
