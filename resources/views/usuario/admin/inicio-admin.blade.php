@extends('template.base')

@section('title', 'Portal Administrador')

@section('content')

<div class="container container-fluid">

	<center>
	    <h4>Administrador de Usuarios</h4>
	</center>

	<div class="row">
		
		<div class="col s12">
			@if(count($usuarios) > 0)
				<table class="responsive-table highlight">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Nombre 2</th>
							<th>Apellido</th>
							<th>Apellido 2</th>
							<th>Rol</th>
							<th>Tipo</th>
							<th>Programa</th>
							<th>Mesa</th>
							<th>Estado</th>
							<th></th>
							<th></th>
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
								<td>{{ $usuario->tipo }}</td>
								<td>{{ $usuario->programa->nombre }}</td>
								<td>{{ $usuario->mesa->nombre }}</td>
								<td>{{ $usuario->estado }}</td>
								<td>
									<a href="{{ route('usuario.form-edit', $usuario->codigo) }}" class="btn btn-floating">
										<i class="small material-icons">edit</i>
									</a>
								</td>
								<td>
									<a href="{{ route('usuario.delete', $usuario->id) }}" class="btn red btn-floating btnDelete">
										<i class="small material-icons">delete_forever</i>
									</a>
								</td>	
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
		Crear un Nuevo Usuario 
		<a class="btn btn-floating waves-effect waves-light blue modal-trigger" href="#registro-usuario"><i class="material-icons">add</i></a>
	</div>
</div>

@endsection

@section('extrabody')
	@include('template.modules.usuario-registro-modal')

	@include('template.modules.modal-confirmar-eliminacion')
@endsection

@section('extrajs')
	<script type="text/javascript">
		$(document).ready(function(){

		    @if(Session::has('message'))
		    	Materialize.toast("{{Session::get('message')}}", 3000, 'rounded')	
		    @endif

		 	// $('#registro-usuario').modal('open');
		});



	</script>
@endsection