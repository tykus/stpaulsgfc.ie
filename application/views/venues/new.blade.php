@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span7 offset2">
	
		<!-- Display any errors from partial -->
		{{ render('common.venues_errors') }}
		
		<div class="well">
			<!-- Display the form -->
			{{ Form::open('venues/create', 'POST') }}
			{{ Form::token() }}
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span6('name', Input::get('name')) }}
			</p>
			<p>
				{{ Form::label('address', 'Address') }}
				{{ Form::text_span6('address', Input::get('address')) }}
			</p>
			<p>
				{{ Form::label('latitude', 'Latitude') }}
				{{ Form::text_span4('latitude', Input::get('latitude')) }}
			</p>
			<p>
				{{ Form::label('longitude', 'Longitude') }}
				{{ Form::text_span4('longitude', Input::get('longitude')) }}
			</p>
			<p>
				{{ Form::label('team_id', 'Team') }}
				{{ Form::select('team_id', $teams, Input::get('team_id')) }}
			</p>
			<p>
				{{ Form::submit('Add Venue', array('class' => 'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection			