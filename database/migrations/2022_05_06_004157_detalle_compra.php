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
        Schema::create('detalleCompra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('compra_id')->unsigned();
            $table->bigInteger('producto_id')->unsigned();
            $table->Integer('precioProducto');
            $table->timestamps();
            $table->foreign('producto_id')->references('id')->on('producto');
            $table->foreign('compra_id')->references('id')->on('compra');

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
