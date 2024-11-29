<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;



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
 
Route::get('tasks-list', function () {
    return view('tasks-list');
});
Route::middleware('admin')->resource('tasks', TaskController::class);

Route::middleware('admin')->resource('profiles', ProfileController::class);
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/taskslist', [App\Http\Controllers\HomeController::class, 'taskslist'])->name('taskslist');
 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');

Route::middleware('admin')->get('/projects/add-project', [ProjectController::class, 'create'])->name('projects.add-project');
Route::middleware('admin')->get('/projects/index', [ProjectController::class, 'index'])->name('projects.index');
Route::middleware('admin')->post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
Route::middleware('admin')->get('/projects/destroy/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
Route::middleware('admin')->get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::middleware('admin')->post('/projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
Auth::routes();