@layout('layouts.default')

@section('content')
	<div class="span12">
		
		<!-- Display any errors -->
		@if($errors->has())
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h4>Error(s) preventing the form submission:</h4>
		  	{{ $errors->first('name', '<p>:message</p>') }}
			{{ $errors->first('role', '<p>:message</p>') }}
		</div>
		@endif
		
		{{ Form::open('committees/create', 'POST') }}
		<p>
			{{ Form::label('name', 'Name') }}<br />
			{{ Form::text('name', Input::old('name')) }}
		</p>
		<p>
			{{ Form::label('role', 'Role') }}<br />
			{{ Form::text('role', Input::old('role')) }}
		</p>
		<p>
			{{ Form::label('telephone', 'Telephone') }}<br />
			{{ Form::text('telephone', Input::old('telephone')) }}
		</p>
		<p>
			{{ Form::label('email', 'Email') }}<br />
			{{ Form::text('email', Input::old('email')) }}
		</p>
		<p>
			{{ Form::submit('Add committee member') }}
		</p>
		{{ Form::close() }}
	</div>
@endsection
