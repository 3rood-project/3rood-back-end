<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\PublicShopController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Shop\ShopProfileController;

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
// login and register for user
Route::post('/userLogin',                   [AuthController::class , 'userLogin']);
Route::post('/userRegister',                [AuthController::class , 'userRegister']);

// login and register for shop
Route::post('/shopLogin',                   [AuthController::class , 'shopLogin']);
Route::post('/shopRegister',                [AuthController::class , 'shopRegister']);
//logout
Route::delete('/logout',                      [AuthController::class , 'logout']);
// get all shops
Route::get('/allShops',                     [PublicShopController::class , 'getAllShops']);
Route::get('/allCategory',                  [PublicShopController::class , 'getAllCategories']);
Route::get('/allShops/{name}',              [PublicShopController::class , 'getShop']);
Route::get('/allShops/{name}/{id}',         [PublicShopController::class , 'showProductDetails']);
// newsLatter & contact
Route::post('/contact'  ,                    [PublicShopController::class , 'storeContactMessage']);
Route::post('/newsLatter'  ,                 [PublicShopController::class , 'storeNewsLatterMessage']);
// --------------------- user authenticated routes ------------------
Route::middleware('auth:sanctum')->group(function (){
    // user profile
    Route::get('/profile',                  [UserProfileController::class , 'showUserProfile']);
    Route::put('/profile/edit',             [UserProfileController::class , 'editUserProfile']);
    Route::put('/userChangePass',           [UserProfileController::class , 'changeUserPassword']);

    // order
    Route::get('/order/{order}',            [UserOrderController::class , 'showUserOrderDetails']);
    Route::post('/order/placeOrder',        [UserOrderController::class , 'placeOrder']);
}
);
// ---------------------shop authenticated routes ------------------
Route::middleware('auth:sanctum')->group(function (){
    Route::put('/approve/{order}',          [ShopController::class , 'approveOrder']);
    Route::put('/reject/{order}',           [ShopController::class , 'rejectOrder']);
    Route::put('/stage/{order}',            [ShopController::class , 'changeOrderStage']);
    Route::post('/shop/addOffer',           [ShopController::class , 'addNewOffer']);
    Route::PUT('/shop/editOffer/{product}', [ShopController::class , 'editOffer']);
    Route::delete('/shop/{product}',        [ShopController::class , 'deleteOffer']);
    //shop profile
    Route::put('/shopChangePass',           [ShopProfileController::class , 'changeShopPassword']);
    Route::get('/shop/profile',             [ShopProfileController::class , 'viewShopProfile']);

});
