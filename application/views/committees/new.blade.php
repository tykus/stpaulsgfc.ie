@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span6 offset3">
		
		<!-- Display any errors from partial -->
		{{ render('common.committee_errors') }}
		
		<div class="well">
			<!-- Display the form -->
			{{ Form::open('committees/create', 'POST') }}
			{{ Form::token() }}
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span5('name', Input::old('name')) }}
			</p>
			<p>
				{{ Form::label('role', 'Role') }}
				{{ Form::text_span5('role', Input::old('role')) }}
			</p>
			<p>
				{{ Form::label('telephone', 'Telephone') }}
				{{ Form::text_span5('telephone', Input::old('telephone')) }}
			</p>
			<p>
				{{ Form::label('email', 'Email') }}
				{{ Form::text_span5('email', Input::old('email')) }}
			</p>
			<p>
				{{ Form::submit('Add Committee Member', array('class' => 'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection
