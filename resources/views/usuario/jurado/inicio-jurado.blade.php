@extends('template.base')

@section('title', 'Portal Jurado')

@section('extrahead')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

@endsection

@section('content')

<div class="container container-fluid">

	<div class="row">
        @if($date['hours'] >= 16)
            <div class="card-panel center">
                <h4>Elecciones Finalizadas</h4>
                <a href="{{route('resultados')}}" class="btn">Ver resultados</a>
            </div>
        @endif
        <a href="{{route('jurado.index')}}" class="btn">Listar Todos</a>
        <div class="right">
            <h5>{{Auth::User()->mesa->nombre}}</h5>
        </div>


    		@if(count($usuarios) > 0)
                <div class="col s12">
                    <div class="card-panel">
                        @if(isset($useri) == false)
                            <div class="col s12 m6">
                                <h4>Listado votantes </h4>
                            </div>
                            <div class="col s12 m6">
                                <form action="{{route('buscarVotante')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="input-field col s8">
                                            <input type="number" name="mesa_id" class="hide" value="{{Auth::User()->mesa_id}}">
                                            <input type="number" name="codigo">
                                            <label for="busqueda">Buscar votante por codigo</label>
                                        </div>
                                        <div class="col s4">
                                            <br>
                                            <button type="submit" class="btn">BUSCAR</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                                <table class="responsive-table highlight display" id="myTable">
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
                                            <th>Estado</th>
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
                                            <td>{{ $usuario->tipo->nombre }}</td>
                                            <td>{{ $usuario->programa->nombre }}</td>
                                            <td>{{ $usuario->estado->nombre }}</td>

                                        @if($date['hours'] >= 8 && $date['hours'] < 16)
                                            <td>
                                                <a href="{{ route('autorizar', $usuario->codigo) }}" class="btn">
                                                    autorizar
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('desautorizar', $usuario->codigo) }}" class="btn grey">
                                                    desautorizar
                                                </a>
                                            </td>
                                        @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        @else
                            <center>
                                <br><br>
                                <h5 class="truncate grey-text">El votante {{$useri->nombre1}} {{$useri->apellido1}} Vota en la mesa {{$useri->mesa->nombre}}</h5>


                                <br><br>
                            </center>
                        @endif
                    </div>

    		@else
    				<center>
    					<br><br>
    					<h3 class="truncate grey-text">No hay usuarios en esta mesa</h3>
    					<br><br>
    				</center>
    		@endif

		</div>
	</div>

</div>

@endsection

@section('extrabody')

@endsection

@section('extrajs')


	<script type="text/javascript">
		$(document).ready(function(){
            $('#myTable').DataTable();

		    @if(Session::has('message'))
		    	Materialize.toast("{{Session::get('message')}}", 3000, 'rounded')
		    @endif



		 	// $('#registro-usuario').modal('open');
		});



	</script>
@endsection
