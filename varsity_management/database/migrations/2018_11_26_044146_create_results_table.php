<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('result_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users'); //user er foreign key
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->integer('ct');
            $table->integer('assignment');
            $table->integer('mid');
            $table->integer('report');
            $table->integer('presentation');
            $table->integer('final');
            $table->integer('total');
            $table->integer('semester');
            $table->boolean('status');
            $table->string('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
