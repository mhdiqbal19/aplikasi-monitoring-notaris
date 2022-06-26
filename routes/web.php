<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SertipikatController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login/index', [
        "title" => "Login"
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::resource('/dashboard/klien', KlienController::class)->middleware('auth');
Route::get('/dashboard/delklien/{id}', [KlienController::class, 'destroy'])->middleware('auth');

Route::resource('/dashboard/sertipikat', SertipikatController::class)->middleware('auth');
Route::get('/dashboard/delsertipikat/{id}', [SertipikatController::class, 'destroy'])->middleware('auth');

Route::resource('/dashboard/order', OrderController::class)->middleware('auth');
Route::get('/dashboard/delorder/{id}', [OrderController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/orderSelesai', [OrderController::class, 'selesai'])->middleware('auth');
