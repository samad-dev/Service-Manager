<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
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

Route::get('types',  [TypeController::class, 'index']);
Route::get('companytype/{id}',  [TypeController::class, 'companywise']);
Route::post('types', [TypeController::class, 'store']);
Route::get('types/{id}', [TypeController::class, 'show']);
Route::put('types/{id}', [TypeController::class, 'update']);
Route::delete('types/{id}',[TypeController::class, 'destroy'] );