@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span6 offset3">
		<div class="well">
			{{ Form::open('competitions/update', 'PUT') }}
			{{ Form::token() }}
		
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span4('name', $competition->name) }}
			</p>
			<p>
				{{ Form::label('year', 'Year') }}
				{{ Form::select('year', $years, $competition->year) }}
			</p>
	
			
			{{ Form::submit('Edit Competition') }}
			{{ Form::close() }}	
		</div>			
	</div>
</div>
<div class="row">
	<div class="span6 offset3">
		{{ HTML::link_to_route('fixture_list', 'Fixtures', array('class' => 'btn btn-primary')) }}
	</div>
</div>	
@endsection