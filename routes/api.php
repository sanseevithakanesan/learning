<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\teacherController;
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

Route::get("getData",[testingapicontroller::class,'getData']);

Route::get("listData",[studentcontroller::class,'showmember']);//student data postman backend la irunthu varum

Route::post("teacherData",[teacherController::class,'addteacher']);//backend ku kondu pokum with json api model


Route::put("updatemem",[teacherController::class,'updateMember']);

Route::delete("deletemem/{id}",[teacherController::class,'deleteMember']);

Route::get("searchmem/{name}",[teacherController::class,'searchMember']);


Route::get("savemem",[studentcontroller::class,'saveMember']); 

Route::post("login",[UserController::class,'index1']); 
?>