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
        Schema::create('cliente_metodo_pago', function (Blueprint $table) {

            
            $table->foreignId('metodo_pago_id')->constrained('metodo_pagos');
            $table->foreignId('cliente_id')->constrained('clientes');

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
