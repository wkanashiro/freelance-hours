<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// caso seja uma classe que contenha outros métodos a sintaxe é:
// Route::get('/', [WelcomeController::class, 'nomeDoMetodo']);
 
//Route::get('/', WelcomeController::class);
Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');

Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');
