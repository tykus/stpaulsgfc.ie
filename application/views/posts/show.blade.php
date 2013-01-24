@layout('layouts.default')

@section('content')
<div class="span12">
	<div class="page-header">
		<h3>{{ $post->title }}</h3>
	</div>	
	<div class="span6">
			
		<p>{{ $post->content }}</p>
		<hr />
		<p><b>Expires:</b> {{ date("d.m.Y", strtotime($post->expires)) }}</p>
		<p><b>Created:</b> {{ date("d.m.Y", strtotime($post->created_at)) }} by {{ $post->user->name }}</p>
		<p><b>Updated:</b> {{ date("d.m.Y", strtotime($post->updated_at)) }} by {{ $post->user->name }}</p>
		<p>
			
		</p>
	</div>
	
	<div class="fb-comments span5" data-href="http://www.stpaulsgfc.ie" data-width="500" data-num-posts="10">
		
	</div>
</div>
@endsection