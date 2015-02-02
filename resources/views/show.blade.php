@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="center-block">
			<img id="uploaded-image" src="{!! $image !!}" class="img-responsive upload" alt="Responsive image">
		</div>
	</div>
</div>
@endsection
