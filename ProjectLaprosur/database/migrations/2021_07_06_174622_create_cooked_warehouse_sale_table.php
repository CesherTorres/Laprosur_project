<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookedWarehouseSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooked_warehouse_sale', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cookedWarehouse');
            $table->unsignedBigInteger('id_sale');
            $table->foreign('id_cookedWarehouse')->references('id')->on('cooked_warehouse_sale')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_sale')->references('id')->on('sales')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cooked_warehouse_sale');
    }
}
