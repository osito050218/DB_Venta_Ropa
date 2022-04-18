<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {    
            $table->id('prove_id');
            $table->string('prove_nombre');
            $table->string('prove_empresa');
            $table->string('prove_direccion');
            $table->string('prove_telefono');
            $table->string('prove_producto');
            $table->string('prove_cantidad');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
}
