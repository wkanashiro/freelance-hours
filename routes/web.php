<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// caso seja uma classe que contenha outros métodos a sintaxe é:
// Route::get('/', [WelcomeController::class, 'nomeDoMetodo']);
 
Route::get('/', WelcomeController::class);
