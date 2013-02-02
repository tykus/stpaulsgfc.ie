@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span 6 offset3">
	
		<!-- Display any errors from partial -->
		{{ render('common.fixtures_errors') }}
		
				
		{{ Form::open('fixtures/update', 'PUT') }}
		{{ Form::token() }}
		
		<p>
			{{ Form::label('date', 'Date') }}
			{{ Form::text('date', $fixture->date) }}
			{{ Form::label('time', 'Time') }}
			{{ Form::text('time', $fixture->time) }}
		</p>
		
		<p>
			{{ Form::label('competition_id', 'Competition') }}
			{{-- Form::select_span4('competition_id', $competitions, $fixture->competition_id) --}}
			<select class="span4" name="competition_id">
				<option>(Please Select Competition)</option>
				@foreach($competitions as $competition)
					@if ($competition->id == $fixture->competition_id)
					<option value="{{ $competition->id }}" selected="selected">{{ $competition->name }} ({{ $competition->year }})</option>
					@else
					<option value="{{ $competition->id }}">{{ $competition->name }} ({{ $competition->year }})</option>
					@endif
				@endforeach
			</select>

		</p>
		
		<p>
			{{ Form::label('team_id', 'Opponent') }}
			<select class="span4" name="team_id">
				<option>(Please Select Opponent)</option>
				@foreach($opponents as $opponent)
					@if ($opponent->id == $fixture->team_id)
					<option value="{{ $opponent->id }}" selected="selected">{{ $opponent->name }}</option>
					@else
					<option value="{{ $opponent->id }}">{{ $opponent->name }}</option>
					@endif
				@endforeach
			</select>
		</p>
		
		<p>
			{{ Form::label('venue_id', 'Venue') }}
			<select class="span4" name="venue_id">
				<option>(Please Select Venue)</option>
				@foreach($venues as $venue)
					@if ($venue->id == $fixture->venue_id)
					<option value="{{ $venue->id }}" selected="selected">{{ $venue->address }} ({{ $venue->team->name }})</option>
					@else
					<option value="{{ $venue->id }}">{{ $venue->address }} ({{ $venue->team->name }})</option>
					@endif
				@endforeach
			</select>
		</p>
		<fieldset>
			<h5>St. Paul's</h5>
			{{ Form::text_span1('our_goals', $fixture->our_goals, array('placeholder'=>'Goals')) }}
			{{ Form::text_span1('our_points', $fixture->our_points, array('placeholder' => 'Points')) }}
		</fieldset>

		<fieldset>
			<h5>{{ $fixture->team->name }}</h5>
			{{ Form::text_span1('opp_goals', $fixture->opp_goals, array('placeholder' => 'Goals')) }}
			{{ Form::text_span1('opp_points', $fixture->opp_points, array('placeholder' => 'Points')) }}
		</fieldset>								
		<p>
			{{ Form::hidden('id', $fixture->id) }}
			{{ Form::submit('Edit Fixture') }}
		</p>
		{{ Form::close() }}
	</div>
</div>
@endsection