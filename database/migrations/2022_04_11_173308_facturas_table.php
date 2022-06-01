<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {    
            $table->id('fac_id');
            $table->string('fac_no');
            $table->date('fac_fecha');
            $table->float('fac_total');
            $table->float('fac_iva');
            $table->string('fac_tipo_pago'); ///Transferencia_Tarjeta_Efectivo
            $table->float('fac_descuento'); ///porcentaje
            $table->string('fac_observaciones')->nullable();
            $table->integer('fac_estado')->default(1); ///1Activo,0Anulado
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
        Schema::dropIfExists('facturas');
    }
}
