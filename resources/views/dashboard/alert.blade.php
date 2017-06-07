@extends('layout')

@section('content')
<div class="content-wrapper">
	
	@include('partials.header', [ 'text' => 'Alerts'])
	
	@include('partials.search-and-color-keys')

	<div class="container-fluid no-pad-h m-top-15 clear">
		<div class="row m-top-15">
			@include('partials.box', ["link" => "#", "title" => 'HumidityDOT', "icon" => "fa fa-exclamation-triangle", "value" => "--","status" => "active"])
			@include('partials.box', ["link" => "#", "title" => 'MicroDOT', "icon" => "fa fa-circle", "value" => "10","status" => "inactive"])
			@include('partials.box', ["link" => "#", "title" => 'Multipurpose Alarm', "icon" => "fa fa-lightbulb-o", "value" => "10","status" => "inactive"])
			@include('partials.box', ["link" => "#", "title" => 'Multipurpose Alarm (Deluxe)', "icon" => "fa fa-lock", "value" => "--","status" => "inactive"])
		</div>
	</div>

	
	<div class="m-top-15">
		@include('partials.back-btn', [ 'url' => '/dashboard/services'])
	</div>
</div>

@endsection