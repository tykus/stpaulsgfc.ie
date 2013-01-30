@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span8 offset2">
		<h3>Fixtures</h3>
		
		<table class='table table-striped'>
			<tbody>
			@foreach($competition->fixtures as $fixture)
				<tr>
					<td rowspan="2">{{ HTML::image('img/crests/stpauls.png') }}</td>
					<td>St. Paul's GFC</td>

					<td class="right">{{ $fixture->team->name }}</td>
					<td rowspan="2">{{ HTML::image('img/crests/'.$fixture->team->crest) }}</td>
				</tr>
				<tr>
					<td colspan="5">
						<i>{{ e($fixture->comment) }} &laquo; 
						{{ date("d.m.Y @ g:i a", strtotime(e($fixture->datetime))) }} &laquo;  
						{{ $fixture->venue->name }}</i>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection