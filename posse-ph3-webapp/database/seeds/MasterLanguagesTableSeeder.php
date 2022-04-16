<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_languages')->insert([
            [
                'language' => 'HTML'
            ],
            [
                'language' => 'CSS'
            ],
            [
                'language' => 'JavaScript'
            ],
            [
                'language' => 'PHP'
            ],
            [
                'language' => 'Laravel'
            ],
            [
                'language' => 'SQL'
            ],
            [
                'language' => 'SHELL'
            ],
            [
                'language' => '情報システム基礎知識(その他)'
            ],

        ]);
    }
}
