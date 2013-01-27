@layout('layouts.default')

@section('content')
	<div class="span 6 offset3">
		
		
		<?php print_r($competitions); ?>
		
		{{ Form::open('fixtures/create') }}
		{{ Form::token() }}

		
		<p>
			{{ Form::label('competition_id', 'Competition') }}
			{{ Form::select('competition_id', $competitions) }}
		</p>
				
		<p>
			{{ Form::submit('Create Fixture') }}
		</p>
		{{ Form::close() }}
	</div>
@endsection