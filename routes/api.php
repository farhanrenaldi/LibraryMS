<?php

use App\Http\Controllers\Api\v1\BookController;
use App\Http\Controllers\Api\v1\BorrowOrderController;
use App\Http\Controllers\Api\v1\MemberController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routing for each classes' endpoint
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\v1'], function() {
    Route::apiResource('members', MemberController::class);
    Route::apiResource('books', BookController::class);
    Route::apiResource('orders', BorrowOrderController::class);
});