<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PController;
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

Route::get('/',[PController::class,'create']);

Route::post('/readproduct',[PController::class,'store']);

Route::get('/viewproduct',[PController::class,'index']);

Route::get('/product/{id}/edit',[PController::class,'edit']);

Route::post('/psearch',[PController::class,'search']);