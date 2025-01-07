<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.principal');
})->name('principal');

Route::resource('aluno', \App\Http\Controllers\AlunoController::class);

Route::resource('curso', \App\Http\Controllers\CursoController::class);

Route::resource('matricula', \App\Http\Controllers\MatriculaController::class);

