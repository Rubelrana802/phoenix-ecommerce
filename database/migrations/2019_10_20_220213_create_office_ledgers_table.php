<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('person_id')->unsigned();
            $table->integer('transaction_id')->unsigned();
            $table->float('debit')->nullable();
            $table->float('credit')->nullable();
            $table->string('date');
            $table->mediumText('details')->nullable();
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
        Schema::dropIfExists('person_loans');
    }
}
