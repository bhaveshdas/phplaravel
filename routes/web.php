<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Taskscontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Taskscontroller::class,'index']);

Route::get('/tasks', [Taskscontroller::class,'index']);

Route::get('/tasks/create', [Taskscontroller::class,'create']);

Route::post('/tasks',[Taskscontroller::class,'store']);

//create a task

//display a task

//mark a task

//delete a task