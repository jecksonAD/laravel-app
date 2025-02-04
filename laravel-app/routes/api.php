<?php

use App\Http\Controllers\DataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/googleLogOut',[GoogleController::class, 'googleLogOut']);
Route::post('addData',[DataController::class, 'addData']);
Route::get('getData',[DataController::class, 'getData']);
Route::post('updateData',[DataController::class, 'updateData']);
Route::post('deleteData',[DataController::class, 'deleteData']);