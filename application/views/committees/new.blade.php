@layout('layouts.default')

@section('content')
	<div class="span12">
		{{ Form::open('committees/create', 'POST') }}
		<p>
			{{ Form::label('name', 'Name') }}<br />
			{{ Form::text('name') }}
		</p>
		<p>
			{{ Form::label('role', 'Role') }}<br />
			{{ Form::text('role') }}
		</p>
		<p>
			{{ Form::label('telephone', 'Telephone') }}<br />
			{{ Form::text('telephone') }}
		</p>
		<p>
			{{ Form::label('email', 'Email') }}<br />
			{{ Form::text('email') }}
		</p>
		<p>
			{{ Form::submit('Add committee member') }}
		</p>
		{{ Form::close() }}
	</div>
@endsection
