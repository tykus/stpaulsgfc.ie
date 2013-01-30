@layout('layouts.default')

@section('content')
	<div class="span10 offset1">
		<table class="table table-striped">
			<thead>
				<tr>
					<th colspan="2">Opponent</th>
					<th>Date</th>
					<th>Venue</th>
					<th>Competition</th>
				</tr>
			</thead>
			<tbody>
				@foreach($fixtures as $fixture)
				<tr>
					<td>{{ HTML::image('img/crests/'.$fixture->team->crest) }}</td>
					<td>{{ $fixture->team->name }}</td>
					<td>{{ MyHelpers::irish_date($fixture->datetime, 'long') }}</td>
					<td>
						@if (isset($fixture->venue_id))
							{{ HTML::link('https://maps.google.ie/maps?q=' . $fixture->venue->latitude . ',' . $fixture->venue->longitude . '&hl=en&sll=' . $fixture->venue->latitude . ',' . $fixture->venue->longitude . '&sspn=1.417561,4.22699&t=m&z=14', $fixture->venue->address, array('target'=>'blank')) }}
						@else
							<i>tbc</i>
						@endif
					</td>
					<td>{{ $fixture->competition->name }} ({{ $fixture->competition->year }})</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection