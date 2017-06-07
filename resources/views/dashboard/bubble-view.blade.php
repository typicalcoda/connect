@extends('layout')

@section('content')
<div class="content-wrapper">
	
	@include('partials.header', [ 'text' => 'Bubble 2G Hub'])
	@include('partials.search-and-color-keys')

	<table cellpadding=0 cellspacing=0 class="m-top-15 clear">
		<thead>
			<tr>
				<th>Social housing area</th>
				<th>UPRN number</th>
				<th>Postcode</th>
				<th>Status</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($faker))
			@for($idx = 0; $idx < 10; $idx++)
			<tr>
				<td>{{$faker->city}}</td>
				<td>{{$faker->buildingNumber}}</td>
				<td>{{$faker->postcode}}</td>
				<td>
					@if((rand(1, 15) % 2) == 0)
					<i class="fa fa-stop" style="color:#de9797;"></i>
					@else
					<i class="fa fa-stop" style="color:#78d0a0;"></i>
					@endif
				</td>
				<td><button class="button-green" >Proceed</button></td>
			</tr>
			@endfor
			@endif
		</tbody>
	</table>

	<div class="m-top-25">
		@include('partials.back-btn', [ 'url' => '/dashboard/services/glow'])
	</div></div>
	@endsection