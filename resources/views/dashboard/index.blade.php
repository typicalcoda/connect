@extends('layout')


@section('content')

<div class="content-wrapper">
	@include('partials.header', ['text' => 'Dashboard'])

	<div class="container-fluid no-pad-h">
		<div class="row">
			@include('partials.box', ["link" => "/dashboard/sites", "link" => "/dashboard/sites", "title" => 'Housing areas',"icon" => "fa fa-flag", "value" => "3","status" => "active"])
			@include('partials.box', ["link" => "/dashboard/services", "title" => 'Services',"icon" => "fa fa-server", "value" => "4","status" => "inactive"])
			@include('partials.box', ["link" => "/dashboard/alarms", "title" => 'Alarms',"icon" => "fa fa-bell", "value" => "--","status" => "inactive"])
			@include('partials.box', ["link" => "#", "title" => 'Weather', "loading" => true])
		</div>
	</div>
	{{-- 	
	<div class="container-fluid no-pad-h">
			<div class="col-md-3 no-pad-h box-container">
				<a href="/dashboard/sites">
					<div class="box">
						<div class="link" => "/dashboard/sites", "title">Sites</div>

						<div class="icon">
							<i class="fa fa-sitemap fa-4x"></i>
						</div>

						<div class="big-label">
							3
							<small>active</small>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 no-pad-h box-container">
				<a href="/dashboard/services">
					<div class="box">
						<div class="link" => "/dashboard/sites", "title">Services</div>

						<div class="icon">
							<i class="fa fa-server fa-4x"></i>
						</div>

						<div class="big-label">
							4
							<small>active</small>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 no-pad-h box-container">
				<a href="#">
					<div class="box">
						<div class="link" => "/dashboard/sites", "title">Alarms</div>

						<div class="icon">
							<i class="fa fa-bell fa-4x"></i>
						</div>

						<div class="big-label">
							4
							<small>active</small>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 no-pad-h box-container">
				<a href="#">
					<div class="box">
						<div class="link" => "/dashboard/sites", "title">Weather</div>

						<div class="icon">
							@include('partials.loading', ["color" => "#b0bec5"])
						</div>

						<div class="big-label">
							<small style="line-height:2.8">Loading</small>
						</div>
					</div>
				</a>						
			</div>
		</div> --}}
	</div>
</div>

@endsection