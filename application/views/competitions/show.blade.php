@layout('layouts.default')

@section('content')
	<div class="span6 offset3">
		<h3>Fixtures</h3>
		
		<table class='table table-striped'>
			<tbody>
			@foreach($competition->fixtures as $fixture)
				<tr>
					<td>St. Paul's GFC</td>
					<td>{{ $fixture->result['our_score'] }}</td>
					<td>vs.</td>
					<td>{{ $fixture->result['opp_score'] }}</td>
					<td>{{ $fixture->team->name }}</td>
					<td>{{ $fixture->datetime }}</td>
					<td>{{ $fixture->venue }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection