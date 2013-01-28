@layout('layouts.default')

@section('content')
	<div class="span12">
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
					<td>{{ MyHelpers::irish_date($fixture->datetime, 'long') }}</td>
					<td>{{ $fixture->competition->name }} ({{ $fixture->competition->year }})</td>
					<td>{{ $fixture->team->name }}</td>
					<td>{{ $fixture->venue->name . " " . $fixture->venue->address }}</td>
					<td>
						{{ HTML::link_to_route('edit_fixture', 'Edit', array($fixture->id), array('class' => 'btn')) }}
						{{ Form::open('fixtures/delete', 'DELETE', array('style'=>'display:inline;')) }}
						{{ Form::hidden('id', $fixture->id) }}
						{{ Form::token() }} 
						{{ Form::submit('Delete', array('class'=>'btn btn-danger', 'data-confirm' => 'Are you sure?')) }}
						{{ Form::close() }}						
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection