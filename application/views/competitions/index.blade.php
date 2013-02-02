@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span8 offset2">
		{{ HTML::link('competitions/new', 'New Competition', array('class' => 'btn btn-large btn-primary pull-right')) }}
		<table class="table table striped">
			<thead>
				<tr>
					<th>Competition Name</th>
					<th>Year</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($competitions as $competition)
				<tr>
					<td>{{ $competition->name }}</td>
					<td>{{ $competition->year }}</td>
					<td>
						{{ HTML::link_to_route('show_competition', 'Show', array($competition->id), array('class'=>'btn')) }}
						{{ HTML::link_to_route('edit_competition', 'Edit', array($competition->id), array('class' => 'btn')) }}
						{{ Form::open('competitions/delete', 'DELETE', array('style'=>'display:inline;')) }}
						{{ Form::hidden('id', $competition->id) }}
						{{ Form::token() }} 
						{{ Form::submit('Delete', array('class'=>'btn btn-danger', 'data-confirm' => 'Are you sure?')) }}
						{{ Form::close() }}
					</td>
				</tr>
				@endforeach
			</tbody>		
		</table>
	</div>
</div>
@endsection