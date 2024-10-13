<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index'])->name('dashboard');

Route::get('/profile', [UserController::class,'index']);

Route::post('/ideas', [IdeaController::class,'store'])->name('ideas.store');

Route::delete('/ideas/{id}', [IdeaController::class,'destroy'])->name('ideas.destroy');