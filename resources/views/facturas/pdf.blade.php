<style>
	{
		font-family:sans-serif;
		font-size: 12px;
	}
</style>


<h3>Factura No: {{$facturas->fac_no}}</h3>
<h3>Cliente: {{$facturas->cli_nombre}}</h3>
<h3>No Cedula: {{$facturas->cli_cedula}}</h3>
<h3>Direccion: {{$facturas->cli_direccion}}</h3>


<div style="background:#2BA0CC; text-align:center;">Detalle factura</div>
<table style="width:85%">
	<tr>
		<th>#</th>
		<th>Cantidad</th>
		<th>Producto</th>
		<th>Vu</th>
		<th>Vt</th>
	</tr>
	<?php
		$subt=0;
	?>
@foreach($detalle as $d)
<?php $subt+=$d->fad_vt ?>
<tr>
	<td>{{$loop->iteration}}</td>
	<td style="text-align: center;">{{$d->fad_cantidad}}</td>
	<td style="text-align: center;">{{$d->pro_nombre}}</td>
	<td style="text-align: center;">{{ number_format($d->fad_vu,2)}}</td>
	<td style="text-align: center;">{{ number_format($d->fad_vt,2)}}</td>


</tr>
@endforeach
<?php
$desc=0.05*$subt;
$fva=$subt*0.12;
$vt=($subt-$desc)+$fva;
?>
<br>
<br>
<tr>
	<td colspan="3" style="text-align: right,"><b>Subt:</b></td>
	<td></td>
	<td style="text-align: center;">{{number_format($subt,2)}}$</td>
</tr>
<tr>
	<td colspan="3" style="text-align: right,"><b>Desc:</b></td>
	<td></td>
	<td style="text-align: center;">{{number_format($desc,2)}}$</td>

</tr>
<tr>
	<td colspan="3" style="text-align: right,"><b>Iva:</b></td>
	<td></td>
	<td style="text-align: center;">{{number_format($fva,2)}}$</td>

</tr>
<tr>
	<td colspan="3" style="text-align: right,"><b>Total:</b></td>
	<td></td>
	<td style="text-align: center;">{{number_format($vt,2)}}$</td>

</tr>
</table>