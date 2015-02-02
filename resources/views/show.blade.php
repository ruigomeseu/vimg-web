@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div id="image-block" class="center-block">
			<img id="uploaded-image" src="{!! $image !!}" class="img-responsive upload" alt="Responsive image">
		</div>
	</div>
</div>
@endsection
