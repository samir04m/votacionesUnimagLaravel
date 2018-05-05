<header>
	<div class="navbar-fixed">
		<nav class="cyan darken-2">
			<div class="nav-wrapper">
				<div class="container">
					<a href="#" class="brand-logo">@yield('title', '')</a>
					<ul class="right">
						<li>{{ Auth::user()->codigo }}</li>
						<li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           	Cerrar Sesión</a>
                           	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    	</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>