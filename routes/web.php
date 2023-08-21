<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saludos', function () {
    return view('app');
});



Route::get('/todos', [TodosController::class,'index'])->name('todos');


Route::post('/todos',[TodosController::class,'store'])->name('todos');

Route::get('/todos/{id}',[TodosController::class,'show'])->name('todos-edit');
Route::patch('/todos/{id}',[TodosController::class,'update'])->name('todos-update');
Route::delete('/todos/{id}',[TodosController::class,'delete'])->name('todos-delete');

Route::resource('categories',CategoriesController::class);