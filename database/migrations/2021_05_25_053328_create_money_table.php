<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_tbl_02', function (Blueprint $table) {
            $table->integer('custno');
            $table->integer('saleno');
            $table->integer('pcost');
            $table->integer('amount');
            $table->integer('price');
            $table->string('pcode', 4);
            $table->date('sdate');
            $table->primary('saleno');
            $table->foreign('custno')->references('custno')->on('member_tbl_02')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('money_tbl_02');
    }
}
