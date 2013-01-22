@layout('layouts.default')

@section('content')
	<h1>{{ $page_title }}</h1>
	
	<ul>
		@foreach($posts as $post) 
		<h3>{{ $post->title }}</h3>
		<p>{{ $post->content }}</p>
		<p>{{ $post->expires }}</p>
		@endforeach
	</ul>
@endsection