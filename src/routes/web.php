<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

// Показывает форму
//Route::get('tasks/create', [TasksController::class, 'create']);

// Сохраняет данные
//Route::post('/tasks', [TasksController::class, 'store']);

Route::apiResource('tasks', TasksController::class);
