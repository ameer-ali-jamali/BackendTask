<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
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
    return view('sign-in');
});
Route::get('/logout', function () {
    \session_abort();
    Auth::logout();
    return redirect('/');
});
Route::get('/jobs', [AuthController::class, 'user_auth_check']);
Route::post('/registerUser', [IndexController::class, 'signUp']);
Route::post('/registerCompany', [IndexController::class, 'register_company']);
Route::post('/login', [AuthController::class, 'login']);