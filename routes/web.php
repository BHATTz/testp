<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', [TasksController::class, 'index']);
Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/tasks/create', [TasksController::class, 'create']);

// Route::get('/tasks/create', 'App\Http\Controllers\TasksController@create');

// Route::get('/layouts/app', function () {
//     return view('layouts.app');
// });

Route::post('/tasks', [TasksController::class, 'store']);
