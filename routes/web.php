<?php

use Illuminate\Support\Facades\Route;

//controller
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/detail', [DetailController::class, 'index'])
    ->name('detail');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
