<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('challan_no');
            $table->integer('supplier_id')->unsigned();
            $table->integer('purchase_invoice_no');
            $table->float('grand_total_amount');
            $table->float('total_discount');
            $table->string('purchase_date');
            $table->string('payment_type');
            $table->string('bank_id')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('product_purchases');
    }
}
