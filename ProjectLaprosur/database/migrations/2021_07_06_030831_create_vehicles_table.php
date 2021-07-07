<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('placa',7);
            $table->string('nameDriver');
            $table->unsignedBigInteger('id_carrier');
            $table->unsignedBigInteger('id_dispatch');
            $table->foreign('id_carrier')->on('carriers')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_dispatch')->on('dispatchs')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('vehicles');
    }
}
