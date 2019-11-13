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
            $table->integer('category_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->string('tax')->nullable();
            $table->string('product_name');
            $table->string('tag')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('type')->nullable();
            $table->string('model')->nullable();
            $table->float('offer_price');
            $table->float('sale_price');
            $table->string('image')->nullable();
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
