<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('middle_name', 20);
            $table->boolean('sex');
            $table->date('dob');
            $table->string('email', 100);
            $table->string('status');
            $table->string('nationality', 50)->nullable();
            $table->string('address', 200)->nullable();
            $table->date('date_registered');
            $table->integer('user_id')->unsigned();
            $table->string('photo', 200)->nullable();
            $table->integer('parent_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
