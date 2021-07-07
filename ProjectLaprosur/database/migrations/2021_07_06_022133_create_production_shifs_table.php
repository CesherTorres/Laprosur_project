<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionShifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Turnos de Produccion
        Schema::create('production_shifs', function (Blueprint $table) {
            $table->id();
            $table->string('nameShift',40);
            $table->dateTime('startTime');
            $table->datetime('endTime');
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
        Schema::dropIfExists('production_shifs');
    }
}
