<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_contents')->insert([
            [
                'content' => 'N予備校'
            ],
            [
                'content' => 'ドットインストール'
            ],
            [
                'content' => 'POSSE課題'
            ],
        ]);
    }
}
