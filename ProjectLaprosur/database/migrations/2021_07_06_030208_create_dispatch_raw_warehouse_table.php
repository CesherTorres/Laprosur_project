<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispatchRawWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch_raw_warehouse', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rawWarehouse');
            $table->unsignedBigInteger('id_dispatch');
            $table->foreign('id_rawWarehouse')->on('raw_warehouses')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('dispatch_raw_warehouse');
    }
}
