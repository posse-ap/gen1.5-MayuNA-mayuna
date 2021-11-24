<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //データのクリア
    DB::table('choices')->truncate();

    $param =[
        [
            'choice_number' => 1,
            'name' => 'たかなわ',
            'valid' => 1,
            'question_id' => 1

        ],
        [
            'choice_number' => 2,
            'name' => 'たかわ',
            'valid' => 0,
            'question_id' => 1
        ],
        [
            'choice_number' => 3,
            'name' => 'こうわ',
            'valid' => 0,
            'question_id' => 1
        ],
        [
            'choice_number' => 1,
            'name' => 'かめいど',
            'valid' => 1,
            'question_id' => 2

        ],
        [
            'choice_number' => 2,
            'name' => 'かめと',
            'valid' => 0,
            'question_id' => 2
        ],
        [
            'choice_number' => 3,
            'name' => 'かめど',
            'valid' => 0,
            'question_id' => 2
        ],
        [
            'choice_number' => 1,
            'name' => 'いばらいち',
            'valid' => 1,
            'question_id' => 3

        ],
        [
            'choice_number' => 2,
            'name' => 'せいげんち',
            'valid' => 0,
            'question_id' => 3
        ],
        [
            'choice_number' => 3,
            'name' => 'いのはらし',
            'valid' => 0,
            'question_id' => 3
        ],
        [
            'choice_number' => 1,
            'name' => 'かるが',
            'valid' => 1,
            'question_id' => 4

        ],
        [
            'choice_number' => 2,
            'name' => 'かりどめや',
            'valid' => 0,
            'question_id' => 4
        ],
        [
            'choice_number' => 3,
            'name' => 'いがるけ',
            'valid' => 0,
            'question_id' => 4
        ]
    ];
    DB::table('choices')->insert($param);

    }
}
