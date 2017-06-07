@extends('layout')

@section('content')
<div class="content-wrapper">

	@include('partials.header', [ 'text' => 'Sites'])

	<table cellpadding=0 cellspacing=0>
		<thead>
			<th>Site name</th>
			<th>Buildings</th>
			<th>Service(s)</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>

		<tbody>

			@if(!empty($sites))
			@foreach($sites as $site)
			<tr><td>{{$site->SiteName}}</td><td><button href="#" id="{{$site->id}}" data-group="btn-view-site" class="button-grey">Click to view</button></td><td align=center><i class="fa fa-lightbulb-o fa-2x" style="color:#eaad38"></i></td><td><button href="#" class="button-blue">Edit</button></td><td><button href="#" class="button-red">Delete</button></td></tr>	
			@endforeach
			@endif
		</tbody>
	</table>

	
	<button class="button-green pull-right m-top-15">+ Create a new site</button>
	
</div>
@endsection