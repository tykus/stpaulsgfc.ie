@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span6 offset3">


		<!-- Display any errors from partial -->
		{{ render('common.competitions_errors') }}

		<div class="well">
			{{ Form::open('competitions/create', 'POST') }}
			{{ Form::token() }}
		
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span4('name', Input::get('name')) }}
			</p>
			<p>
				{{ Form::label('year', 'Year') }}
				{{ Form::select('year', $years, date('Y')) }}
			</p>
	
			
			{{ Form::submit('Add Competition') }}
			{{ Form::close() }}	
		</div>			
	</div>
</div>
@endsection