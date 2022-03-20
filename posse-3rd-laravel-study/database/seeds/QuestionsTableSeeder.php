<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //データのクリア
    DB::table('questions')->truncate();

    $param =[
        [
            'place_id' => 1,
            'question_number' => 1,
            'image_url' => "image/1.png"
        ],
        [
            'place_id' => 1,
            'question_number' => 2,
            'image_url' => "image/2.png"
        ],
        [
            'place_id' => 2,
            'question_number' => 1,
            'image_url' => "image/3.png"
        ],
        [
            'place_id' => 2,
            'question_number' => 2,
            'image_url' => "image/4.png"
        ]
    ];
    DB::table('questions')->insert($param);

    }
}
