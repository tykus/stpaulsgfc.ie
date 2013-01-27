@section('admin_menu')
	<div class="row">
		<div class="span12">
			<ul>
				<li>{{ HTML::link_to_route('new_post', 'New Post') }}</li>
			</ul>
		</div>
	</div>

@endsection