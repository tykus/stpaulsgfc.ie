@layout('layouts.default')

@section('content')
	<div class="span8 offset2">
		<table class="table table-striped">
		  <thead>	
			<tr>
				<th>Name</th>
				<th>Role</th>
				<th>Telephone</th>
				<th>Email</th>
			</tr>
		  </thead>
		  <tbody>
			@foreach($members as $member)
				<tr>
					<td>{{ HTML::entities($member->name) }}</td>
					<td>{{ HTML::entities($member->role) }}</td>
					<td>{{ HTML::entities($member->telephone) }}</td>
					<td>{{ HTML::entities($member->email) }}</td>
				</tr>
			@endforeach
		  </tbody>
		</table>
	</div>
@endsection