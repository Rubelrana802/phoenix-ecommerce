<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('unit_id')->unsigned()->nullable();
            $table->string('tax')->unsigned()->nullable();
            $table->string('product_name');
            $table->string('serial_number');
            $table->string('model');
            $table->float('sale_price');
            $table->string('image')->nullable();
            $table->integer('supplier_id')->unsigned();
            $table->float('supplier_price');
            $table->text('details')->nullable();
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
        Schema::dropIfExists('products');
    }
}
