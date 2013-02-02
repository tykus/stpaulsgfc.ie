@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span12">
		{{ HTML::link('fixtures/new', 'New Fixture', array('class' => 'btn btn-large btn-primary pull-right')) }}
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
					<td>{{ MyHelpers::irish_date($fixture->date) }}</td>
					<td>{{ $fixture->competition->name }} ({{ $fixture->competition->year }})</td>
					<td>{{ $fixture->team->name }}</td>
					<td>
						@if (isset($fixture->venue_id))
							{{ $fixture->venue->name . ' ' . $fixture->venue->address }}
						@else
							<i>to be confirmed</i>
						@endif
					<td>
						<div class="btn-group btn-group-vertical">
							{{ HTML::link_to_route('edit_fixture', 'Edit', array($fixture->id), array('class' => 'btn')) }}
							{{ Form::open('fixtures/delete', 'DELETE', array('style'=>'display:inline;')) }}
							{{ Form::hidden('id', $fixture->id) }}
							{{ Form::token() }} 
							{{ Form::submit('Delete', array('class'=>'btn btn-danger', 'data-confirm' => 'Are you sure?')) }}
							{{ Form::close() }}		
						</div>				
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection