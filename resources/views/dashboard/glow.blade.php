@extends('layout')

@section('content')
<div class="content-wrapper">
	@include('partials.header', [ 'text' => 'Glow' ])


	@include('partials.search-and-color-keys')

	<div class="container-fluid no-pad-h m-top-15 clear">
		<div class="row m-top-15">
			@include('partials.box', ["link" => "/dashboard/services/glow/emered", "title" => 'EmeRed',"icon" => "fa fa-lightbulb-o", "value" => 10, "status" => "active", "numbers" => [6, 3, 1]])
			@include('partials.box', ["link" => "#", "title" => 'Lighting Control',"icon" => "fa fa-bolt", "status" => "inactive"])
		</div>
	</div>

	<div class="m-top-15">
		@include('partials.back-btn', [ 'url' => '/dashboard/services'])
	</div>

</div>
@endsection