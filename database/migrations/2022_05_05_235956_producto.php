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
        Schema::create('producto', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->Integer('precio');
            $table->Integer('stock');
            $table->bigInteger('galeria_id')->unsigned();
            $table->bigInteger('tipoproducto_id')->unsigned();
            $table->timestamps();

            $table->foreign('galeria_id')->references('id')->on('galeriaProducto')->onDelete("cascade"); // aqui estamos uniendo las tablas
            $table->foreign('tipoproducto_id')->references('id')->on('tipoProducto')->onDelete("cascade");
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
