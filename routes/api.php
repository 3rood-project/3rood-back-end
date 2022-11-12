<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// ---------------------- public routes ------------------------
Route::post('/userLogin', [AuthController::class , 'userLogin']);
Route::post('/userRegister', [AuthController::class , 'userRegister']);

Route::post('/shopLogin', [AuthController::class , 'shopLogin']);
Route::post('/shopRegister', [AuthController::class , 'shopRegister']);

// --------------------- authenticated routes ------------------
