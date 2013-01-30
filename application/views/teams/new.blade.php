@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span7 offset2">
	
		<!-- Display any errors from partial -->
		{{ render('common.teams_errors') }}
		
		<div class="well">
			<!-- Display the form -->
			{{ Form::open('teams/create', 'POST') }}
			{{ Form::token() }}
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span6('name', Input::get('name')) }}
			</p>
			<p>
				{{ Form::label('website', 'Website') }}
				{{ Form::text_span6('website', Input::get('website')) }}
			</p>
			<p>
				{{ Form::label('crest', 'Crest') }}
				{{ Form::text_span6('crest', Input::get('crest')) }}
			</p>
			<p>
				{{ Form::submit('Add Team', array('class' => 'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection

