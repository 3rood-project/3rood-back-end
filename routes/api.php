<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicShopController;
use App\Http\Controllers\UserProfileController;

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

// login and register for user
// ---------------------- public routes ------------------------
Route::post('/userLogin', [AuthController::class , 'userLogin']);
Route::post('/userRegister', [AuthController::class , 'userRegister']);

// login and register for shop
Route::post('/shopLogin', [AuthController::class , 'shopLogin']);
Route::post('/shopRegister', [AuthController::class , 'shopRegister']);

// get all shops
Route::get('/allShops', [PublicShopController::class , 'getAllShops']);
Route::get('/allCategory', [PublicShopController::class , 'getAllCategories']);
Route::get('/allShops/{name}', [PublicShopController::class , 'getShop']);
Route::get('/allShops/{name}/{id}', [PublicShopController::class , 'showProductDetails']);

// --------------------- authenticated routes ------------------
Route::middleware('auth:sanctum')->group(function (){
    Route::get('/profile', [UserProfileController::class , 'showUserProfile']);
    Route::put('/profile/edit', [UserProfileController::class , 'editUserProfile']);
    Route::put('/userChangePass', [UserProfileController::class , 'changeUserPassword']);

    Route::get('/order/{order}', [UserProfileController::class , 'showUserOrderDetails']);
}
);
