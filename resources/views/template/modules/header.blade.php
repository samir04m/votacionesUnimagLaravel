<header>
	<div class="navbar-fixed">
		<nav class="cyan darken-2">
			<div class="nav-wrapper">
				<div class="container">
					<a href="#" class="brand-logo">@yield('title', '')</a>
					<ul class="right">
						@if(Auth::user() != null)
							<li>{{ Auth::user()->codigo }} - {{ Auth::user()->nombre1 }} {{ Auth::user()->apellido1 }}</li>
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	                           	Cerrar Sesión</a>
	                           	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                {{ csrf_field() }}
	                            </form>
	                    	</li>
						@else
							<li><a href="{{route('login')}}">Iniciar Sesion</a></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
