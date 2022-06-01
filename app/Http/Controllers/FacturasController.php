<?php

namespace App\Http\Controllers;
use App\Facturas;
use App\Clientes;
use App\Detalle;
use DB;
use PDF;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $facturas=Facturas::all();
        // return view('facturas.index')
        // ->with('facturas',$facturas);
        $data=$request->all();
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');
         if(isset($data['desde'])){
        $desde=$data['desde'];
        $hasta=$data['hasta'];  
        }

        // $facturas=DB::select("
        //     SELECT * FROM facturas f
        //     JOIN clientes c ON f.cli_id=c.cli_id
        //     WHERE f.fac_fecha BETWEEN '$desde' AND '$hasta'
        // ");

        $sql="
        SELECT f.fac_no,
        f.cli_id,
        f.fac_fecha,
        f.fac_id,
        f.fac_estado,
        SUM(fd.fad_vt) AS total,
        c.*
        FROM facturas f
        JOIN clientes c ON f.cli_id=c.cli_id
        JOIN factura_detalle fd ON f.fac_id=fd.fac_id
        WHERE f.fac_fecha BETWEEN '$desde' AND '$hasta'
        GROUP BY f.fac_no,f.cli_id,f.fac_fecha,f.fac_id, f.fac_estado  ";

        $facturas=DB::select($sql);
        
    

        if(isset($data['btn_pdf'])){
        $data=['facturas'=>$facturas];

        $pdf = PDF::loadView('facturas.reporte', $data);
        // $pdf->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')
        return $pdf->stream('invoice.pdf');

        }


        return view('facturas.index')
        ->with('facturas',$facturas)
        ->with('desde', $desde)
        ->with('hasta',$hasta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=DB::select("SELECT *FROM clientes");
        $productos=DB::select("SELECT *FROM producto");
        return view('facturas.create')
        ->with('clientes',$clientes)
        ->with('productos',$productos);
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

        $facturas=Facturas::create($data);
        return redirect(route('facturas.edit',$facturas->fac_id));
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
        $facturas=Facturas::find($id);
        $clientes=DB::select("SELECT *FROM clientes");
        $productos=DB::select("SELECT *FROM producto");
        $detalle=DB::select("SELECT *FROM factura_detalle fd 
                           JOIN producto p ON fd.pro_id=p.pro_id
                           WHERE fd.fac_id=$id");
        return view('facturas.edit')
        ->with('facturas',$facturas)
        ->with('clientes',$clientes)
        ->with('productos',$productos)
        ->with('detalle',$detalle);
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
        $Fac=Facturas::find($id);
        $Fac->update($request->all());
        return redirect(route('facturas.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Facturas::destroy($id);
        return redirect(route('facturas.destroy'));
    }

    public function detalle(Request $req)
    {
        $datos=$req->all();
         $fac_id=$datos['fac_id'];
        if(isset($datos['btn_detalle'])=='btn_detalle'){
            ///Guardar el detalle
        Detalle::create($datos);
        }
        if(isset($datos['btn_eliminar'])>0){
            ///Eliminar el detalle
            //dd($datos);
            $fad_id=$datos['btn_eliminar'];
            Detalle::destroy($fad_id);

        }
        return redirect(route('facturas.edit',$fac_id));
    }
    public function facturas_pdf($fac_id){
        // die($fac_id);

        $facturas=DB::select("
            SELECT * FROM facturas f 
            JOIN clientes c ON c.cli_id=f.cli_id
            WHERE f.fac_id=$fac_id ");

        $detalle=DB::select("SELECT * FROM factura_detalle d
            JOIN producto p ON p.pro_id=d.pro_id
            WHERE d.fac_id=$fac_id");

        $pdf = PDF::loadView('facturas.pdf',['facturas'=>$facturas[0],'detalle'=>$detalle ]);
        return $pdf->stream('facturas.pdf');
        // $pdf = app('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Hola mundo</h1>');
        // return $pdf->stream();
    }

     public function facturas_anular($fac_id)
    {
        DB::update("UPDATE facturas SET fac_estado=2 where fac_id=$fac_id");
        return redirect(route('facturas.index'));
    }
}
