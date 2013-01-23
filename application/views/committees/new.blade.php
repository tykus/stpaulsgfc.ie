@layout('layouts.default')

@section('content')
	<div class="span12">
		
		<!-- Display any errors from partial -->
		{{ render('common.committee_errors') }}
		
		<div class="well">
			<!-- Display the form -->
			{{ Form::open('committees/create', 'POST') }}
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name', Input::old('name')) }}
			</p>
			<p>
				{{ Form::label('role', 'Role') }}
				{{ Form::text('role', Input::old('role')) }}
			</p>
			<p>
				{{ Form::label('telephone', 'Telephone') }}
				{{ Form::text('telephone', Input::old('telephone')) }}
			</p>
			<p>
				{{ Form::label('email', 'Email') }}
				{{ Form::text('email', Input::old('email')) }}
			</p>
			<p>
				{{ Form::submit('Add Committee Member', array('class' => 'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
@endsection
