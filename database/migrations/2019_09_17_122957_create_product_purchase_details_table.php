<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_purchase_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('purchase_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('inventory_id')->unsigned();
            $table->integer('store_id')->unsigned();
            $table->float('quantity');
            $table->float('rate');
            $table->float('total_amount');
            $table->float('discount');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('product_purchase_details');
    }
}
