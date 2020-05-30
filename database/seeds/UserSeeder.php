<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
            ['name' => 'Mrcrongos','email' => "myvia00@gmail.com",'password' => '123098abc','admin' => 1,'author' => 1],
            // ['name' => 'Mrcrongos','email' => "myvia00@gmail.com",'password' => '123098abc','admin' => 1,'author' => 1],

        ]);
    }
}
