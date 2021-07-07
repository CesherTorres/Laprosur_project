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
            $table->foreing('id_dispatch')->on('dispatchs')->references('id')->onDelete()->onUpdate();
            $table->foreing('id_burning')->on('burnings')->references('id')->onDelete()->onUpdate();
            $table->foreing('id_cachamada')->on('cachamadas')->references('id')->onDelete()->onUpdate();
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
