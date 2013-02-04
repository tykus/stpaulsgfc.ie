@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span8 offset2">
		<table class="table table-striped">
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
			@foreach($members as $member)
				<tr>
					<td>{{ HTML::entities($member->name) }}</td>
					<td>{{ HTML::entities($member->role) }}</td>
					<td>{{ HTML::entities($member->telephone) }}</td>
					<td>{{ HTML::email($member->email) }}</td>
					<td>
						{{ HTML::link_to_route('edit_committee', 'Edit', array($member->id), array('class' => 'btn')) }}
						{{ Form::open('committees/delete', 'DELETE', array('style'=>'display:inline;')) }}
						{{ Form::hidden('id', $member->id) }}
						{{ Form::token() }} 
						{{ Form::submit('Delete', array('class'=>'btn btn-danger', 'data-confirm' => 'Are you sure?')) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		  </tbody>
		</table>
		{{ HTML::link('committees/new', 'New Committee Member', array('class' => 'btn btn-primary')) }}
	</div>
</div>
@endsection