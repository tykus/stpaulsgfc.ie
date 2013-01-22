@layout('layouts.default')

@section('content')

	<h1>Welcome to St. Paul's GFC</h1>
	@foreach($posts as $post) 
		<div class="row">
			<div class="span9">
				<h3 class="post_title">{{ $post->title }}</h3>
				<p>{{ $post->content }}</p>
				<p class="time-ago pull-right">{{ MyHelpers::time_ago_in_words($post->created_at) }}</p>
				<hr />
			</div>
		</div>

	@endforeach
@endsection