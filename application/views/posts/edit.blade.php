@layout('layouts.default')

@section('content')
	<div class="span12">
	
		<!-- Display any errors from partial -->
		{{ render('common.posts_errors') }}
		
		<div class="well">
			<!-- Display the form -->
			{{ Form::open('posts/update', 'PUT') }}
			{{ Form::token() }}
			<p>
				{{ Form::label('title', 'Title') }}
				{{ Form::text_span6('title', $post->title) }}
			</p>
			<p>
				{{ Form::label('content', 'Content') }}
				{{ Form::textarea_span6('content', $post->content) }}
			</p>
			<p>
				{{ Form::label('expires', 'Expires') }}
				{{ Form::text_span6('expires', $post->expires) }}
			</p>
			<p>
				{{ Form::checkbox( 'publish', 1, $post->publish, array('class'=>'checkbox') ) }}
				{{ Form::label('publish', 'Publish', array('class'=>'checkbox')) }}
			</p>
			<p>
				{{ Form::hidden('user_id', 1) }}
				{{ Form::hidden('id', $post->id) }}
				{{ Form::submit('Edit Post', array('class' => 'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
@endsection