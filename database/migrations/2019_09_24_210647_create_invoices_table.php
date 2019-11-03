<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('date');
            $table->string('sell_invoice_no');
            $table->float('total_amount');
            $table->string('payment_type')->nullable();
            $table->float('discount_percentage')->nullable();
            $table->float('total_discount')->nullable();
            $table->float('tax_percentage')->nullable();
            $table->float('total_tax')->nullable();
            $table->float('vat_percentage')->nullable();
            $table->float('total_vat')->nullable();
            $table->integer('bank_id')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
