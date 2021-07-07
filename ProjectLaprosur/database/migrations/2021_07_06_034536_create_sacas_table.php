<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sacas', function (Blueprint $table) {
            $table->id();
            $table->string('nameMontacarga',30);
            $table->string('driver',30);
            $table->string('helped',30);
            $table->unsignedBigInteger('id_oven');
            $table->foreign('id_oven')->references('id')->on('ovens')->ondelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sacas');
    }
}
