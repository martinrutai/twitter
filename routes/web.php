<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');

Route::get('/', [DashboardController::class,'index'])->name('dashboard');

Route::get('/profile', [UserController::class,'index']);

Route::post('/posts', [PostController::class,'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');

Route::put('/posts/{post}', [PostController::class,'update'])->name('posts.update');

Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/comments', [CommentController::class,'store'])->name('comments.store');