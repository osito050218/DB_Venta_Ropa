<?php

namespace App\Http\Controllers;
use App\Productos;
use App\Proveedores;
use Auth;
use DB;
use Illuminate\Http\Request;
//use Session;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $productos=DB::select("
            SELECT * FROM producto pro
            JOIN proveedor prove ON pro.prove_id=prove.prove_id
        ");
        return view('productos.index')
        ->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores=Proveedores::all();
        return view('productos.create')
        ->with('proveedores',$proveedores);
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
        //dd($data);
        // $data['prove_id']=Auth::user()->prove_id;
        Productos::create( $data);
        return redirect(route('productos'));
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
        $productos=Productos::find($id);
        return view('productos.edit')
        ->with('productos',$productos);
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
        $Pro=Productos::find($id);
        $Pro->update($request->all());
        return redirect(route('productos'));
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
             Productos::destroy($id);
        }else{
             $sms='No se puede eliminar ya que tiene facturas';
        }
        //dd($sms);
        //Session::put('sms',$sms);
        echo "<h1 style='color:#9ACD32' >
            $sms
            <a href='".route('productos')."' style='color:#7B68EE'>Volver a productos</a>
            <h1>";

        //return redirect(route('productos'));
    }
}
