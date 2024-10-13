<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index'])->name('dashboard');

Route::get('/profile', [UserController::class,'index']);

Route::post('/ideas', [IdeaController::class,'store'])->name('ideas.store');

Route::get('/ideas/{idea}', [IdeaController::class,'show'])->name('ideas.show');

Route::delete('/ideas/{idea}', [IdeaController::class,'destroy'])->name('ideas.destroy');