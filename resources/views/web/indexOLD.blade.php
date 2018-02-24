@extends('web.layouts.main')
@section('headSection')
{{-- <link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}"> --}}
@endsection
@section('main-content')		
		<section id="banner">
			<div class="inner">
				<header>
					<h1>This is Urban</h1>
					<p>Aliquam libero augue varius non odio nec faucibus congue<br />felis quisque a diam rutrum tempus massa accumsan faucibus purus.</p>
				</header>
				<a href="#main" class="button big scrolly">Learn More</a>
				<a href="{{ route('logout') }}"
					id="boton-logout" 
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                                        
			</div>
		</section>
		<!-- Main -->
		<div id="main">
			<!--	<section class="wrapper style2">
					<div class="inner">
						<div class="flex flex-2">
							<div class="col col2">
								<h3>Suspendisse quis massa vel justo</h3>
								<p>Etiam posuere hendrerit arcu, ac blandit nulla. Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex.</p>
								<p>Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex. </p>
								<a href="#" class="button">Learn More</a>
							</div>
							<div class="col col1 first">
								<div class="image round fit">
									<a href="generic.html" class="link"><img src="images/pic02.jpg" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</section>-->
			<!-- Section -->
				<section class="wrapper style1">
					<div class="inner">
						<header class="align-center">
							<h2>Aliquam ipsum purus dolor</h2>
							<p>Cras sagittis turpis sit amet est tempus, sit amet consectetur purus tincidunt.</p>
						</header>
						<div class="flex flex-3">
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis  aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic05.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic04.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>
						</div>
					</div>
				</section>
		</div>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
@endsection
@section('footerSection')
<script>
	console.log("index, aqui rpobaremos el logout");
	console.log("boton," +  document.getElementById("logout").value );
	//document.getElementById("boton-logout").click();
	document.getElementById("logout").addEventListener("click", function(){
	    //document.getElementById("demo").innerHTML = "Hello World";
	    document.getElementById("boton-logout").click();
	});
</script>
@endsection

	