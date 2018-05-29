@extends('template.base')

@section('title', 'Portal Votante')

@section('content')
<div class="container">

	<div class="row">
		@if($date['hours'] >= 8 && $date['hours'] < 16)
			@if(Auth::user()->estado_id == 1)
				<div class="center grey-text darken-5">
					<br><br>
					<h3>Lo sentimos :(</h3>
					<h4>Actualmente <b>No</b> estas autorizado para votar</h4>
				</div>
			@endif

			@if(Auth::user()->estado_id == 2 || Auth::user()->estado_id == 3)
				<center><h4>Targetón Electoral</h4></center>
				@if(count($organos) > 0)
					<ul class="collapsible popout" data-collapsible="accordion">
						@foreach($organos as $organo)
						    <li>
						      	<div class="collapsible-header waves-effect waves-teal"><i class="material-icons">portrait</i> {{ $organo->nombre }}</div>
						      	<div class="collapsible-body grey lighten-3">
						      		<div class="row">
							      		@foreach($organo->candidatos as $candidato)
							      			<div class="col s12 m4">
												<div class="card horizontal hoverable waves-effect waves-teal panel-candidato" id="{{$candidato->id}}" title="{{$candidato->usuario->nombre1}} {{$candidato->usuario->apellido1}}" data-organo="{{$candidato->organo_id}}">
													<div class="card-image">
														<img src="{{ asset('imagenes/candidatos/'.$candidato->foto) }}" class="circle responsive-img">
													</div>
													<div class="card-stacked">

														<div class="card-content center-align">
															<div class="candidato-numero center">{{ $candidato->numero }}</div>
															<div class="candidato-nombre truncate">
																{{ $candidato->usuario->nombre1 }}
															 	{{ $candidato->usuario->apellido1 }}
															 </div>
															@if($candidato->usuario->tipo)
																<div class="candidato-tipo grey-text">{{ $candidato->usuario->tipo->nombre }}</div>
															@endif

														</div>

													</div>


												</div>
							      			</div>
							      		@endforeach
						      		</div>
						      	</div>
						    </li>
					    @endforeach
					</ul>

					<div class="fixed-action-btn">
					    <button class="btn-large waves-effect waves-light cyan darken-2 z-depth-4 pulse" id="votar">
					      	<big><b>votar</b></big>
					    </button>
				  	</div>

				  	<form action="{{ route('votante.votar') }}" method="POST" id="candidatosSeleccionados" class="hide">
				  		 {{ csrf_field() }}
				  		<input type="number" name="mesa_id" value="{{Auth::User()->mesa_id}}">
			  		</form>

				@else
					<div class="center grey-text darken-5">
						<br><br>
						<h4>No hay organos</h4>
					</div>
				@endif

			@endif

		@endif

		@if(Auth::user()->estado_id == 4)
			<center><h4>Certificado Electoral</h4></center>
			@include('template.modules.certificado')
			<form action="{{route('enviarCertificado')}}" method="post" id="formCertificado" class="hide">
					{{ csrf_field() }}
					<input type="text" name="useremail" value="{{ Auth::User()->email}}">
					<input type="text" name="codigo" value="{{ Auth::User()->codigo}}">
					<input type="text" name="nombre1" value="{{ Auth::User()->nombre1}}">
					<input type="text" name="apellido1" value="{{ Auth::User()->apellido1}}">
					<input type="text" name="lugar" value="{{ Auth::User()->mesa->lugar->nombre}}">
					<input type="text" name="mesa" value="{{ Auth::User()->mesa->nombre}}">
			</form>
			<center>
				<button class="btn blue" id="sendEmail">Enviar a mi correo</button>
			</center>
		@else

			@if($date['hours'] >= 0 && $date['hours'] < 8)
			<div class="card-panel center">
				<h3>Aun no inician las votaciones</h3>
				<h5>El horario para votar es de 8 am a 4 pm</h5>
			</div>
			@endif
			@if($date['hours'] >= 16 && $date['hours'] <= 23)
			<div class="card-panel center">
				<h3>La votaciones esta cerradas</h3>
				<h5>A las 4pm finalizo el ciclo de votacion</h5>
			</div>
			@endif
		@endif



	</div>
</div>


@endsection

@section('extrajs')
	<script type="text/javascript">

		$(document).ready(function(){
  			$('.collapsible').collapsible('open', 0);

			$('#sendEmail').click(function(){
				$('#formCertificado').submit();
			});

  			candidatos_seleccionados = new Object();

  			$('.panel-candidato').click(function(){
  				var me = $(this);
				var candidato_id = me.attr('id');
				var organo_id = me.attr('data-organo');

				if (candidatos_seleccionados[parseInt(organo_id)] != ''){
					var string_id = '#'+candidatos_seleccionados[organo_id];
					$(string_id).removeClass('cyan darken-1 white-text');
				}
				me.addClass('cyan darken-1 white-text');
				candidatos_seleccionados[organo_id] = candidato_id;

				console.log(candidatos_seleccionados);
  			});

  			$('button#votar').click(function(){
				var nSeleccionados = Object.keys(candidatos_seleccionados).length;
				if (nSeleccionados == {{count($organos)}}){
					var formulario = $('#candidatosSeleccionados');
					for (var i in candidatos_seleccionados){
						var input = $('<input/>', {
							'type': 'text',
							'name': 'candidato_'+parseInt(i),
							'value': candidatos_seleccionados[i]
						});
						console.log(input);
						formulario.append(input)
					}

					formulario.submit();
				}else{
					Materialize.toast("Debe votar en cada uno de los organos", 4000, 'rounded')
				}
			});

			@if(Session::has('message'))
		    	Materialize.toast("{{Session::get('message')}}", 3000, 'rounded')
		    @endif

		});

	</script>
@endsection
