<div class="modal" id="modal">
	<div class="modal-content">
		<div class="modal-header">{{ $title or 'West London' }}
		<i class="fa fa-close pull-right"></i>
		</div>
		
		@include('partials.search', [ 'css' => 'float:left;width:100%;'])

		<p class="modal-text">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td>M31</td>
					<td>456</td>
					<td align="center"><i class="fa fa-user"></i></td>
				</tr>
				<tr>
					<td>M31</td>
					<td>456</td>
					<td align="center"><i class="fa fa-user"></i></td>
				</tr>
			</table>

		</p>

		@if(!empty($footer))
		<div class="modal-footer">
			Footer
		</div>
		@endif
	</div>
</div>