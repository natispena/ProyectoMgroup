<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodoClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_cliente', function (Blueprint $table) {
            $table->integer('metodo_id')->unsigned();
            $table->integer('cliente_id')->unsigned();

            //$table->foreign('metodo_id')->references('id')->on('metodos');
            //$table->foreign('cliente_id')->references('id')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metodo_cliente', function (Blueprint $table) {
            //
        });
    }
}
