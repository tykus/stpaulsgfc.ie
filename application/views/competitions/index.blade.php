@layout('layouts.default')

@section('content')
<div class="span6 offset3">
<table class='table table-striped'>
	<thead>
		<tr>
			<th>Competition</th>
			<th>Year</th>
			<th></th>
		</tr>
	</thead>
	@foreach($competitions as $competition) 
		<tr>
			<td>{{ e($competition->name) }}</td>
			<td>{{ e($competition->year) }}</td>
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

@endsection