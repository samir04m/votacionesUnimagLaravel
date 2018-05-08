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
				<div class="right">{{ Auth::User()->codigo }}</div>
			</div>
			<div class="row">
				<div class="left"><b>Nombre - Apellido</b></div>
				<div class="right">{{ Auth::User()->nombre1 }} {{ Auth::User()->apellido1 }}</div>
			</div>
			<div class="row">
				<div class="left">
					<b>Lugar</b><br>
					{{ Auth::User()->mesa->lugar->nombre }} 
				</div>
				<div class="right">
					<b>Mesa</b><br>
					{{ Auth::User()->mesa->nombre }}
				</div>
			</div>
			<div class="row">
				<div class="left"><b>Ciudad - Departamento</b></div>
				<div class="right">Santa Marta - MAG</div>
			</div>
		</div></big>
	</div>
</div>