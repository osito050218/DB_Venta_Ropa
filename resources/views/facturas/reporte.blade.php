<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >

<h2 align="center" style="color:darkmagenta;">PDF del Reporte</h2>
<table class="table table-bordered"style="text-align:center;" align="center" >
	<thead class="thead-dark">
    <tr>
      <th>#</th>
			<th>Nº de Factura</th>
			<th>Nombre</th>
			<th>Fecha</th>
			<th>Total</th>
    </tr>
  </thead>
  <?php
		$subt=0;
		$x=1;
	?>
@foreach($facturas as $fac)


@if($fac->fac_estado==1)
<?php 
   $subt+=$fac->total;
?>
<tr>
	<td>{{$x++}}</td>
	<td>{{$fac->fac_no}}</td>
	<td>{{$fac->cli_nombre}}</td>
	<td>{{$fac->fac_fecha}}</td>
	<td>{{ number_format($fac->total,2)}}</td>
</tr>
@endif

@endforeach


<tr>
	<td colspan="3" style="text-align: right,"><b>Totales:</b></td>
	<td></td>
	<td style="text-align: center;">{{number_format($subt,2)}}</td>
</tr>

</table>