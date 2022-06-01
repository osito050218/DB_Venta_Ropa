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
				<input type="number" class="form-control" name="usu_cedula" id="usu_cedula">
				
				<label for="">Telefono</label>
				<input type="number" class="form-control" name="usu_telefono" id="usu_telefono">
				
				<label for="">Email</label>
				<input type="text" class="form-control" name="email" id="email">
				
				<label for="password" >Contraseña</label>
				<input type="password" class="form-control" name="password" id="password">
				<br>

				<button type="submit" class="btn btn-success "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
  				<path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
  				<path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
				</svg> Guardar</button>
				<p>
	    	</div>
		</div>
	</div>
</form>
@endsection


