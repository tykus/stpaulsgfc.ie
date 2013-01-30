@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span 6 offset3">
	
		<!-- Display any errors from partial -->
		{{ render('common.fixtures_errors') }}
		
				
		{{ Form::open('fixtures/update', 'PUT') }}
		{{ Form::token() }}
		
		<p>
			{{ Form::label('datetime', 'Date') }}
			{{ Form::text('datetime', $fixture->datetime) }}
		</p>
		
		<p>
			{{ Form::label('competition_id', 'Competition') }}
			{{ Form::select_span4('competition_id', $competitions, $fixture->competition_id) }}
		</p>
		
		<p>
			{{ Form::label('team_id', 'Opponent') }}
			{{ Form::select_span4('team_id', $opponents, $fixture->team_id) }}
		</p>
		
		<p>
			{{ Form::label('venue_id', 'Venue') }}
			{{ Form::select_span4('venue_id', $venues, $fixture->venue_id) }}
		</p>
						
		<p>
			{{ Form::hidden('id', $fixture->id) }}
			{{ Form::submit('Edit Fixture') }}
		</p>
		{{ Form::close() }}
	</div>
</div>
@endsection