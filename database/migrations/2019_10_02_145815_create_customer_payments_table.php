<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id');
            $table->integer('invoice_id')->nullable();
            $table->float('payment_total',10,2);
            $table->date('date');
            $table->tinyInteger('type');
            $table->text('detaits')->nullable();
            $table->tinyInteger('payment_by')->nullable();
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
        Schema::dropIfExists('customer_payments');
    }
}
