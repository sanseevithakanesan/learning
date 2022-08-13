<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//database connection
use Illuminate\Support\Str;//bring dummydata     

class Membersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<10; $i++){
      DB::table('customers')->insert([
          'name'=>Str::random(10),
          'email'=>Str::random(10).'@gmail.com',
          'mobile_numbers'=>Str::random(10),
      ]);
    }
    
}
}
