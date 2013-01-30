@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span8 offset2">
		@foreach($fixtures as $fixture)
			<div class="row">
			@if ($fixture->venue_id == 1)
				<div class="span1">
					{{ HTML::image('img/crests/stpauls.png') }}
				</div>
				<div class="span2">
					St. Paul's GFC
				</div>
				<div class="span1">
					{{ $fixture->result['our_score'] }}
				</div>

				<div class="span1">
					{{ $fixture->result['opp_score'] }}
				</div>
				<div class="span2">
					{{ $fixture->team->name }}
				</div>
				<div class="span1">
					{{ HTML::image('img/crests/'.$fixture->team->crest) }}
				</div>
			@else
				<div class="span1">
					{{ HTML::image('img/crests/'.$fixture->team->crest) }}
				</div>
				<div class="span2">
					{{ $fixture->team->name }}
				</div>
				<div class="span1">
					{{ $fixture->result['opp_score'] }}
				</div>

				<div class="span1">
					{{ $fixture->result['our_score'] }}
				</div>
				<div class="span2">
					St. Paul's GFC
				</div>
				<div class="span1">
					{{ HTML::image('img/crests/stpauls.png') }}
				</div>
			@endif
			
				<div class="span6 offset1">
					<small class="muted">
						<i>{{ MyHelpers::irish_date($fixture->datetime, 'long') }}</i> | 
						<b>{{ $fixture->venue->name . " " . $fixture->venue->address }}</b> | 
						<i>{{ $fixture->competition->name }}</i>
					</small>
				</div>
			</div>
			<hr />
		@endforeach
	</div>
</div>
@endsection