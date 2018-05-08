<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', '') - Votaciones Unimag 2018</title>

	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}"">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}"">
	<link rel="stylesheet" href="{{ asset('css/material-icons.css') }}"">
	<style>
		body {
			background-image: url("{{ asset('imagenes/patron.png') }}");
		}
	</style>
</head>
<body>

	@include('template.modules.header')
	<br>
	<main>
		@yield('content', 'No hay contenido')
	</main>

	@include('template.modules.footer')

	@yield('extrabody', '')

	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/myScript.js') }}"></script>
	

	@yield('extrajs', '')

	
</body>
</html>
