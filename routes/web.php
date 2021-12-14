<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
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
    return view('welcome');
});

Auth::routes();


Route::get('/user', [App\Http\Controllers\User\UserController::class, 'index'])->name('user');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/table', [AdminController::class, 'table'])->name('table');
