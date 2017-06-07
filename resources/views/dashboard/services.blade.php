@extends('layout')

@section('content')
<div class="content-wrapper">
	
	@include('partials.header', [ 'text' => 'Services'])
	
	@include('partials.search-and-color-keys')

	<div class="container-fluid no-pad-h m-top-15 clear">
		<div class="row m-top-15">
			@include('partials.box', ["link" => "/dashboard/services/alert", "title" => 'Alert',"icon" => "fa fa-exclamation-triangle","status" => "inactive"])
			@include('partials.box', ["link" => "/dashboard/services/bubble", "title" => 'Bubble',"icon" => "fa fa-circle", "value" => "0", "status" => "active"])
			@include('partials.box', ["link" => "/dashboard/services/glow", "title" => 'Glow',"icon" => "fa fa-lightbulb-o", "value" => "10","status" => "inactive", "numbers" => [6, 3, 1]])
			@include('partials.box', ["link" => "/dashboard/services/secure", "title" => 'Secure',"icon" => "fa fa-lock","status" => "inactive"])
			@include('partials.box', ["link" => "/dashboard/services/stream", "title" => 'Stream',"icon" => "fa fa-tint", "value" => "0", "status" => "active", "numbers" => [3, 9 ,4]])
		</div>

		
	</div>



	@endsection