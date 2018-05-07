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
						      	<div class="collapsible-body grey lighten-4">
						      		<div class="row">
							      		@foreach($organo->candidatos as $candidato)
							      			<div class="col s12 m6">
												<div class="card-panel hoverable panel-candidato" id="{{$candidato->id}}" title="{{$candidato->usuario->nombre1}} {{$candidato->usuario->apellido1}}" data-organo="{{$candidato->organo_id}}">
													<div class="col s12 m5">
														<img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=img+placeholder" class="circle responsive-img">
													</div>
													<div class="col s12 m7 center-align">
														<div class="candidato-numero center">#{{ $candidato->numero }}</div> 
														<div class="candidato-nombre">
															{{ $candidato->usuario->nombre1 }} 
														 	{{ $candidato->usuario->apellido1 }}
														 </div> 
														<div class="candidato-tipo grey-text">{{ $candidato->usuario->tipo }}</div>
														

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

@section('extrajs')
	<script type="text/javascript">
		
		$(document).ready(function(){
  			$('.collapsible').collapsible('open', 0);

  			candidatos_seleccionados = new Object();

  			$('.panel-candidato').click(function(){
  				var me = $(this);

  				if (candidatos_seleccionados[me.attr('data-organo')] == null){

  					addSeleccionado(me.attr('data-organo'), me.attr('id') );
  					// console.log(candidatos_seleccionados[me.attr('data-organo')] );
  	
  					$(this).addClass('cyan lighten-2');
  					console.log('candidatos seleccionado',candidatos_seleccionados);
  				}else{
  					console.log('Ya seleccionadoa');
  					
  				}


  				console.log("Ha selecionado a",$(this).attr('id'),"-",$(this).attr('title'));
  			});

		});

		function organoSeleccionado(organo){
			console.log('nada');
		}

		function addSeleccionado(organo_id, candidato_id){
			// console.log(typeof(organo_id));
			candidatos_seleccionados[organo_id] = candidato_id;
			// candidatos_seleccionados.shift();
		}

	</script>
@endsection