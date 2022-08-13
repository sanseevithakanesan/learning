<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\school;
use App\Models\country;

class schoolNewcontroller extends Controller
{
    function index(){
         return "stub";
    }
    function schoolNewlist(){
        // return DB::table('schools')->get();//default
        // return DB::connection('mysql_02')->table('subjects')->get(); //other database 


        // return School::all();

        return country::all();
}
}