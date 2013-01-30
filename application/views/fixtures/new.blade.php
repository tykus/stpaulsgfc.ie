@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span 6 offset3">
		
		{{ Form::open('fixtures/create', 'POST') }}
		{{ Form::token() }}

		
		<p>
			{{ Form::label('datetime', 'Date') }}
			{{ Form::text('datetime', Input::old('datetime')) }}
		</p>
		
		<p>
			{{ Form::label('competition_id', 'Competition') }}
			{{ Form::select('competition_id', $competitions) }}
		</p>
		
		<p>
			{{ Form::label('team_id', 'Opponent') }}
			{{ Form::select('team_id', $opponents) }}
		</p>
		
		<p>
			{{ Form::label('venue_id', 'Venue') }}
			{{ Form::select('venue_id', $venues) }}
		</p>
						
		<p>
			{{ Form::submit('Create Fixture') }}
		</p>
		{{ Form::close() }}
	</div>
</div>
@endsection