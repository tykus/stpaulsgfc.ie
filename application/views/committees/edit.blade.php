@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span6 offset3">
		<div class="well">
			<!-- Display any errors from partial -->
			{{ render('common.committee_errors') }}
			
			<!-- Display the form -->
			{{ Form::open('committees/update', 'PUT') }}
			{{ Form::token() }}
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span5('name', HTML::entities($member->name)) }}
			</p>
			<p>
				{{ Form::label('role', 'Role') }}
				{{ Form::text_span5('role', HTML::entities($member->role)) }}
			</p>
			<p>
				{{ Form::label('telephone', 'Telephone') }}
				{{ Form::text_span5('telephone', HTML::entities($member->telephone)) }}
			</p>
			<p>
				{{ Form::label('email', 'Email') }}
				{{ Form::text_span5('email', HTML::entities($member->email)) }}
			</p>
			<p>
				{{ Form::hidden('id', HTML::entities($member->id)) }}
				{{ Form::submit('Edit Committee Member', array('class'=>'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection