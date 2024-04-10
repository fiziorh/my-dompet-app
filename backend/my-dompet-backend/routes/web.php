<?php

use Illuminate\Support\Facades\Route;
use App\HTtp\Controllers\RegisterController;
use App\HTtp\Controllers\LoginController;
use App\HTtp\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');