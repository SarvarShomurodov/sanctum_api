<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

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

Route::get('student',[StudentController::class,'index']);
Route::post('student',[StudentController::class,'store']);
Route::get('student/{id}',[StudentController::class,'show']);
Route::get('student/{id}/edit',[StudentController::class,'edit']);
Route::put('student/{id}/edit',[StudentController::class,'update']);
Route::delete('student/{id}/delete',[StudentController::class,'destroy']);