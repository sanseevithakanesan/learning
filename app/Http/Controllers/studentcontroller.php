<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\student;
class studentcontroller extends Controller
{
    function index(){
         return "stub";
    }
    function showmember(){
        return student::all();
    }
   
    function saveMember(Request $req){
        $rules = array(
            // "name"="required",
        );
    }
}
