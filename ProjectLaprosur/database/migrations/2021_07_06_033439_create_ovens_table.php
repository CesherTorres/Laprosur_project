<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ovens', function (Blueprint $table) {
            $table->id();
            $table->integer('ovenNumber');
            $table->date('date');
            $table->string('status');
            $table->unsignedBigInteger('id_dispatch');
            $table->unsignedBigInteger('id_burning');
            $table->unsignedBigInteger('id_cachamada');
            $table->foreign('id_dispatch')->references('id')->on('dispatchs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_burning')->references('id')->on('burnings')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cachamada')->references('id')->on('cachamadas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ovens');
    }
}
