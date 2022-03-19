<?php

use App\Http\Controllers\ProjectController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/transaction', function () {
    return view('transaction');
});

Route::view("login", 'login');
Route::view("signup", 'signup');
Route::view("dashboard", 'dashboard');
Route::view("transaction", 'transaction');
Route::get('signup', [ProjectController::class,'addData']);
Route::get('dashboard',[ProjectController::class, 'showData']);
Route::get('transaction',[ProjectController::class, 'deductFunds']);
Route::get('transaction',[ProjectController::class, 'addFunds']);
// Route::get('/login', [ProjectController::class, 'login']);

