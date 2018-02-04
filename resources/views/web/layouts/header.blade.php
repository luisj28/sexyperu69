<header id="header" class="alt">
	<div class="logo"><a href="index.html">Urban <span>by TEMPLATED</span></a></div>
	<a href="#menu">Menu</a>
</header>
<nav id="menu">

	<ul class="links">
		<li><a href="index.html">Home</a></li>
		<li><a href="generic.html">Generic</a></li>
		<li><a href="elements.html">Elements</a></li>
		@guest
			<li><a href="{{ route('login') }}">Iniciar</a></li>
    		<li><a href="{{ route('register') }}">Registrarme</a></li>

		@else
			<li>
                <a href="#"
                	id="logout"
                    {{-- onclick="event.preventDefault(); document.getElementById('logout-form2').submit();" --}}>
                    Salir
                </a>
            </li>
		@endguest
	</ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<!-- Banner -->
