<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //データのクリア
    DB::table('users')->truncate();

    $param =[
    
    ];
    DB::table('users')->insert($param);
    }
}
