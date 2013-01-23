@layout('layouts.default')

@section('content')
	<div class="span8">
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
					<td>{{ $member->name }}</td>
					<td>{{ $member->role }}</td>
					<td>{{ $member->telephone }}</td>
					<td>{{ $member->email }}</td>
				</tr>
			@endforeach
		  </tbody>
		</table>
	</div>
	<div class="span4">
		<div class="well">
			<h3>Other Information</h3>
		</div>
	</div>
@endsection