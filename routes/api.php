<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/1.0/users', [UserController::class, 'storeUserAccount']);
Route::get('/1.0/users/{user_id}/accounts', [AccountController::class, 'listAccountWithBalance']);
Route::get('/1.0/accounts/{account_id}', [AccountController::class, 'history']);

