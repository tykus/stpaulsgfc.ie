@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span 6 offset3">		

		<!-- Display any errors from partial -->
		{{ render('common.fixtures_errors') }}
		
		{{ Form::open('fixtures/create', 'POST') }}
		{{ Form::token() }}

		
		<p>
			{{ Form::label('date', 'Date') }}
			{{ Form::text('date', Input::old('date')) }}
			{{ Form::label('time', 'Time') }}
			{{ Form::text('time', Input::old('time')) }}
		</p>
		
		<p>
			{{ Form::label('competition_id', 'Competition') }}
			<select class="span4" name="competition_id">
				<option value="">(Please Select Competition)</option>
				@foreach($competitions as $competition)
					@if ($competition->id == Input::old('competition_id'))
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
				<option value="">(Please Select Opponent)</option>
				@foreach($opponents as $opponent)
					@if ($opponent->id == Input::old('team_id'))
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
				<option value="">(Please Select Venue)</option>
				@foreach($venues as $venue)
					@if ($venue->id == Input::old('venue_id'))
					<option value="{{ $venue->id }}" selected="selected">{{ $venue->address }} ({{ $venue->team->name }})</option>
					@else
					<option value="{{ $venue->id }}">{{ $venue->address }} ({{ $venue->team->name }})</option>
					@endif
				@endforeach
			</select>
		</p>
						
		<p>
			{{ Form::submit('Create Fixture') }}
		</p>
		{{ Form::close() }}
	</div>
</div>
@endsection