<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudeProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crude_productions', function (Blueprint $table) {
            $table->id();
            $table->integer('machineCuts');
            $table->datetime('stopTime');
            $table->double('horometro');
            $table->integer('amountOfPeoples');
            $table->integer('productionQuantity');
            $table->date('date');
            $table->unsignedBigInteger('id_producitionShift');
            $table->foreign('id_producitionShift')->on('production_shifts')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('crude_productions');
    }
}
