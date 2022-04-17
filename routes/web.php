<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/web3-login-message', [App\Http\Controllers\Web3LoginController::class, 'message']);
Route::post('/web3-login-verify', [App\Http\Controllers\Web3LoginController::class, 'verify']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
