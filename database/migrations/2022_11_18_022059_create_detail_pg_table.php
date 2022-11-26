<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pg', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('qtyskin');
            $table->unsignedBigInteger('amountmale');
            $table->unsignedBigInteger('amountfemale');
            $table->unsignedBigInteger('priceskin');
            $table->unsignedBigInteger('total');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pg_id');
            $table->string('timeaddress');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pg_id')->references('id')->on('pg')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pg');
    }
};