@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span8 offset2">
		<table class="table table-striped">
			<thead>
				<th>Team</th>
				<th>Venue Name</th>
				<th>Venue Address</th>
				<th>Map</th>
				<th></th>
			</thead>
			<tbody>
			@foreach($venues->results as $venue)
			<tr>
				<td>
					@if (isset($venue->team_id))
						{{ $venue->team->name }}
					@endif		
				</td>
				<td>{{ $venue->name }}</td>
				<td>{{ $venue->address }}</td>
				<td>
					{{ HTML::image('http://maps.googleapis.com/maps/api/staticmap?center=' . $venue->latitude . ',' . $venue->longitude . '&zoom=11&size=100x100&sensor=false') }}
					<br />
					<small>{{ HTML::link('https://maps.google.ie/maps?q=' . $venue->latitude . ',' . $venue->longitude . '&hl=en&sll=' . $venue->latitude . ',' . $venue->longitude . '&sspn=1.417561,4.22699&t=m&z=14', 'Google Maps', array('target'=>'blank')) }}</small>
				</td>
				<td>{{ HTML::link_to_route('edit_venue', 'Edit', array('id'=>$venue->id), array('class'=>'btn')) }}</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		{{ $venues->links() }}
	</div>
</div>
@endsection