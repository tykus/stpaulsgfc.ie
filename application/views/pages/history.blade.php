@layout('layouts.default')

@section('content')

	<div class="span12">
		<h3>{{ HTML::entities($history->heading) }}</h3>
		{{ HTML::entities($history->content) }}
		
	</div>

@endsection