@layout('layouts.default')

@section('content')
	<div class="span4">
		<div class="well">
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
			<p>
				{{ Form::hidden('id', $member->id) }}
				{{ Form::submit('Edit Committee Member', array('class'=>'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
	<div class="span8">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Role</th>
					<th>Telephone</th>
					<th>Email</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($members as $membr)
			  @if($membr->id == $member->id)
				<tr class="info">
			  @else
			  	<tr>
			  @endif
					<td>{{ $membr->name }}</td>
					<td>{{ $membr->role }}</td>
					<td>{{ $membr->telephone }}</td>
					<td>{{ $membr->email }}</td>
					<td>
						{{ HTML::link_to_route('edit_committee', 'Edit', array($membr->id), array('class' => 'btn')) }}
						{{ Form::open('committees/delete', 'DELETE', array('style'=>'display:inline;')) }}
						{{ Form::hidden('id', $membr->id) }}
						{{ Form::submit('Delete', array('class'=>'btn btn-danger')) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection