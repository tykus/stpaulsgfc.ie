@layout('layouts.default')

@section('content')

	<div class="span12">
		<h3>{{ $history->heading }}</h3>
		{{ $history->content }}
		
	</div>

@endsection