<?php

namespace App\Http\Controllers;
use App\Proveedores;
use Illuminate\Http\Request;
use DB;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores=Proveedores::all();
        return view('proveedores.index')
        ->with('proveedores',$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('proveedores.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Proveedores::create( $data);
        return redirect(route('proveedores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores=Proveedores::find($id);
        return view('proveedores.edit')
        ->with('proveedores',$proveedores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Prove=Proveedores::find($id);
        $Prove->update($request->all());
        return redirect(route('proveedores'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $factura=DB::select("SELECT * FROM factura_detalle where pro_id=$id");

        if(empty($factura)){
             $sms='Eliminado Correctamente';
             Proveedores::destroy($id);
        }else{
             $sms='No se puede eliminar ya que tiene facturas';
        }
        //dd($sms);
        //Session::put('sms',$sms);
        echo "<h1 style='color:#9ACD32' >
            $sms
            <a href='".route('proveedores')."' style='color:#7B68EE'>Volver a proveedores</a>
            <h1>";

        //return redirect(route('productos'));
    }
}
