<?php

use App\Http\Controllers\ImpactController;
use App\Http\Controllers\PriorityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\BuGroupController;
use App\Http\Controllers\GroupMemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessUnitController;
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
///TYPES CONTROLLER
Route::get('types',  [TypeController::class, 'index']);
Route::get('companytype/{id}',  [TypeController::class, 'companywise']);
Route::post('types', [TypeController::class, 'store']);
Route::get('types/{id}', [TypeController::class, 'show']);
Route::put('types/{id}', [TypeController::class, 'update']);
Route::delete('types/{id}',[TypeController::class, 'destroy'] );

///STATUS CONTROLLER
Route::get('status', [StatusController::class, 'index']);
Route::post('status', [StatusController::class, 'store']);
Route::get('status/{id}', [StatusController::class, 'show']);
Route::get('status/company/{id}', [StatusController::class, 'companywise']);
Route::put('status/{id}', [StatusController::class, 'update']);
Route::delete('status/{id}', [StatusController::class, 'destroy']);

///PRIORITY CONTROLLER
Route::get('priority', [PriorityController::class, 'index']);
Route::post('priority', [PriorityController::class, 'store']);
Route::get('priority/{id}', [PriorityController::class, 'show']);
Route::get('priority/company/{id}', [PriorityController::class, 'companywise']);
Route::put('priority/{id}', [PriorityController::class, 'update']);
Route::delete('priority/{id}', [PriorityController::class, 'destroy']);



///IMPACTS CONTROLLER
Route::get('impacts', [ImpactController::class, 'index']);
Route::post('impacts', [ImpactController::class, 'store']);
Route::get('impacts/{id}', [ImpactController::class, 'show']);
Route::get('impacts/company/{id}', [ImpactController::class, 'companywise']);
Route::put('impacts/{id}', [ImpactController::class, 'update']);
Route::delete('impacts/{id}', [ImpactController::class, 'destroy']);

Route::get('bu_groups', [BuGroupController::class, 'index']);
Route::post('bu_groups', [BuGroupController::class, 'store']);
Route::get('bu_groups/{id}', [BuGroupController::class, 'show']);
Route::get('bu_groups/company/{id}', [BuGroupController::class, 'companywise']);
Route::put('bu_groups/{id}', [BuGroupController::class, 'update']);
Route::delete('bu_groups/{id}', [BuGroupController::class, 'destroy']);

///GROUP MEMBERS CONTROLLER///
Route::get('group-members', [GroupMemberController::class, 'index']);
Route::post('group-members', [GroupMemberController::class, 'store']);
Route::get('group-members/{id}', [GroupMemberController::class, 'show']);
Route::get('group-members/group/{id}', [GroupMemberController::class, 'companywise']);
Route::put('group-members/{id}', [GroupMemberController::class, 'update']);
Route::delete('group-members/{id}', [GroupMemberController::class, 'destroy']);

//USER CONTROLLER//
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::get('users/company/{id}', [UserController::class, 'companywise']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

///Business Unit Controller//
Route::get('business_units', [BusinessUnitController::class, 'index']);
Route::post('business_units', [BusinessUnitController::class, 'store']);
Route::get('business_units/{id}', [BusinessUnitController::class, 'show']);
Route::get('business_units/company/{id}', [BusinessUnitController::class, 'companywise']);
Route::put('business_units/{id}', [BusinessUnitController::class, 'update']);
Route::delete('business_units/{id}', [BusinessUnitController::class, 'destroy']);