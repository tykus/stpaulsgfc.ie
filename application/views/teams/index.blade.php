@layout('layouts.default')

@section('content')
	<div class="span12">
		{{ HTML::link('teams/new', 'New Team', array('class' => 'btn btn-large btn-primary pull-right')) }}
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
				@foreach($teams->results as $team)
				<tr>
					<td>{{ HTML::image('img/crests/' . $team->crest, $team->name, array('class' => 'center')) }}</td>
					<td>
						@if (isset($team->website))
							{{ HTML::link($team->website, $team->name, array('target'=>'blank')) }}
						@else
							{{ $team->name }}
						@endif
					</td>
					<td>@foreach($team->venues as $venue)
							@if (isset ($venue->name)) 
								{{ $venue->name }}, 
							@endif
							{{ $venue->address }}
						@endforeach
					</td>
					<td>
						@foreach($team->venues as $venue)
							@if (isset($venue->latitude))
								{{ HTML::image('http://maps.googleapis.com/maps/api/staticmap?center=' . $venue->latitude . ',' . $venue->longitude . '&zoom=11&size=100x100&sensor=false') }}
								<br />
								<small>{{ HTML::link('https://maps.google.ie/maps?q=' . $venue->latitude . ',' . $venue->longitude . '&hl=en&sll=' . $venue->latitude . ',' . $venue->longitude . '&sspn=1.417561,4.22699&t=m&z=14', 'Google Maps', array('target'=>'blank')) }}</small>
							@endif
						@endforeach
					</td>
					<td>{{ $team->created_at }}</td>
					<td>{{ $team->updated_at }}</td>
					<td>{{ HTML::link_to_route('edit_team', 'Edit', array('id'=>$team->id), array('class'=>'btn')) }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>		
		{{ $teams->links() }}	
	</div>
@endsection