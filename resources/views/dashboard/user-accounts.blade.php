@extends('layout')

@section('content')
<div class="content-wrapper">
	<div class="page-header">
		<h3>User accounts</h3>
		<div class="line"></div>
	</div>

	<table cellpadding=0 cellspacing=0>
		<thead>
			<tr>
				<th>Alarm responder</th>
				<th>Name</th>
				<th>Contact No.</th>
				<th>Username</th>
				<th>Status</th>
				<th>Actions</th>
				<th>Access</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input checked="checked" disabled="disabled" id="True" name="True" type="checkbox" value="true"><input name="True" type="hidden" value="false"></td>
				<td>Adam Jones</td>
				<td>01324 5632645</td>
				<td>test2_test2</td>
				<td>Not activated</td>
				<td>
					<form action="/Contact/SendVerificationCode/8be9b48f-7829-4d4c-b401-5add3c5d3bf1" class="ng-pristine ng-valid" data-ajax="true" data-ajax-mode="replace" data-ajax-success="onSuccess" data-ajax-update="#divDashBoardContact" id="form0" method="post" name="form0">
						<input name="__RequestVerificationToken" type="hidden" value="d7Ru3PqmICSaqOcg2rU3f05IM2kSjHV-E-S6ryL5b5F7ppM-peeHEQ72cDWMOXUYnxaY-V1WP8R5bLSb3MskV1a958UKpRtK-sN9clWE8fiSgbjpElyjHgjnpe_NSyKT0"> <button class="button-green">New verification code</button>
					</form>
				</td>
				<td><label for="N_A">N/A</label></td>
				<td>
					<button class="button-blue">Edit</button>
				</td>
				<td>
					<button class="button-red">Delete</button>
				</td>
			</tr>
			<tr>
				<td><input disabled="disabled" id="False" name="False" type="checkbox" value="true"><input name="False" type="hidden" value="false"></td>
				<td>Bob Jones</td>
				<td>0121123456</td>
				<td>BJones1</td>
				<td>Not activated</td>
				<td>
					<form action="/Contact/SendVerificationCode/c746b3dc-f146-417e-9e57-bdfd88b5c2e5" class="ng-pristine ng-valid" data-ajax="true" data-ajax-mode="replace" data-ajax-success="onSuccess" data-ajax-update="#divDashBoardContact" id="form1" method="post" name="form1">
						<input name="__RequestVerificationToken" type="hidden" value="SF3i57RitiSungs5edz2hcTWP1yN4NhUYuCVwJBFGKz1fp375FEqZiPNol-9afYvHAYI23Feyd-M4Fd4MAG_bLqsMcqkotOhYv4LtEqD9Ar5fNNgWJscU1-BBCv-Ce8S0"> <button class="button-green" >New verification code</button>
					</form>
				</td>
				<td><label for="N_A">N/A</label></td>
				<td>
					<button class="button-blue">Edit</button>
				</td>
				<td>
					<button class="button-red">Delete</button>
				</td>
			</tr>
			<tr>
				<td><input disabled="disabled" id="False" name="False" type="checkbox" value="true"><input name="False" type="hidden" value="false"></td>
				<td>John Smith</td>
				<td>01435 6436546</td>
				<td>
					<button  class="button-green">Add username</button>
				</td>
				<td>No user account</td>
				<td></td>
				<td></td>
				<td>
					<button class="button-blue">Edit</button>
				</td>
				<td>
					<button class="button-red">Delete</button>
				</td>
			</tr>
			<tr>
				<td><input disabled="disabled" id="False" name="False" type="checkbox" value="true"><input name="False" type="hidden" value="false"></td>
				<td>Rachel Brown</td>
				<td>01635 6436546</td>
				<td>test3_test3</td>
				<td>Password expired</td>
				<td>
					<form action="/Contact/ResetPassword/1fd765d6-5a64-4838-957a-03150d7d7534" class="ng-pristine ng-valid" data-ajax="true" data-ajax-mode="replace" data-ajax-success="onSuccess" data-ajax-update="#divDashBoardContact" id="form2" method="post" name="form2">
						<input name="__RequestVerificationToken" type="hidden" value="91Lq6o5PUP2aRrZaqYaD9jJm3ja_uBxa1VZgPK7rwHWvHVM9fu8ae3qts6FCWNT9REBIeDC6Prby_sVl1A25lyK651u6u2GHYT3PU2UiGfYm3Su69Jv6rBjrh1nQni9i0"> <button class="button-grey">Reset password</button>
					</form>
				</td>
				<td>
					<form action="/Contact/AccountLock/1fd765d6-5a64-4838-957a-03150d7d7534?lockUser=True" class="ng-pristine ng-valid" data-ajax="true" data-ajax-mode="replace" data-ajax-success="onSuccess" data-ajax-update="#divDashBoardContact" id="form3" method="post" name="form3">
						<input name="__RequestVerificationToken" type="hidden" value="A1wvLD-7L0HKCEzPqM58nIx0qFZRsuq1BjwnW3onJD289Px_eSgYPsDAqTw52At-VzjJ3UYO5vXgMuG-o2cQSu9RDtedXBPB9Q3eazUjjrWHiy4sXQCoK1a5lPJRZM5O0"> <button class="button-grey">Unlock</button>
					</form>
				</td>
				<td>
					<button class="button-blue">Edit</button>
				</td>
				<td>
					<button class="button-red">Delete</button>
				</td>
			</tr>
			<tr>
				<td><input disabled="disabled" id="False" name="False" type="checkbox" value="true"><input name="False" type="hidden" value="false"></td>
				<td>test1 test1</td>
				<td>4356436546</td>
				<td>test1_test1</td>
				<td>Awaiting login</td>
				<td><label for="N_A">N/A</label></td>
				<td><label for="N_A">N/A</label></td>
				<td>
					<button class="button-blue">Edit</button>
				</td>
				<td>
					<button class="button-red">Delete</button>
				</td>
			</tr>
			<tr>
				<td><input disabled="disabled" id="False" name="False" type="checkbox" value="true"><input name="False" type="hidden" value="false"></td>
				<td>test4 test4</td>
				<td>8754369898</td>
				<td>test4_test4</td>
				<td>Not activated</td>
				<td>
					<form action="/Contact/SendVerificationCode/499a1846-971b-468b-a512-7c02196a5f92" class="ng-pristine ng-valid" data-ajax="true" data-ajax-mode="replace" data-ajax-success="onSuccess" data-ajax-update="#divDashBoardContact" id="form4" method="post" name="form4">
						<input name="__RequestVerificationToken" type="hidden" value="HThgiZCSzxHTz9gVd-hrCNouVCHzNr5zOQbIShbKAmpDXVK7Ma7s_DYcp2wK0CcCm3x_I7hZOBlyGdaY34S3U_Nf5chSrbfJVaEHLe3s4kSJx55Y7ZLKChfCab7KmUbV0"> <button class="button-green" >New verification code</button>
					</form>
				</td>
				<td><label for="N_A">N/A</label></td>
				<td>
					<button class="button-blue">Edit</button>
				</td>
				<td>
					<button class="button-red">Delete</button>
				</td>
			</tr>
			<tr>
				<td><input disabled="disabled" id="False" name="False" type="checkbox" value="true"><input name="False" type="hidden" value="false"></td>
				<td>Tina Foster</td>
				<td>01453 26326456</td>
				<td>test4test4</td>
				<td>Not activated</td>
				<td>
					<form action="/Contact/SendVerificationCode/158c5756-fd62-4393-b6b8-194481f1bce4" class="ng-pristine ng-valid" data-ajax="true" data-ajax-mode="replace" data-ajax-success="onSuccess" data-ajax-update="#divDashBoardContact" id="form5" method="post" name="form5">
						<input name="__RequestVerificationToken" type="hidden" value="SisoCoBDybp5gaQ34-5BaPJtCRObGGSh7CyS2XbWxJPAi9vIXjfnbnv2mLOsc23glY6XKhyVvQAUh7uhnX4nbyBXwl07HWeUcPt6Ua87Fp6k6ODVhV2mrtPGgLH3278B0"> <button class="button-green">New verification code</button>
					</form>
				</td>
				<td><label for="N_A">N/A</label></td>
				<td>
					<button  class="button-blue">Edit</button>
				</td>
				<td>
					<button class="button-red">Delete</button>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="create-new">
		<button href="#" class="button-green m-top-15 pull-right">+ Create a new site</button>
	</div>
</div>
@endsection