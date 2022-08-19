<?php

use App\Http\Controllers\api\AuthApiController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Models\Order;
use App\Models\OrderDetail;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login',[AuthApiController::class,'Login'])->name('login');
Route::get('logout', [AuthApiController::class,'logout'])->name('logout');

Route::middleware('auth:sanctum')-> group(function (){

    Route::apiResource('products',ProductController::class);
    Route::apiResource('orders',OrderController::class);
    // Route::get('orders/{Order}/details',[OrderDetailController::class,'index']);
    // Route::get('orders/{Order}/details/{OrderDetail}',[OrderDetailController::class,'show']);
    // Route::delete('orders/{Order}/details/{OrderDetail}',[OrderDetailController::class,'destroy']);

    Route::apiResource('orders.orderdetails',OrderDetailController::class);

});


