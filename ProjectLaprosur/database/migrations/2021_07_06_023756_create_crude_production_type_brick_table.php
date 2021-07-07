<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudeProductionTypeBrickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crude_production_type_brick', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_crudeProduction');
            $table->unsignedBigInteger('id_typeBrick');
            $table->foreign('id_crudeProduction')->on('crude_productions')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_typeBrick')->on('type_bricks')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('crude_production_type_brick');
    }
}
