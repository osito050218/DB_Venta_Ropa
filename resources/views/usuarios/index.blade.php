@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white text-center" style="font-family:algeria;">Lista de usuarios</h2>
<a href="{{route('usuarios.create')}}" class="btn btn-primary">Nuevo</a>


<p>
	<div class="col-md-12">
<table class="table table-bordered">
	<th>#</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Cedula</th>
	<th>Telefono</th>
	<th>email</th>
@foreach($usuarios as $u)
<tr>
	<td>{{$loop->iteration}}</td>
	<td>{{ $u-> usu_nombre}}</td>
	<td>{{ $u-> usu_apellido}}</td>
	<td>{{ $u-> usu_cedula}}</td>
	<td>{{ $u-> usu_telefono}}</td>
	<td>{{ $u-> email}}</td>
</tr>
@endforeach
</table>
</div>

@endsection