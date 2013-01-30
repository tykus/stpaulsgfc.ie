@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span12">
		<h3>Annual Fun Day 2009</h3>
		<ul class="thumbnails">
			
			@foreach($photos as $index => $photo)
				<li class="span4">
					<a href="#" class="thumbnail">
						<img src="{{ $photo }}" alt="">
					</a>
				</li>
		
			@endforeach
			
		</ul>
	</div>
</div>
@endsection