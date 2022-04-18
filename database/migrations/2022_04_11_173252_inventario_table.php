<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {    
            $table->id('inv_id');
            $table->string('inv_cantidad');
            $table->string('inv_fecha');
            $table->string('inv_precio');
            $table->foreignId('prove_id')->references('prove_id')->on('proveedor');
            $table->foreignId('pro_id')->references('pro_id')->on('producto');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
}
