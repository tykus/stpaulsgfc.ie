@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span7 offset2">
	
		<!-- Display any errors from partial -->
		{{ render('common.teams_errors') }}
		
		<div class="well">
			<!-- Display the form -->
			{{ Form::open('venues/update', 'PUT') }}
			{{ Form::token() }}
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span6('name', $venue->name) }}
			</p>
			<p>
				{{ Form::label('address', 'Address') }}
				{{ Form::text_span6('address', $venue->address) }}
			</p>
			<p>
				{{ Form::label('latitude', 'Latitude') }}
				{{ Form::text_span6('latitude', $venue->latitude) }}
			</p>
			<p>
				{{ Form::label('longitude', 'Longitude') }}
				{{ Form::text_span6('longitude', $venue->longitude) }}
			</p>
			<p>
				{{ Form::label('team_id', 'Team') }}
				{{ Form::select('team_id', $teams,$venue->team_id) }}
			</p>
			<p>
				{{ Form::hidden('id', $venue->id) }}
				{{ Form::submit('Edit Venue', array('class' => 'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection			