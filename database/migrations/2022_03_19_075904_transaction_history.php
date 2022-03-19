<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transactionHistory', function (Blueprint $table) {
            $table->bigIncrements('transaction_id');
            $table->unsignedBigInteger('name_id');
            $table->foreign('name_id')->references('name_id')->on('users');
            $table->string('transaction');
            $table->string('date_and_time_of_transaction');
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
        //
    }
};
