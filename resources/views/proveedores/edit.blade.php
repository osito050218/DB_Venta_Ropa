@extends('layouts.app')
@section('content')
<script src="{{asset('js/proveedores.js')}}"></script>
<h1 class="bg-dark text-white text-center" style="font-family:algeria;">Editar Proveedores</h1>
<form action="{{route('proveedores.update',$proveedores->prove_id)}}" method="POST" onsubmit="return validar()">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4 border " style="font-family:algeria;margin: auto;;padding: 20px;margin-top: 20px;">
				<label for="">Nombre</label>
				<input type="text" value="{{$proveedores->prove_nombre}}" class="form-control" name="prove_nombre" id="prove_nombre">
				<label for="">Empresa</label>
				<input type="text" value="{{$proveedores->prove_empresa}}" class="form-control" name="prove_empresa" id="prove_empresa">
				<label for="">Direccion</label>
				<input type="text" value="{{$proveedores->prove_direccion}}" class="form-control" name="prove_direccion" id="prove_direccion">
				<label for="">Telefono</label>
				<input type="number" value="{{$proveedores->prove_telefono}}" class="form-control" name="prove_telefono" id="prove_telefono">
				<label for="">Producto</label>
				<input type="text" value="{{$proveedores->prove_producto}}" class="form-control" name="prove_producto" id="prove_producto">
				<label for="">Cantidad</label>
				<input type="number" value="{{$proveedores->prove_cantidad}}" class="form-control" name="prove_cantidad" id="prove_cantidad">
				<br>
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</div>	
</form>
@endsection