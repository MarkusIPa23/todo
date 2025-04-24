<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Sākumlapas maršruts
Route::get('/', function () {
    // Ja lietotājs ir ielogojies, novirza uz todos
    return auth()->check() ? redirect()->route('todos.index') : view('welcome');
});

// Reģistrēšanās maršruti
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Pieslēgšanās maršruti
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware(['guest']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Izlogoties maršruts
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Maršruti pieejami tikai ielogotiem lietotājiem
Route::middleware(['auth'])->group(function () {

    // Maršruti saistīti ar ToDo uzdevumiem
    Route::get('/todos', [ToDoController::class, 'index'])->name('todos.index');
    Route::get('/todos/create', [ToDoController::class, 'create'])->name('todos.create');
    Route::post('/todos', [ToDoController::class, 'store'])->name('todos.store');
    Route::get('/todos/{todo}', [ToDoController::class, 'show'])->name('todos.show');

    // Maršruti saistīti ar dienasgrāmatām
    Route::get('/diaries', [DiaryController::class, 'index'])->name('diaries.index');
    Route::get('/diaries/create', [DiaryController::class, 'create'])->name('diaries.create');
    Route::post('/diaries', [DiaryController::class, 'store'])->name('diaries.store');
    Route::get('/diaries/{diary}', [DiaryController::class, 'show'])->name('diaries.show');
});
