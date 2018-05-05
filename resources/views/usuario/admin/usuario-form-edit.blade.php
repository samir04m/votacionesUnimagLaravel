@extends('template.base')

@section('title', 'Editar Usuario')

@section('content')

	<div class="container">
		<div class="center">
			<h4>Actualizar Usuario</h4>
		</div>
		<!-- <form class="form-horizontal" method="POST" action="{{ route('registrar.usuario') }}"> -->
	
		{!! Form::model($usuario, ['route'=>['usuario.update',$usuario->id], 'method'=>'PUT']) !!}
            {{ csrf_field() }}
			<div class="row">
				<div class="input-field col s6">
		        	{!! Form::text('nombre1',null,['required']) !!}
		        	{!! Form::label('nombre1','Primer Nombre') !!}
		        </div>
		        <div class="input-field col s6">
		        	{!! Form::text('nombre2',null,['required']) !!}
		        	{!! Form::label('nombre2','Segundo Nombre') !!}
		        </div>
		        <div class="input-field col s6">
		        	{!! Form::text('apellido1',null,['required']) !!}
		        	{!! Form::label('apellido1','Primer apellido') !!}
		        </div>
		        <div class="input-field col s6">
		        	{!! Form::text('apellido2',null,['required']) !!}
		        	{!! Form::label('apellido2','Segundo apellido') !!}
		        </div>
		        <div class="input-field col s6">
		        	{!! Form::text('codigo',null,['required']) !!}
		        	{!! Form::label('codigo','Codigo') !!}
		        </div>
		        <!-- <div class="input-field col s6">
			          <input name="password" id="password" type="password" required>
			          <label for="password">Contraseña</label>
		        </div> -->
		        <div class="input-field col s6">
			          <select name="rol_id" id="rol_id" required>
			          		@if(isset($datos_select['roles']) && count($datos_select['roles']) > 0)
								
			          			@foreach($datos_select['roles'] as $rol)
			          				@if($usuario->rol_id == $rol->nombre[0])
										<option value="{{$rol->nombre[0]}}" selected>{{$rol->nombre}}</option>
			          				@else
										<option value="{{$rol->nombre[0]}}">{{$rol->nombre}}</option>
			          				@endif
								@endforeach
			          		@else
			          			<option value="null" disabled>No hay opciones</option>
			          		@endif
			          </select>
			          <label for="rol_id">Seleccione un Rol</label>
		        </div>
		        <div class="input-field col s6">
			          <select name="programa_id" id="programa_id" required>
			          		@if(isset($datos_select['programas']) && count($datos_select['programas']) > 0)
								
			          			@foreach($datos_select['programas'] as $programa)
			          				@if($usuario->programa_id == $programa->id)
										<option value="{{$programa->id}}" selected>{{$programa->nombre}}</option>
			          				@else
										<option value="{{$programa->id}}">{{$programa->nombre}}</option>
			          				@endif
								@endforeach
			          		@else
			          			<option value="0" disabled>No hay opciones</option>
			          		@endif
			          </select>
			          <label for="programa_id">Seleccione un programa</label>
		        </div>
		        <div class="input-field col s6">
			          <select name="mesa_id" id="mesa_id" required>
			          		@if(isset($datos_select['mesas']) && count($datos_select['mesas']) > 0)
								
			          			@foreach($datos_select['mesas'] as $mesa)
			          				@if($usuario->mesa_id == $mesa->id)
										<option value="{{$mesa->id}}" selected>{{$mesa->nombre}}</option>
			          				@else
										<option value="{{$mesa->id}}">{{$mesa->nombre}}</option>
			          				@endif
								@endforeach
			          		@else
			          			<option value="0" disabled>No hay opciones</option>
			          		@endif
			          </select>
			          <label for="mesa_id">Seleccione un programa</label>
		        </div>
		        <div class="input-field col s6">
			          <select name="tipo" id="tipo" required>
			          		@if(isset($datos_select['tipos']) && count($datos_select['tipos']) > 0)
								
			          			@foreach($datos_select['tipos'] as $tipo)
			          				@if($usuario->tipo == $tipo)
										<option value="{{$tipo}}" selected>{{$tipo}}</option>
			          				@else
										<option value="{{$tipo}}">{{$tipo}}</option>
			          				@endif
								@endforeach
			          		@else
			          			<option value="0" disabled>No hay opciones</option>
			          		@endif
			          </select>
			          <label for="tipo">Seleccione un tipo</label>
		        </div>



		    </div>
      		<center>
      			<button type="submit" class="btn waves-effect waves-light cyan">Guardar</button>
      		</center>
      	<!-- </form> -->

      	{!! Form::close() !!}
	</div>
	<br><br><br>

@endsection
