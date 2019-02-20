<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('title', 50)->nullable();
            $table->string('description', 200)->nullable();
            $table->float('amount', 8, 2);
            $table->float('amount_paid', 8, 2);
            $table->longText('due');
            $table->dateTime('creation_timestamp');
            $table->dateTime('payment_timestamp');
            $table->string('payment_method', 30);
            $table->string('status', 10)->comment('paid or Unpaid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
