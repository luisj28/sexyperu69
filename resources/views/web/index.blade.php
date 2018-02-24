@extends('web.new-layouts.master')

@section('title', 'Detalles')


@section('content')

	<!-- Header -->
		<header id="header">
			<div class="inner">
				<div class="content">
					<h1>SexyPeru 69</h1>
					<h2>El lugar donde encontraras la chicas ideales<br />
					 ;)</h2>
					<a href="#" class="button big alt"><span>ver chicas</span></a>
				</div>
				<a href="#" class="button hidden"><span>ver chicas</span></a>
			</div>
		</header>

	<!-- Main -->
		<div id="main">
			<div class="inner">
				<div class="columns">

					<!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>

					<!-- Column 2 (vertical, horizontal, vertical, horizontal) -->
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>

					<!-- Column 3 (horizontal, vertical, horizontal, vertical) -->
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>

					<!-- Column 4 (vertical, horizontal, vertical, horizontal) -->
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>
						<div class="image fit">
							<a href="{{ route('detail', 1) }}"><img src="{{ asset('web/images/pic01.jpg') }}" alt="" /></a>
						</div>

				</div>
			</div>
		</div>

		
@endsection
