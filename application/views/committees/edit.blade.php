@layout('layouts.default')

@section('content')
	<div class="span12">

		<!-- Display any errors from partial -->
		{{ render('common.committee_errors') }}
		
		
		<!-- Display the form -->
		{{ Form::open('committees/update', 'PUT') }}
		<p>
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', $member->name) }}
		</p>
		<p>
			{{ Form::label('role', 'Role') }}
			{{ Form::text('role', $member->role) }}
		</p>
		<p>
			{{ Form::label('telephone', 'Telephone') }}
			{{ Form::text('telephone', $member->telephone) }}
		</p>
		<p>
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', $member->email) }}
		</p>
			{{ Form::hidden('id', $member->id) }}
		<p>
			{{ Form::submit('Edit committee member') }}
		</p>
		{{ Form::close() }}
	</div>