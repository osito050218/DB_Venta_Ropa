<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_detalle', function (Blueprint $table) {
            $table->id('fad_id');
            $table->integer('fad_cantidad');
            $table->float('fad_vu');
            $table->float('fad_vt');
            $table->foreignId('pro_id')->references('pro_id')->on('producto');
            $table->foreignId('fac_id')->references('fac_id')->on('facturas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_detalle');
    }
}
