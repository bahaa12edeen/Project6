<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AuthController;


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
    return view('kindergarten-website-template.index');
});

Route::get('/book', [BookController::class, 'index']);

Route::get('/book/seaech', [BookController::class, 'GetBook']);

Route::view('/request', 'request');

// Route::post('request/send', [BookController::class, 'fileUp']);

Route::get('request/send', [RequestController::class, 'ask']);

Route::get('/ask', [RequestController::class, 'displayAsk']);

Route::view('/respond', 'respond');

Route::post('/respond/send', [RequestController::class, 'responder']);

// Route::get('', [RequestController::class, '']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');