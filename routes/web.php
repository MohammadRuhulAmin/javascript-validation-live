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

Route::get('/email_available',[App\Http\Controllers\EmailAvailable::class,'index']);

Route::post('/email_available/check',[App\Http\Controllers\EmailAvailable::class,'check'])->name('email_available.check');