<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('day');
            $table->integer('content_status');
            $table->integer('language_status');
            $table->integer('time');
            $table->string('comment_twitter');
            $table->boolean('share_twitter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_records');
    }
}
