<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('login');
});

// Route::get('login', function () {
//     return view('auth.login');
// });


// Route::get('register', function () {
//     return view('auth.register');
// });


// Auth Controller
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);