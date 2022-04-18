@extends('layouts.app')
@section('content')
<script src="{{asset('js/proveedores.js')}}"></script>
<h1 style="font-family:algeria;text-align: center;" class="bg-dark text-white text-center">Formulario de Proveedores</h1>
<form action="{{route('proveedores.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4 border" style="font-family:algeria;margin: auto;;padding: 20px;margin-top: 20px;">
	        	<label for="">Nombre</label>
	        	<input type="text" class="form-control" name="prove_nombre" id="prove_nombre">
	        	<label for="">Empresa</label>
	        	<input type="text" class="form-control" name="prove_empresa" id="prove_empresa">
	        	<label for="">Direccion</label>
	        	<input type="text" class="form-control" name="prove_direccion" id="prove_direccion">
				<label for="">Telefono</label>
	        	<input type="text" class="form-control" name="prove_telefono" id="prove_telefono">
	        	<label for="">Producto</label>
	        	<input type="text" class="form-control" name="prove_producto" id="prove_producto">
	        	<label for="">Cantidad</label>
	        	<input type="number" class="form-control" name="prove_cantidad" id="prove_cantidad">
	        	<br>
	        	<button type="submit" class="btn btn-success">Guarda</button> 
	        	<p>
	    	</div>
	    </div>
	</div>
</form>
@endsection