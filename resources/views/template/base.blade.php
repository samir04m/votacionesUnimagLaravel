<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', '') - Votaciones Unimag 2018</title>

	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}"">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}"">
	<link rel="stylesheet" href="{{ asset('css/material-icons.css') }}"">
	
</head>
<body>

	@include('template.modules.header')
	<br>
	<main>
		@yield('content', 'No hay contenido')
	</main>

	@include('template.modules.footer')

	@yield('body', '')

	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
		    $('.modal').modal();
		    $('select').material_select();

		});

	</script>

	@yield('extrajs', '')

	
</body>
</html>
