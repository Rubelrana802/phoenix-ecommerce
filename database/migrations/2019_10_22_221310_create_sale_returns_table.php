<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_returns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('return_invoice_no')->unsigned();
            $table->string('date_return');
            $table->float('grand_total');
            $table->integer('invoice_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('store_id')->unsigned();            
            $table->integer('payment_type')->unsigned();            
            $table->integer('bank_id')->unsigned();            
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
        Schema::dropIfExists('sale_returns');
    }
}
