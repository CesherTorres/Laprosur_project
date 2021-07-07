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
            $table->foreign('id_cookedWarehouse')->on('cooked_warehouses')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_saca')->on('sacas')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
