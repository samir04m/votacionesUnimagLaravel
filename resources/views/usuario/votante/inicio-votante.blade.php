@extends('template.base')

@section('title', 'Portal Votante')

@section('content')
	<div class="container container-fluid">

		<center>
		    <h4>Bienvenido {{ Auth::user()->nombre1 }} {{ Auth::user()->apellido1 }}</h4>
		</center>

		<div class="row">
			@if(Auth::user()->estado == 'No ha votado')
				<h4>Usted no se encuentra autorizado para votar</h4>
			@endif

			@if(Auth::user()->estado == 'Autorizado' || Auth::user()->estado == 'Votando')
				<h4>Puede realizar la votacion</h4>
			@endif

			@if(Auth::user()->estado == 'Voto')
				<h4>Usted Ya votó, ver certificado</h4>
			@endif
			

		</div>
	</div>

@endsection