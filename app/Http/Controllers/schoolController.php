<?php

namespace App\Http\Controllers;
use App\Models\school;

use Illuminate\Http\Request;

class schoolController extends Controller
{
  function showsschool(){
    //   return school::all();
    // return school::find(1);
    return school::find(1)-> getPrincipal;

      }

  function showschoolstudent(){
    return school::find(1)->getstudent;
  }
  }


