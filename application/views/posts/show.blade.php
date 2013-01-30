@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span12">
		<div class="page-header">
			<h3>{{ $post->title }}</h3>
			<p><i>{{ date("d.m.Y", strtotime($post->updated_at)) }} by {{ $post->user->name }}</i></p>
		</div>	
		<div class="row">
			<div class="span10 offset1">
					
				<p>{{ nl2br($post->content) }}</p>

			</div>
		</div>	
		<hr />
		<div class="row">
			<div class="fb-comments span10 offset1" data-href="http://www.stpaulsgfc.ie" data-width="970" data-num-posts="10">
				
			</div>
		</div>
	</div>
</div>
@endsection