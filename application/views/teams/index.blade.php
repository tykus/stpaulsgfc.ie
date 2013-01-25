@layout('layouts.default')

@section('content')
	<div class="span12">
		<table class='table table striped'>
			<thead>
				<tr>
					<th>Crest</th>
					<th>Name</th>
					<th>Venue</th>
					<th>Location</th>
					<th>Created</th>
					<th>Updated</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($teams as $team)
				<tr>
					<td>{{ HTML::image('img/crests/' . $team->crest, $team->name) }}</td>
					<td>
						@if (isset($team->website))
							{{ HTML::link($team->website, $team->name) }}
						@else
							{{ $team->name }}
						@endif
					</td>
					<td>{{ $team->venue }}</td>
					<td>
						@if ($team->latitude > 0)
							{{ HTML::image('http://maps.googleapis.com/maps/api/staticmap?center=' . $team->latitude . ',' . $team->longitude . '&zoom=11&size=100x100&sensor=false') }}
						@endif
					</td>
					<td>{{ $team->created_at }}</td>
					<td>{{ $team->updated_at }}</td>
					<td>{{ HTML::link_to_route('edit_team', 'Edit', array('id'=>$team->id), array('class'=>'btn')) }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection