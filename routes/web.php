<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ForgotPassword;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
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
    return view('admin.login.login');
    //return view('admin.dashboard');
});
Route::get('forgot-password',[ForgotPassword::class,'index']);
Route::post('login-check',[LoginController::class,'index'])->name('login-check');
Route::get('admin/dashboard',[DashboardController::class,'index']);