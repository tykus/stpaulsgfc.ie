@layout('layouts.default')

@section('content')
	<div class="span5">
		<div class="well">
			{{ Form::open('fixtures/update', 'PUT') }}
			{{ Form::token() }}
		
			<p>
				{{ Form::label('competition_id', 'Competition') }}
				{{ Form::select('competition_id', $competitions) }}
			</p>
	
			
			{{ Form::submit('Edit Fixture') }}
			{{ Form::close() }}	
		</div>			
	</div>
@endsection