@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span7 offset3">
	
		<!-- Display any errors from partial -->
		{{ render('common.posts_errors') }}
		
		<div class="well">
			<!-- Display the form -->
			{{ Form::open('posts/create', 'POST') }}
			{{ Form::token() }}
			<p>
				{{ Form::label('title', 'Title') }}
				{{ Form::text_span6('title', Input::old('title')) }}
			</p>
			<p>
				{{ Form::label('content', 'Content') }}
				{{ Form::textarea_span6('content', Input::old('content')) }}
			</p>
			<p>
				{{ Form::checkbox( 'publish', 1, Input::old('publish'), array('class'=>'checkbox') ) }}
				{{ Form::label('publish', 'Publish', array('class'=>'checkbox')) }}
			</p>
			<p>
				{{ Form::hidden('user_id', Auth::user()->id) }}
				{{ Form::submit('Add Post', array('class' => 'btn btn-primary')) }}
			</p>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection