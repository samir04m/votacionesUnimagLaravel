@extends('template.base')

@section('title', 'Portal Votante')

@section('content')
	<div class="container">

		<center>
		    <h4>Targetón Electoral</h4>
		    <!-- <hr> -->
		    <br>
		</center>

		<div class="row">
			@if(Auth::user()->estado == 'No ha votado')
				<div class="center grey-text darken-5">
					<br><br>
					<h3>Lo sentimos :(</h3>
					<h4>Actualmente <b>No</b> estas autorizado para votar</h4>
				</div>
			@endif

			@if(Auth::user()->estado == 'Autorizado' || Auth::user()->estado == 'Votando')
				@if(count($organos) > 0)
					<ul class="collapsible popout" data-collapsible="accordion">
						@foreach($organos as $organo)
						    <li>
						      	<div class="collapsible-header"><i class="material-icons">portrait</i> {{ $organo->nombre }}</div>
						      	<div class="collapsible-body">
						      		<div class="row">
							      		@foreach($organo->candidatos as $candidato)
							      			<div class="col s12 m6">
												<div class="card-panel hoverable grey lighten-4">
													<div class="right">
														{{ $candidato->usuario->nombre1 }}
														{{ $candidato->usuario->apellido1 }}
														
													</div>
												</div>
							      			</div>
							      		@endforeach
						      		</div>
						      	</div>
						    </li>
					    @endforeach
					</ul>
				@else
					<div class="center grey-text darken-5">
						<br><br>
						<h4>No hay organos</h4>
					</div>
				@endif

			@endif

			@if(Auth::user()->estado == 'Voto')
				<h4>Usted Ya votó, ver certificado</h4>
			@endif
			

		</div>
	</div>

@endsection