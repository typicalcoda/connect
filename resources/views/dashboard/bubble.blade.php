@extends('layout')

@section('content')
<div class="content-wrapper">
	@include('partials.header', [ 'text' => 'Bubble' ])


	@include('partials.search-and-color-keys')

	<div class="container-fluid no-pad-h m-top-15 clear">
		<div class="row m-top-15">
			@include('partials.box', ["link" => "/dashboard/services/bubble/view", "title" => 'Bubble 2G Hub',"icon" => "fa fa-exclamation-triangle", "value" => 0, "status" => "active"])
		</div>
	</div>

	<div class="m-top-15">
		@include('partials.back-btn', [ 'url' => '/dashboard/services'])
	</div>

</div>
@endsection