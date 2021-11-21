<?php

use Illuminate\Database\Seeder;

class questiontableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //データのクリア
    DB::table('question')->truncate();

    $param =[
        [
            'question_number' => 1,
            'choice_number' => 1,
            'name' => 'たかなわ',
            'valid_id' => 1

        ],
        [
            'question_number' => 1,
            'choice_number' => 2,
            'name' => 'たかわ',
            'valid_id' => 0
        ],
        [
            'question_number' => 1,
            'choice_number' => 3,
            'name' => 'こうわ',
            'valid_id' => 0
        ]
    ];
    DB::table('question')->insert($param);

    }
}
