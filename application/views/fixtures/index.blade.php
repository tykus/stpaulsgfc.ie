@layout('layouts.default')

@section('content')
	<div class="span6 offset3">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Date</th>
					<th>Competition</th>
					<th>Opponent</th>
					<th>Venue</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($fixtures as $fixture)
				<tr>
					<td>{{ MyHelpers::irish_date($fixture->datetime) }}</td>
					<td>{{ $fixture->competition->year }}</td>
					<td>{{ $fixture->team->name }}</td>
					<td>{{ $fixture->venue_id }}</td>
					<td></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection