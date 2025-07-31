<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/add', 'addStudent');
Route::post('add', [StudentController::class, 'add']);
Route::get('/list', [StudentController::class, 'studentList']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'edit']);