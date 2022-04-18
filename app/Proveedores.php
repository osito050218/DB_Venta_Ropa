<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    public $timestamps=false;
    protected $table='proveedor';
    protected $primaryKey='prove_id';


    protected $fillable = [
    'prove_nombre','prove_empresa','prove_direccion','prove_telefono','prove_producto','prove_cantidad',
    ];
}
