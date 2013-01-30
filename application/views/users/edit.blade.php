@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span6 offset3">
		{{ Form::open('users/update', 'PUT') }}
		{{ Form::token() }}
		{{ Form::label('password', 'New Password') }}
		{{ Form::password('password') }}
		{{ Form::label('password_confirmation', 'Confirm Password') }}
		{{ Form::password('password_confirmation') }}<br />
		{{ Form::hidden('id', $user->id) }}
		{{ Form::submit('Change Password')}}
		{{ Form::close() }}
	</div>
</div>
@endsection