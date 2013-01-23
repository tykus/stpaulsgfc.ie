@layout('layouts.default')

@section('content')
	<div class="span12">
		
		<!-- Display any errors -->
		@if($errors->has())
		<ul>
			{{ $errors->first('name', '<li>:message</li>) }}
			{{ $errors->first('role', '<li>:message</li>) }}			
		</ul>
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
