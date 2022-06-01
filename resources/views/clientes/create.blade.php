@extends('layouts.app')
@section('content')
<script src="{{asset('js/clientes.js')}}"></script>
<h1 style="font-family:algeria;text-align: center;" class="bg-dark text-white text-center">Formulario de Clientes</h1>
<form action="{{route('clientes.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4 border" style="font-family:algeria;margin: auto;;padding: 20px;margin-top: 20px;">
	        	<label for="">Nombre</label>
	        	<input type="text" class="form-control" name="cli_nombre" id="cli_nombre">
	        	<label for="">Apellido</label>
	        	<input type="text" class="form-control" name="cli_apellido" id="cli_apellido">
	        	<label for="">Cedula</label>
	        	<input type="number" class="form-control" name="cli_cedula" id="cli_cedula">
	        	<label for="">Telefono</label>
	        	<input type="number" class="form-control" name="cli_telefono" id="cli_telefono">
	        	<label for="">Direccion</label>
	        	<input type="text" class="form-control" name="cli_direccion" id="cli_direccion">
	        	<br>
	        	<button type="submit" class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
               	<path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
	    	   	</svg> Guardar</button> 
	        	<p>
	    	</div>
	    </div>
	</div>
</form>
@endsection