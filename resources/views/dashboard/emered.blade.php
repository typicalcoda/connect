@extends('layout')

@section('content')
<div class="content-wrapper">
	
	@include('partials.header', [ 'text' => 'EmeRed'])
	@include('partials.search-and-color-keys')

	<table cellpadding=0 cellspacing=0 class="m-top-15 clear">
		<thead>
			<tr>
				<th>Device name</th>
				<th>Site name</th>
				<th>Building name</th>
				<th>Floor</th>
				<th>Room location</th>
				<th>Status</th>
				<th>Maintenance</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>emered-live1</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green" >Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live10</td>
				<td>Spennymoor</td>
				<td>B40</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#d8c668"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live2</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live3</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live4</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live5</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live6</td>
				<td>Spennymoor</td>
				<td>B40</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live7</td>
				<td>Spennymoor</td>
				<td>B40</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live8</td>
				<td>Spennymoor</td>
				<td>B40</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
			<tr>
				<td>emered-live9</td>
				<td>Spennymoor</td>
				<td>B40</td>
				<td>N/A</td>
				<td>N/A</td>
				<td><i class="fa fa-stop" style="color:#78d0a0;"></i></td>
				<td><button class="button-green">Proceed</button></td>
			</tr>
		</tbody>
	</table>

	<div class="m-top-15">
		@include('partials.back-btn', [ 'url' => '/dashboard/services/glow'])
	</div></div>
	@endsection