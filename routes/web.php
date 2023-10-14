<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

git push --set-upstream origin main

|
*/

Route::get('/', [MainController::class, 'index']);

Route::post('/roles', [\App\Http\Controllers\RolesController::class, 'create']);
Route::put('/roles/{role}', [\App\Http\Controllers\RolesController::class, 'update']);
Route::get('index', [\App\Http\Controllers\RolesController::class, 'index']);
Route::get('roles/{role}', [\App\Http\Controllers\RolesController::class, 'show']);


