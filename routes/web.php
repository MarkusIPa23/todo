<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\ToDoController;

Route::get('/', function () {
    return auth()->check() ? redirect()->route('todos.index') : view('welcome');
});

Route::get('/iphone', function () {
    return view('iphone');
});


Route::middleware(['auth'])->group(function () {

Route::get('/todos', [ToDoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [ToDoController::class, 'create'])->name('todos.create');
Route::post('/todos', [ToDoController::class, 'store'])->name('todos.store');
Route::get('/todos/{todo}', [ToDoController::class, 'show'])->name('todos.show');

Route::get('/diaries', [DiaryController::class, 'index'])->name('diaries.index');
Route::get('/diaries/create', [DiaryController::class, 'create'])->name('diaries.create');
Route::post('/diaries', [DiaryController::class, 'store'])->name('diaries.store');
Route::get('/diaries/{diary}', [DiaryController::class, 'show'])->name('diaries.show');

});