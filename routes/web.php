<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', [UserController::class , 'home'])->name('home');
    Route::get('feedback' , [FeedbackController::class , 'index'])->name('feedback');
    Route::post('submitFeedbak' , [FeedbackController::class , 'submit'])->name('submitFeedbak');
});
//
//Route::middleware(['auth', 'CheckAdmin'])->group(function () {
//    Route::get('/admin', function () {
//        return "Admin";
//    });
//});
