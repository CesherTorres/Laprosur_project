<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookedWarehouseSacaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooked_warehouse_saca', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cookedWarehouse');
            $table->unsignedBigInteger('id_saca');
            $table->foreign('id_cookedWarehouse')->references('id')->on('cooked_warehouses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_saca')->references('id')->on('sacas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cooked_warehouse_saca');
    }
}
