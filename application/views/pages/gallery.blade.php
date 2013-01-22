@layout('layouts.default')

@section('content')
	<div class="span12">
		<h3>Annual Fun Day 2009</h3>
		<ul class="thumbnails">
			
			@foreach($photos as $photo)
			<li class="span3">
				<a href="#" class="thumbnail">
					<img src="{{ $photo }}" alt="">
				</a>
			</li>
			@endforeach
			
		</ul>
	</div>
@endsection