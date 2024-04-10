<?php

use Illuminate\Support\Facades\Route;
use App\HTtp\Controllers\RegisterController;

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


Route::get('/login', function () {
    return view('auth.login', [
        'title' => 'Login'
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
