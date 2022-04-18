@extends('layouts.app')
@section('content')
<script src="{{asset('js/usuarios.js')}}" ></script>
<h1 class="bg-dark text-white text-center" style="font-family:algeria;">Formulario de Usuarios</h1>
<form action="{{route('usuarios.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4 border " style="font-family:algeria;margin: auto;;padding: 20px;margin-top: 20px;">

						
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="usu_nombre" id="usu_nombre">
									
				<label for="">Apellido</label>
				<input type="text" class="form-control" name="usu_apellido" id="usu_apellido">
			    
				<label for="">Cedula</label>
				<input type="text" class="form-control" name="usu_cedula" id="usu_cedula">
				
				<label for="">Telefono</label>
				<input type="text" class="form-control" name="usu_telefono" id="usu_telefono">
				
				<label for="">Email</label>
				<input type="text" class="form-control" name="email" id="email">
				
				<label for="password" >Contraseña</label>
				<input type="password" class="form-control" name="password" id="password">
				<br>

				<button type="submit" class="btn btn-success ">Guardar</button>
				<p>
	    	</div>
		</div>
	</div>
</form>
@endsection


