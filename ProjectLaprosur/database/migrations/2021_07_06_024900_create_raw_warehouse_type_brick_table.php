<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawWarehouseTypeBrickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_warehouse_type_brick', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_typeBrick');
            $table->unsignedBigInteger('id_rawWarehouse');
            $table->foreign('id_typeBrick')->references('id')->on('type_bricks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_rawWarehouse')->references('id')->on('raw_warehouses')->onDelete('cascade')->onupdate('cascade');
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
        Schema::dropIfExists('raw_warehouse_type_brick');
    }
}
