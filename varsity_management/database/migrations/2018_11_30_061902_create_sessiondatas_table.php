<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessiondatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessiondatas', function (Blueprint $table) {
            $table->increments('session_data_id');
            $table->bigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('user_id')->on('users');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->bigInteger('advisor_id')->unsigned();
            $table->foreign('advisor_id')->references('user_id')->on('users');
            $table->bigInteger('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            $table->integer('type');
            $table->integer('year');
            $table->boolean('month');
            $table->boolean('pending');
            $table->float('ct');
            $table->float('midterm');
            $table->float('present');
            $table->float('reportorassignment');
            $table->float('firstfifty');
            $table->float('lastfifty');
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessiondatas');
    }
}
