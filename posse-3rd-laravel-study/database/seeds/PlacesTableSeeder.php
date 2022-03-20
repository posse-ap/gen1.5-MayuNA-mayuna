<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //データのクリア
    DB::table('places')->truncate();

    $param =[
        [
            'name' => '東京'
        ],
        [
            'name' => '広島'
        ]
    ];
    DB::table('places')->insert($param);

    }
}
