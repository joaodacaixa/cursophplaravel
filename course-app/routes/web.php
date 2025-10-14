<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\courseController;

Route::get('/course', [courseController::class, 'index'])->name('course.index');

Route::get('course/adiciona',[courseController::class, 'create'])->name('course.create');
Route::Post('/Courses', [courseController::class, 'store'])->name('course.store');

Route::get('course/{course}/edita',[courseController::class, 'edit'])->name('course.edit');
Route::Put('/course/{course}', [courseController::class, 'update'])->name('course.update');

Route::get('/course/{course}/show', [courseController::class, 'show'])->name('course.show'); 

//tela que exibe os dados a serem deletados
Route::get('/course/{course}/showdelete', [courseController::class, 'showdelete'])->name('course.showdelete');
//ao clicar no botao do form "post" faz o delete e retorna a tela inicial.
Route::delete('/course/{course}', [courseController::class, 'destroy'])->name('course.destroy');