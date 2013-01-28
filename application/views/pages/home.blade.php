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
		<div class="well panel">
			<h3>Next Fixture</h3>
			@if (isset($next_fixture))
				{{ HTML::image('img/crests/'. $next_fixture->team->crest, $next_fixture->team->name, array('class' => 'img pull-left')) }}
				<p>
					{{ $next_fixture->team->name }}<br />
					St. Paul's<br />
					{{ $next_fixture->competition->name }}<br />
					{{ MyHelpers::irish_date($next_fixture->datetime) }}
				</p>
			@else
				<p>
					<i>no fixtures upcoming</i>
				</p>
			@endif			
		</div>
	</div>
	<div class="span3">
		<div class="well panel">
			<h3>Last Result</h3>
			@if (isset($prev_fixture))
				{{ HTML::image('img/crests/'. $prev_fixture->team->crest, $prev_fixture->team->name, array('class' => 'img pull-left')) }}
				<p>
					{{ $prev_fixture->team->name }} <span class="pull-right">{{ $prev_fixture->result['opp_score'] }}</span><br />
					St. Paul's <span class="pull-right">{{ $prev_fixture->result['our_score'] }}</span><br />
					{{ $prev_fixture->competition->name }}<br />
					{{ MyHelpers::irish_date($prev_fixture->datetime) }}
				</p>	
			@endif
		</div>
	</div>
	<div class="span6">
		{{ HTML::image('img/gallery/10.jpg', 'Junior Champions 1999', array('class' => 'img img-polaroid')) }}
	</div>
@endsection