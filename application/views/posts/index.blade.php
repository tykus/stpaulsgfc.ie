@layout('layouts.default')

@section('content')
	<div class="span12">
		{{ HTML::link('posts/new', 'New Post', array('class' => 'btn btn-large btn-primary pull-right')) }}
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Title</th>
					<th>Content</th>
					<th>Published</th>
					<th>Dates</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($posts as $post) 
				<tr>
					<td>{{ e($post->title) }}</td>
					<td>{{ MyHelpers::truncate(e($post->content)) }}</td>
					<td>
						@if ($post->publish == true)
							<i class="icon-ok"></i>
						@endif
					</td>
					<td>Expires: {{ date("d.m.y", strtotime(e($post->expires))) }}<br />
						Created: {{ date("d.m.y", strtotime(e($post->created_at))) }}<br />
						Updated: {{ date("d.m.y", strtotime(e($post->updated_at))) }}</td>
					<td>
						<div class="btn-group btn-group-vertical">
							{{ HTML::link_to_route('show_post', 'Show', array($post->id), array('class' => 'btn')) }}
							{{ HTML::link_to_route('edit_post', 'Edit', array($post->id), array('class' => 'btn')) }}
							{{ Form::open('posts/delete', 'DELETE', array('style'=>'display:inline;')) }}
							{{ Form::hidden('id', $post->id) }}
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
@endsection