<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->increments('subject_id');
            $table->string('name', 50);
            $table->integer('class_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->foreign('class_id')->references('class_id')->on('class');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject');
    }
}
