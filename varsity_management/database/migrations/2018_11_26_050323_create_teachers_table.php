<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('user_id')->on('users');
            $table->binary('img');
            $table->string('name');
            $table->boolean('dean');
            $table->boolean('professor');
            $table->boolean('associate');
            $table->boolean('lecturer');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
