<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>
<body id="index">

	<section class="valign-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12 offset-m1 m10 offset-l3 l6">
					<div class="card" id="card-login">
						<form action="{{ route('login') }}" method="POST" role="form">
							{{ csrf_field() }}
							<div class="card-content grey lighten-4">
								<div class="center-align"><b>Inicio de sesión</b></div>
								<hr><br>
								<div class="input-field">
									<input type="number" name="codigo" id="codigo" required="required">
									<label for="codigo">Codigo:</label>
								</div>
								<div class="input-field">
									<input type="password" name="password" id="password" required="required">
									<label for="password">Contraseña</label>
								</div>

								<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
	      						<label for="remember">Recordar mis datos</label>


							</div>
							

							<div class="card-action center-align blue-grey lighten-4">
								<button type="submit" name='submit' value="Submit" class="btn btn-large waves-effect waves-light cyan accent-4 hoverable" id="btnLogin">Ingresar</button>
                                    
							</div>
						</form>

					</div>
					<!-- <div class="card-panel grey lighten-4 z-depth-4 hoverable">
						<a class="" href="{{ route('password.request') }}">	
							Olvidastes tu contraseña?
                        </a>			
					</div> -->
					@if ($errors->has('codigo'))
						<div class="card-panel red white-text">
                            <strong>{{ $errors->first('codigo') }}</strong>
							
						</div>
                    @endif
						
				</div>
			</div>
		</div>
	</section>

	<div id="myModal" class="modal">
		<div class="modal-content">
			<h4 id="titulo-modal"></h4>
			<p class="flow-text" id="mensaje-modal"></p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-purple btn-flat">Cerrar</a>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>

	<script type="text/javascript">
		$(function(){
			$('#codigo').val("2015113040");	
			$('#password').val("1234");	
		});
	</script>

</body>
</html>