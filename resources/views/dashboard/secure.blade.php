@extends('layout')

@section('content')
<div class="content-wrapper">
	
	@include('partials.header', [ 'text' => 'Secure'])
	
	@include('partials.search-and-color-keys')

	<div class="container-fluid no-pad-h m-top-15 clear">
		<div class="row m-top-15">
			@include('partials.box', ["link" => "#", "title" => 'Door lock',"icon" => "fa fa-key","status" => "inactive"])
			@include('partials.box', ["link" => "#", "title" => 'Voice doorbell',"icon" => "fa fa-id-badge","status" => "inactive"])
		</div>

		
		<div class="m-top-15">
			@include('partials.back-btn', [ 'url' => '/dashboard/services'])
		</div>
	</div>



	@endsection