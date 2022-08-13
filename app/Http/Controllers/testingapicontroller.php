<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingapicontroller extends Controller
{
    function index() {
         return "stub";
    }

    function getData() {
         return [
              "name" => "sanja",
               "email" => "sanja@.com",
               "address" => "jaffna"
          ];
    }
}
