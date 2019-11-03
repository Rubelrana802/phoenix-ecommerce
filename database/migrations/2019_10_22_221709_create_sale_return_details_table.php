<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleReturnDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_return_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('return_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->float('sold_qty');
            $table->float('return_qty');
            $table->float('price');
            $table->float('total');
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
        Schema::dropIfExists('sale_return_details');
    }
}
