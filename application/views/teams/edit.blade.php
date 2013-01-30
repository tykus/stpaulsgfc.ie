@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span7 offset2">
	
		<!-- Display any errors from partial -->
		{{ render('common.teams_errors') }}
		
		<div class="well">
			<!-- Display the form -->
			{{ Form::open('teams/update', 'PUT') }}
			{{ Form::token() }}
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span6('name', $team->name) }}
			</p>
			<p>
				{{ Form::label('website', 'Website') }}
				{{ Form::text_span6('website', $team->website) }}
			</p>
			<p>
				{{ Form::label('crest', 'Crest') }}
				{{ Form::text_span6('crest', $team->crest) }}
			</p>
			<p>
				{{ Form::hidden('id', $team->id) }}
				{{ Form::submit('Edit Team', array('class' => 'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection
