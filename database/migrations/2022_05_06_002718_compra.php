<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('cantidad');
            $table->Integer('total');
            $table->bigInteger('tipodepago_id')->unsigned();
            $table->bigInteger('cliente_id')->unsigned();
            $table->timestamps();
            $table->foreign('tipodepago_id')->references('id')->on('tipoPago');
            $table->foreign('cliente_id')->references('id')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
