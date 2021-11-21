<?php

use Illuminate\Database\Seeder;

class placetableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //データのクリア
    DB::table('place')->truncate();

    $param =[
        [
            'name' => '東京'
        ],
        [
            'name' => '広島'
        ],
    ];
    DB::table('place')->insert($param);

    }
}
