@extends('template.base')

@section('title', 'Portal Administrador')

@section('content')

<div class="container">

	<center>
	    <h4>Administrador de Usuarios</h4>
	</center>

	<div class="row">
		
		<div class="col s12">
			@if(count($usuarios) > 0)
				<table class="striped responsive-table highlight">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>2do Nombre</th>
							<th>Apellido</th>
							<th>2do Apellido</th>
							<th>Rol</th>
							<th>Programa</th>
							<th>Mesa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($usuarios as $usuario)
							<tr>
								<td>{{ $usuario->codigo }}</td>
								<td>{{ $usuario->nombre1 }}</td>
								<td>{{ $usuario->nombre2 }}</td>
								<td>{{ $usuario->apellido1 }}</td>
								<td>{{ $usuario->apellido2 }}</td>
								<td>{{ $usuario->rol->nombre }}</td>
								<td>{{ $usuario->programa->nombre }}</td>
								<td>{{ $usuario->mesa->nombre }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<center>
					<br><br>
					<h3 class="truncate grey-text">No hay usuarios registrados</h3>
					<br><br>
				</center>
			@endif
		</div>
	</div>
	<div class="row center"> 
		Crear un Nuevo Usuario <a href="index.php?action=form-usuario" class="btn waves-effect blue btn-floating waves-light"><i class="material-icons">add</i></a>
	</div>
</div>




@endsection