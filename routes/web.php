<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principalsController;
use App\Http\Controllers\schoolController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\schoolNewcontroller;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// $data = "hi kirithekan ,how are u";
// $data =Str::ucfirst($data);
// $data =Str::replaceFirst("Hi","hello" ,$data);

// $data =Str::camel($data);

//-----------------------------------------------------
// $data =Str::of($data)
// ->ucfirst($data)
// ->replaceFirst("Hi","hello" ,$data)
// ->camel($data);

// echo $data;

Route::get("addprinci",[principalsController::class,'addPrincipal']);

Route::get("schoolslist",[schoolController::class,'showsschool']);

Route::get("schoolsstudent",[schoolController::class,'showschoolstudent']);

Route::get("teachers/{key:name}",[teacherController::class,'showteacher']); //key default id

Route::get("schoolnewlist",[schoolNewcontroller::class,'schoolNewlist']);

Route::get('/', function () {
    return view('welcome');
});
