<div id="registro-usuario" class="modal">
    <div class="modal-content">
      	<h4>Registro Usuario</h4>
      	<form class="form-horizontal" method="POST" action="{{ route('registrar.usuario') }}">
            {{ csrf_field() }}
			<div class="row">
		        <div class="input-field col s6">
			          <input name="nombre1" id="nombre1" type="text" required>
			          <label for="nombre1">Primer Nombre</label>
		        </div>
		        <div class="input-field col s6">
			          <input name="nombre2" id="nombre2" type="text" required>
			          <label for="nombre2">Segundo Nombre</label>
		        </div>
		        <div class="input-field col s6">
			          <input name="apellido1" id="apellido1" type="text" required>
			          <label for="apellido1">Primer Apellido</label>
		        </div>
		        <div class="input-field col s6">
			          <input name="apellido2" id="apellido2" type="text" required>
			          <label for="apellido2">Segundo Apellido</label>
		        </div>
		        <div class="input-field col s6">
			          <input name="codigo" id="codigo" type="number" required>
			          <label for="codigo">Codigo</label>
		        </div>
		        <div class="input-field col s6">
			          <input name="password" id="password" type="password" required>
			          <label for="password">Contraseña</label>
		        </div>
		        <div class="input-field col s6">
			          <select name="rol_id" id="rol_id" required>
			          		@if(isset($datos_select['roles']) && count($datos_select['roles']) > 0)
								
			          			@foreach($datos_select['roles'] as $rol)
									<option value="{{$rol->id}}">{{$rol->nombre}}</option>
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
									<option value="{{$programa->id}}">{{$programa->nombre}}</option>
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
									<option value="{{$mesa->id}}">{{$mesa->nombre}}</option>
								@endforeach
			          		@else
			          			<option value="0" disabled>No hay opciones</option>
			          		@endif
			          </select>
			          <label for="mesa_id">Seleccione un programa</label>
		        </div>

		    </div>
      		<center>
      			<button type="submit" class="btn waves-effect waves-light purple">Guardar</button>
      		</center>
      	</form>
    </div>
    <div class="modal-footer">
      	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
 </div>