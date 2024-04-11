<?php

use App\Http\Controllers\ProgressionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Route
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/auth/register', [UserController::class, 'createUser']);
Route::post('/auth/login', [UserController::class, 'loginUser']);
Route::middleware('auth:sanctum')->group(function(){
    Route::post('/progressions/add', [ProgressionController::class, 'store']);
    Route::get('/progressions', [ProgressionController::class, 'index']);
    Route::put('/progressions/{progressions}', [ProgressionController::class, 'update']);
    Route::delete('/progressions/{progression}', [ProgressionController::class, 'destroy']);
    Route::patch('/progress/update-status/{<progre></progre>ss}', [ProgressionController::class,'edit']);

    Route::get('/progressions/{progression}', [ProgressionController::class, 'show']);
    Route::get('/MyProgress',[ProgressionController::class,'Myprogress']);
    Route::post('/logout',[UserController::class,'logout']);

    
    
});

