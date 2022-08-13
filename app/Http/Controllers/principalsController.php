<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Principal;

class principalsController extends Controller
{
 function  addPrincipal(){
     $principal = new Principal();
     $principal -> name ="velampikai";
     $principal -> email="velampikai@gmail.com";
     $principal ->address ="jaffna";
     $principal ->school_id ="3";
     $principal ->save();
 }
}