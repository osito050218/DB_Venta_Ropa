<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {    
            $table->id('fac_id');
            $table->string('fac_cantidad');
            $table->string('fac_subtotal');
            $table->string('fac_descuento');
            $table->string('fac_iva');
            $table->string('fac_total');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('pro_id')->references('pro_id')->on('producto');
            $table->foreignId('cli_id')->references('cli_id')->on('clientes');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
