<?php
if(isset($facturas)){
	$fac_id=$facturas->fac_id;
	$cli_id=$facturas->cli_id;
	$fac_no=$facturas->fac_no;
	$fac_fecha=$facturas->fac_fecha;
	$fac_descuento=$facturas->fac_descuento;
	$fac_iva=$facturas->fac_iva;
	$fac_total=$facturas->fac_total;
	$fac_tipo_pago=$facturas->fac_tipo_pago;
	$fac_observaciones=$facturas->fac_observaciones;

}else{

	$fac_id="";
	$cli_id="";
	$fac_no="";
	$fac_fecha=date('Y-m-d');
	$fac_descuento=0;
	$fac_iva=0;
	$fac_total=0;
	$fac_tipo_pago="EFECTIVO";
	$fac_obseraciones="";
  

}

?>	
<script src="{{asset('js/facturas.js')}}"></script>
<form action="{{route('facturas.store')}}" method="POST" onsubmit="return validar()" >

	@csrf
		<div class="row">
			<div class="col-md-3">
					<label>Clientes</label>
					<select required name="cli_id" id="cli_id" class="form-control">
								<option value="">-Elija un cliente-</option>
								@foreach($clientes as $c)
									@if($c->cli_id ==$cli_id)
										<option selected value="{{$c->cli_id}}">{{$c->cli_nombre}}  {{$c->cli_apellido}}</option>
									@else
										<option value="{{$c->cli_id}}">{{$c->cli_nombre}}  {{$c->cli_apellido}}</option>
									@endif
								@endforeach
							</select>
      </div>
    
      		<div class="col-md-3 ">
						<label for="">Numero de factura</label>
	      		<input type="number" value="{{$fac_no}}" class="form-control" name="fac_no" id="fac_no">
      		</div>

          <div class="col-md-3">
	        	<label for="">Fecha</label>
	        	<input type="date" class="form-control" name="fac_fecha" value="{{$fac_fecha}}" id="fac_fecha">
	        </div>

	        <div class="col-md-3">
	        	<label for="">Descuento</label>
	        	<input type="number" class="form-control"  name="fac_descuento" value="{{$fac_descuento}}" id="fac_descuento">
	        </div>

	        <div class="col-md-3">
	        	<label for="">Iva</label>
	        	<input type="number" class="form-control"  value="{{$fac_iva}}"  name="fac_iva" id="fac_iva">
	        </div>

	        <div class="col-md-3">
	        	<label for="">Total</label>
	        	<input type="number" class="form-control" value="{{$fac_total}}" name="fac_total" id="fac_total">
	        </div>

	        <div class="col-md-3">
	        	<label for="">Forma de pago</label>
	        	<select name="fac_tipo_pago" id="fac_tipo_pago" class="form-control">
          	<option value="EFECTIVO">EFECTIVO</option>
          	<option value="TRANSFERENCIA">TRANSFERENCIA</option>
          	<option value="TARJETA">TARJETA</option>
          </select>
	        </div>

	        <div class="col-md-3">
	        	<label for="">Observaciones</label>
	        	<input type="text"  class="form-control" name="fac_observaciones" id="fac_observaciones">
	        </div>

	        <p>
        	<br>
	        	<button type="submit" class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
 				</svg> Guardar</button> 

	        	<p>
	    	</div>
</form>

 <p>

<form action="{{route('factura.detalle')}}" method="POST" onsubmit="return validar()">
        @csrf
     <div class="container">
<h4 class="bg-dark text-white" align="center">Detalle</h4>  

  <table class="table">
<tr>
    <th> # </th>
    <th> Cantidad </th>
    <th>Productos</th>
    <th>Vu</th>
    <th>Vt</th>
    <th>...</th>
   </tr>
   <td></td> 
     <td>
      <input id="fac_id" name="fac_id" value="{{$fac_id}}" type="hidden">
      <input id="fad_cantidad" type="number" class="form-control @error('Cantidad') is-invalid @enderror" placeholder="Cantidad" aria-label="Surname" aria-describedby="addon-wrapping" name="fad_cantidad" value="{{ old('fad_cantidad') }}" required autocomplete="mec_apellido" autofocus>
      @error('Cantidad')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
      
     </td>


     <td>
      <select style="width: 200px" class="form-control  " id="pro_id" type="number" class="form-control @error('Producto') is-invalid @enderror" placeholder="Producto" aria-label="Surname" aria-describedby="addon-wrapping" name="pro_id" value="{{ old('pro_id') }}" required autocomplete="pro_id" autofocus>
        <option value="">Elija un producto</option>
       @foreach($productos  as  $p)
        <option value="{{$p->pro_id}}">{{$p->pro_nombre}}</option>
        @endforeach
      </select>
      @error('Producto')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror


     </td>

     <td>

     	<input id="fad_vu" type="number" class="form-control @error('Vu') is-invalid @enderror" placeholder="Vu" aria-label="Surname" aria-describedby="addon-wrapping" name="fad_vu" value="{{ old('fad_vu') }}" required autocomplete="fad_vu" autofocus>
      @error('Vu')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror 
     </td>

     <td>
       <input type="text" name="fad_vt" id="fad_vt" style="width:100px" readonly="" class="form-control">
     </td>
     <td>
     <button type="submit" class="btn btn-info" name="btn_detalle" value="btn_detalle">+</button>
   </td>
   @isset($detalle)
   <?php
   	$subt=0;
   ?>
   @foreach($detalle as $fad)
   <?php $subt+=$fad->fad_vt?>
    <tr>
     <td>{{$loop->iteration }}</td>
     <td>{{$fad->fad_cantidad }}</td>
     <td>{{$fad->pro_nombre }}</td>
     <td class="text-left">{{number_format($fad->fad_vu,2)}}</td>
     <td class="text-left">{{number_format($fad->fad_vt,2)}}</td>  
   <td>
   <button class="btn btn-danger btn-sm" name="btn_eliminar" value="{{$fad->fad_id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  	<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
	  </svg></button>
   </td>
   </tr>
   @endforeach
   <?php
    //$vt=($subt-$fac_descuento)+$fac_iva;
    $desc=$fac_descuento/100*$subt;
    $fva=$subt*$fac_iva/100;
    $vt=($subt-$desc)+$fva;
   ?>
   <tr>
   		<td colspan="4" class="text-right"><b>Subt:</b></td>
   		<td class="text-align">{{number_format($subt,2)}}</td>
   </tr>
   <tr>
   		<td colspan="4" class="text-right"><b>Desc:</b></td>
   		<td class="text-align">{{number_format($desc,2)}}</td>
   </tr>
   <tr>
   		<td colspan="4" class="text-right"><b>IVA:</b></td>
   		<td class="text-align">{{number_format($fva,2)}}</td>
   </tr>
   <tr>
   		<td colspan="4" class="text-right"><b>Valor Total:</b></td>
   		<td class="text-align">{{number_format($vt,2)}}</td>
   </tr>
   @else
   <tr><th colspan="5" class="alert alert-warning">No existen datos</th></tr>
   @endisset
  </table>
</form>

<script >
	window.onload=function(){
			const obj_cant=document.querySelector("#fad_cantidad");
			const obj_vu=document.querySelector("#fad_vu");
			obj_cant.addEventListener("change",()=>{
			calculos();
		});

		obj_vu.addEventListener("change",()=>{
			calculos();
		});
	}

	const calculos=()=>{
		const vc=document.querySelector("#fad_cantidad");
		const vu=document.querySelector("#fad_vu");
		const vt=vc.value*vu.value;
    document.querySelector("#fad_vt").value=vt;
	}
</script>
