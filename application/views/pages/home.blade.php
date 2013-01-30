@layout('layouts.default')

@section('content')
	<div class="row">
		<!-- Next Fixture Panel -->		
		<div class="span5">
			<div class="well panel">
				<h3>Next Fixture</h3>
				@if (isset($next_fixture))
					<div class="span1">
						{{ HTML::image('img/crests/'. $next_fixture->team->crest, $next_fixture->team->name, array('class' => 'pull-left')) }}
					</div>
					<div class="span3 pull-right">
							{{ $next_fixture->team->name }}<br />
							St. Paul's<br />
						<small class="muted">
							{{ $next_fixture->competition->name }}<br />
							{{ $next_fixture->venue->address }}<br />
							{{ MyHelpers::irish_date($next_fixture->datetime) }}
						</small>
					</div>
				@else
					<p>
						<i>no fixtures</i>
					</p>
				@endif			
			</div>
		</div>

		<!-- Last Result Panel -->
		<div class="span5">
			<div class="well panel">
				<h3>Last Result</h3>
				@if (isset($prev_fixture))
					<div class="span1">
						{{ HTML::image('img/crests/'. $prev_fixture->team->crest, $prev_fixture->team->name, array('class' => 'img')) }}
					</div>
					<div class="span3 pull-right">
						{{ $prev_fixture->team->name }} 
						<span class="pull-right">{{ $prev_fixture->result['opp_score'] }}</span><br />
						St. Paul's 
						<span class="pull-right">{{ $prev_fixture->result['our_score'] }}</span><br />
						<small class="muted">
							{{ $prev_fixture->competition->name }}<br />
							{{ $prev_fixture->venue->address }}<br />
							{{ MyHelpers::irish_date($prev_fixture->datetime) }}
						</small>	
					</div>
				@endif
			</div>
		</div>

		<!-- Social Media Icons -->
		<div class="span2 panel">
			{{ HTML::image('img/red1.png', 'St. Paul\'s jersey') }}
		</div>	
	</div>
	<div class="row">
		<!-- News Section -->
		<div class="span7">
			<div class="well">
			<h3>News</h3>
				@foreach($posts->results as $post) 

					<ul class="media-list">
						<li class="media">
						    <a class="pull-left" href="#">
						      <img src="http://placehold.it/90x90">
						    </a>
						    <div class="media-body">
								<h4 class="media-heading">{{ e($post->title) }}</h4>
								<p>
									{{ MyHelpers::truncate(e($post->content)) }} 
									{{ HTML::link_to_route('show_post', 'more...', $post->id) }}
								</p>
						    </div>
					  	</li>
					</ul>
				@endforeach		
				{{ $posts->links() }}	
			</div>
		</div>

		<!-- Twitter Feed -->
		<div class="span5">
			<a class="twitter-timeline" href="https://twitter.com/StPaulsGFC" data-widget-id="296347078408409088">Tweets by @StPaulsGFC</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
	</div>

</div>
@endsection