<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::resource('task', TaskController::class);

/*


Route::get('/profile/{identifier}', ProfileInformationController::class);

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', [ContactController::class, 'create']);

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/task', [TaskController::class, 'index'])->name('task.lihat');

Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');

Route::put('/task/{id}', [TaskController::class, 'update'])->name('task.update');

Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.delete');


Route::get('/task/create', [TaskController::class, 'create']);

Route::post('/task', [TaskController::class, 'store']);
*/