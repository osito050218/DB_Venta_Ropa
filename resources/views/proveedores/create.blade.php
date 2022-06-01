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
	        	<input type="text"  class="form-control" name="prove_nombre" id="prove_nombre">
	        	<label for="">Empresa</label>
	        	<input type="text" class="form-control" name="prove_empresa" id="prove_empresa">
	        	<label for="">Direccion</label>
	        	<input type="text" class="form-control" name="prove_direccion" id="prove_direccion">
				<label for="">Telefono</label>
	        	<input type="number" class="form-control" name="prove_telefono" id="prove_telefono">
	        	<label for="">Producto</label>
	        	<input type="text" class="form-control" name="prove_producto" id="prove_producto">
	        	<label for="">Cantidad</label>
	        	<input type="number" class="form-control" name="prove_cantidad" id="prove_cantidad">
	        	<br>
	        	<button type="submit" class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
  				<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
				</svg> Guardar</button> 
	        	<p>
	    	</div>
	    </div>
	</div>
</form>
@endsection