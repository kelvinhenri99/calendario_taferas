<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TasksController;

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->middleware('auth');
Route::get('/tasks', [TasksController::class, 'tasks'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
