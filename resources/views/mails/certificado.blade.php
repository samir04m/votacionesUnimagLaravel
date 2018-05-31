<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificado electoral</title>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
    <div class="container">
    	<div class="card-panel z-depth-2">
    		<div class="center">
    			<h5><b>UNIVERSIDAD DEL MAGDALENA</b></h5>
    			<h6><b>CERTIFICADO ELECTORAL ELECCIONES 2018</b></h6>
    			Certificano No. 1998210013001
    			<br><br>
    		</div>
    		<big><div class="container">
    			<div class="row">
    				<div class="left"><b>Codigo</b></div>
    				<div class="right">{!!$codigo!!}</div>
    			</div>
    			<div class="row">
    				<div class="left"><b>Nombre - Apellido</b></div>
    				<div class="right">{!!$nombre1!!} {!!$apellido1!!}</div>
    			</div>
    			<div class="row">
    				<div class="left">
    					<b>Lugar</b><br>
    					{!!$lugar!!}
    				</div>
    				<div class="right">
    					<b>Mesa</b><br>
    					{!!$mesa!!}
    				</div>
    			</div>
    			<div class="row">
    				<div class="left"><b>Ciudad - Departamento</b></div>
    				<div class="right">Santa Marta - MAG</div>
    			</div>
    		</div></big>
    	</div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
