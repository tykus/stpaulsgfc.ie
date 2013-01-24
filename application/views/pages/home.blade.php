@layout('layouts.default')

@section('content')
	<div class="span6">
		<div class="well">
		<h3>News</h3>
			@foreach($posts->results as $post) 
				<h5 class="post_title">{{ e($post->title) }}</h5>
				<p>
					{{ MyHelpers::truncate(e($post->content)) }} 
					{{ HTML::link_to_route('show_post', 'more...', $post->id) }}
				</p>
				<p class="time-ago muted">{{ MyHelpers::time_ago_in_words(e($post->created_at)) }} by {{ $post->user->name }}</p>
				<hr />
			@endforeach		
			{{ $posts->links() }}	
		</div>
	</div>
	<div class="span3">
		<div class="well">
			<h3>Next Fixture</h3>
			{{ HTML::image('img/crests/ballivor.png', 'Ballivor', array('class' => 'img pull-left')) }}
			<p>
				Ballivor vs. St. Paul's<br />
				AFL Division 4<br />
				12.02.2013
			</p>			
		</div>
	</div>
	<div class="span3">
		<div class="well">
				<h3>Last Result</h3>
				{{ HTML::image('img/crests/dunshaughlin.png', 'Dunshaughlin', array('class' => 'img pull-left')) }}
				<p>
					Dunshaughlin vs. St. Paul's<br />
					AFL Division 4<br />
					12.01.2013
				</p>		
		</div>
	</div>
	<div class="span6">
		{{ HTML::image('img/gallery/10.jpg', 'Junior Champions 1999', array('class' => 'img img-polaroid')) }}
	</div>
@endsection