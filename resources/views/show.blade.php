@extends('app')

@section('content')

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('index') }}">vimg</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ config('vimg.app-store-url') }}"> Download for iOS</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div id="image-block" class="center-block">
				<img id="uploaded-image" src="{!! $image !!}" class="img-responsive upload" alt="Responsive image">
			</div>
		</div>
	</div>

@endsection
