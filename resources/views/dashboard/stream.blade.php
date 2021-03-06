@extends('layout')

@section('content')
<div class="content-wrapper">
	
	@include('partials.header', [ 'text' => 'Stream'])
	
	@include('partials.search-and-color-keys')

	<div class="container-fluid no-pad-h m-top-15 clear">
		<div class="row m-top-15">
			@include('partials.box', ["link" => "/dashboard/services/stream/autofill", "title" => 'Autofill',"icon" => "fa fa-area-chart","status" => "inactive", "value" => 0])
			@include('partials.box', ["link" => "#", "title" => 'Boiler control',"icon" => "fa fa-fire","status" => "inactive", "value" => 0])
			@include('partials.box', ["link" => "#", "title" => 'ThermoDOT',"icon" => "fa fa-thermometer","status" => "inactive"])
			@include('partials.box', ["link" => "#", "title" => 'Thermostat',"icon" => "fa fa-id-badge","status" => "inactive"])
			@include('partials.box', ["link" => "#", "title" => 'Thermovalve',"icon" => "fa fa-key","status" => "inactive"])
			@include('partials.box', ["link" => "#", "title" => 'Voice doorbell',"icon" => "fa fa-id-badge","status" => "inactive"])
		</div>

		
		<div class="m-top-15">
			@include('partials.back-btn', [ 'url' => '/dashboard/services'])
		</div>
	</div>



	@endsection