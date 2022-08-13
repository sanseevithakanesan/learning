<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    use HasFactory;
    public function getPrincipal(){

        return $this -> hasOne('App\Models\Principal');
      }

      public function getstudent(){

        return $this -> hasMany('App\Models\student');
      }
}
