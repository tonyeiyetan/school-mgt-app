<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentfees', function (Blueprint $table) {
            $table->increments('s_fees_id');
            $table->integer('fee_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->float('amount');
            $table->foreign('fee_id')->references('fee_id')->on('fees');
            $table->foreign('student_id')->references('student_id')->on('students');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentfees');
    }
}