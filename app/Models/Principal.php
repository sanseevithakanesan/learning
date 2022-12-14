<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function setNameAttribute($value)
    {
      $this -> attributes['name']="mrs.".$value;
    }

    public function setAddressAttribute($value)
    {
      $this -> attributes['address']=$value.",srilanka";
}
}