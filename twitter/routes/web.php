<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index']);

Route::get('/profile', function () {
    return view('profile');
});
