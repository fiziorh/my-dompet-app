<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SpendingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SavingPlanController;
use App\Http\Controllers\HistoryController;
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

Route::get('/income', [IncomeController::class, 'index'])->name('income');
Route::post('/income', [IncomeController::class, 'store'])->name('store.income');

Route::get('/spending', [SpendingController::class, 'index'])->name('spending');
Route::post('/spending', [SpendingController::class, 'store'])->name('spending.store');

Route::get('/setting', [SettingController::class, 'index']);

Route::get('/savingdashboard', [SavingPlanController::class, 'index']);

Route::get('/history', [HistoryController::class, 'index']);