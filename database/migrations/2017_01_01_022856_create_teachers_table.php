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
            $table->increments('teacher_id');
            $table->string('firstname', 20);
            $table->string('lastname', 20);
            $table->date('birthday');
            $table->string('sex', 8);
            $table->string('religion', 20)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('phone', 20);
            $table->string('email', 50);
            $table->string('password', 20);
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
