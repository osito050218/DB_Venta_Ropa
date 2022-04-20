@extends('layouts.app')
@section('content')
<script src="{{asset('js/productos.js')}}"></script>
<h1 class="bg-dark text-white text-center" style="font-family:algeria;">Editar Productos</h1>
<form action="{{route('productos.update',$productos->pro_id)}}" method="POST" onsubmit="return validar()">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4 border " style="font-family:algeria;margin: auto;;padding: 20px;margin-top: 20px;">
				<label for="">Nombre</label>
				<input type="text" value="{{$productos->pro_nombre}}" class="form-control" name="pro_nombre" id="pro_nombre">
				<label for="">Descripcion</label>
				<input type="text" value="{{$productos->pro_descripcion}}" class="form-control" name="pro_descripcion" id="pro_descripcion">
				<br>
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</div>	
</form>
@endsection