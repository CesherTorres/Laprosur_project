<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBurningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('burnings', function (Blueprint $table) {
            $table->id();
            $table->integer('batteryNumber');
            $table->integer('burningNumber');
            $table->double('amountOfSawdust');
            $table->dateTime('burningTime');
            $table->unsignedBigInteger('id_burnShift');
            $table->unsignedBigInteger('id_cachamada');
            $table->foreign('id_burnShift')->on('burn_shifts')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cachamada')->on('cachamadas')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('burnings');
    }
}
