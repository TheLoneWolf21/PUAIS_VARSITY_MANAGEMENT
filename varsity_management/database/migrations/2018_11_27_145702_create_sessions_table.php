<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('session_id');
            $table->string('year');
            $table->string('month');
            $table->boolean('active');
        //    $table->integer('user_id')->unsigned();
        //    $table->foreign('user_id')->references('user_id')->on('users');
        //    $table->integer('subject_id')->unsigned();
        //    $table->foreign('subject_id')->references('subject_id')->on('subjects');
        //    $table->integer('teacher_id')->unsigned();
        //    $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
        //    $table->integer('semester');
        //    $table->string('section');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
