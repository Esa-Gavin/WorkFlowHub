<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\StatusController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\UserTaskController;
/* use Illuminate\Http\Request; */
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['api', 'throttle:60,1'])->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('statuses', StatusController::class);
    Route::apiResource('tasks', TaskController::class);
    Route::apiResource('user-tasks', UserTaskController::class);
});
