<?php

namespace App\Http\Controllers;
use App\Clientes;
use Illuminate\Http\Request;
use DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         

        $clientes=Clientes::all();
        return view('clientes.index')
        ->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
        
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
        Clientes::create( $data);
        return redirect(route('clientes'));
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
        $clientes=Clientes::find($id);
        return view('clientes.edit')
        ->with('clientes',$clientes);
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
        $Cli=Clientes::find($id);
        $Cli->update($request->all());
        return redirect(route('clientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura=DB::select("SELECT * FROM facturas where cli_id=$id");

        if(empty($factura)){
             $sms="Eliminado Correctamente";
             Clientes::destroy($id);
        }else{
             $sms="No se puede eliminar ya que tiene facturas";
        }
        // Session::put('sms',$sms);
        // return redirect(route('clientes',1));
        echo "<h1 style='color:#9ACD32' >
            $sms
            <a href='".route('clientes')."' style='color:#7B68EE'>Volver a clientes</a>
            <h1>";

        
    }
}

?>