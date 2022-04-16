<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_records')->insert([
            [
                'day' => '2022-03-14',
                'content_status' => 1,
                'language_status' => 1,
                'time' => 3,
                'comment_twitter' => 'ねこねこ',
                'share_twitter' => 1,
            ],
            [
                'day' => '2022-03-07',
                'content_status' => 2,
                'language_status' => 2,
                'time' => 5,
                'comment_twitter' => 'aaa',
                'share_twitter' => 1,
            ],
            [
                'day' => '2022-03-08',
                'content_status' => 3,
                'language_status' => 3,
                'time' => 8,
                'comment_twitter' => 'うわああ',
                'share_twitter' => 1,
            ],
            [
                'day' => '2022-03-09',
                'content_status' => 1,
                'language_status' => 4,
                'time' => 1,
                'comment_twitter' => 'うわああ',
                'share_twitter' => 1,
            ],
            [
                'day' => '2022-03-10',
                'content_status' => 2,
                'language_status' => 5,
                'time' => 5,
                'comment_twitter' => 'うわああ',
                'share_twitter' => 1,
            ],
            [
                'day' => '2022-03-11',
                'content_status' => 3,
                'language_status' => 6,
                'time' => 9,
                'comment_twitter' => 'うわああ',
                'share_twitter' => 1,
            ],
            [
                'day' => '2022-03-12',
                'content_status' => 1,
                'language_status' => 6,
                'time' => 15,
                'comment_twitter' => 'うわああ',
                'share_twitter' => 1,
            ],
            [
                'day' => '2022-03-12',
                'content_status' => 1,
                'language_status' => 7,
                'time' => 0,
                'comment_twitter' => 'うわああ',
                'share_twitter' => 1,
            ],
            [
                'day' => '2022-03-12',
                'content_status' => 1,
                'language_status' => 8,
                'time' => 0,
                'comment_twitter' => 'うわああ',
                'share_twitter' => 1,
            ],
        ]);
    }
}
