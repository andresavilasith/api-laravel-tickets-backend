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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('origin_city_id');
            $table->foreign('origin_city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->unsignedBigInteger('destiny_city_id');
            $table->foreign('destiny_city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('hours');
            $table->integer('scales');
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
        Schema::dropIfExists('routes');
    }
};
