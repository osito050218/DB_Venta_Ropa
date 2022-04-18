@extends('layouts.app')
@section('content')
<script src="{{asset('js/clientes.js')}}"></script>
<h1 class="bg-dark text-white text-center" style="font-family:algeria;">Editar Clientes</h1>
<form action="{{route('clientes.update',$clientes->cli_id)}}" method="POST" onsubmit="return validar()">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4 border " style="font-family:algeria;margin: auto;;padding: 20px;margin-top: 20px;">
				<label for="">Nombre</label>
				<input type="text" value="{{$clientes->cli_nombre}}" class="form-control" name="cli_nombre" id="cli_nombre">
				<label for="">Apellido</label>
				<input type="text" value="{{$clientes->cli_apellido}}" class="form-control" name="cli_apellido" id="cli_apellido">
				<label for="">Cedula</label>
				<input type="text" value="{{$clientes->cli_cedula}}" class="form-control" name="cli_cedula" id="cli_cedula">
				<label for="">Telefono</label>
				<input type="text" value="{{$clientes->cli_telefono}}" class="form-control" name="cli_telefono" id="cli_telefono">
				<label for="">Direccion</label>
				<input type="text" value="{{$clientes->cli_direccion}}" class="form-control" name="cli_direccion" id="cli_direccion">
				<br>
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</div>	
</form>
@endsection