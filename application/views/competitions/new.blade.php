@layout('layouts.default')

@section('content')
	<div class="span5">
		<div class="well">
			{{ Form::open('competitions/create', 'POST') }}
			{{ Form::token() }}
		
			<p>
				{{ Form::label('name', 'Name') }}
				{{ Form::text_span4('name', Input::get('name')) }}
			</p>
			<p>
				{{ Form::label('year', 'Year') }}
				{{ Form::select('year', $years, date('Y')) }}
			</p>
	
			
			{{ Form::submit('Add Competition') }}
			{{ Form::close() }}	
		</div>			
	</div>
	<div class="span7">
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
@endsection