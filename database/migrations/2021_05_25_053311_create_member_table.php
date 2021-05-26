<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_tbl_02', function (Blueprint $table) {
            $table->integer('custno');
            $table->string('custname', 20);
            $table->string('phone', 13);
            $table->string('address', 60);
            $table->date('joindate');
            $table->char('grade', 1);
            $table->char('city', 2);
            $table->primary('custno');
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
        Schema::dropIfExists('member_tbl_02');
    }
}
