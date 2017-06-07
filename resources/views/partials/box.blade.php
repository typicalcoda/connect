<div class="col-md-3">
	<a href="{{$link or '#'}}">
		<div class="db-box">
			<div class="db-top">
				<div class="title">{{$title or 'Default01' }}</div>
			</div>
			<div class="db-bottom">
				<div class="db-icon">
					
					@if(!empty($loading) && $loading)
					@include('partials.loading', ['color' => '#b1acac'])
					@else 
					<i class="{{$icon or 'fa fa-home'}}"></i>
					@endif
				</div>
				
				@if(isset($loading))
				<span class="db-value">...</span>
				@elseif(isset($value))
				<span class="db-value">{{$value}}</span>
				@else 
				<span class="db-value">--</span>
				@endif

				<small style="color:{{!empty($status) && strtolower($status) == 'inactive' ? '#d47272' : '#8abb8a'}}">{{$status or ''}}</small>


				@if(!empty($numbers) && count($numbers) > 0)
				<div class="db-count">
					<div class="palette">
						<span class="palette-color green"></span>
						<span class="palette-value">{{$numbers[0]}}</span>
					</div>

					<div class="palette">
						<span class="palette-color yellow"></span>
						<span class="palette-value">{{$numbers[1]}}</span>
					</div>

					<div class="palette">
						<span class="palette-color red"></span>
						<span class="palette-value">{{$numbers[2]}}</span>
					</div>
				</div>
				@endif
			</div>
		</div>
	</a>
</div>