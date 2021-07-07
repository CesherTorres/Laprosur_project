<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatchs', function (Blueprint $table) {
            $table->id();
            $table->double('quantity');
            $table->unsignedBigInteger('id_typeBrick');
            $table->foreign('id_typeBrick')->references('id')->on('type_bricks')->onDelete('cascade')->onupdate('cascade');
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
        Schema::dropIfExists('dispatchs');
    }
}
