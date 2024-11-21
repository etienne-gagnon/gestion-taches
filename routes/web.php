<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ConnectionController;


Route::get('/', function () {
    return view('index');
});

Route::get('/connection', function () {
    return view('index');
});

Route::post('/connection', [ConnectionController::class,'connection']);



Route::get('/tasks', function () {
    $tasks = Task::all();
    return view('tasks/index', ['tasks' => $tasks] );
});

Route::get('/tasks/edit', function () {
    return view('tasks/edit');
});




Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [ConnectionController::class,'register']);

Route::post('/logout', [ConnectionController::class,'logout']);


Route::get('/tasks/create', function () {
    return view('tasks/create');
});

Route::post('/tasks/create', [TasksController::class,'create']);
 


Route::post('/tasks/edit/{task}', [TasksController::class,'update']);

Route::post('/tasks/showEditForm/{task}', [TasksController::class,'showEditForm']);

Route::delete('/tasks/delete/{task}', [TasksController::class,'delete']);
