@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span12">
		<h3>Map</h3>
		{{ HTML::image("https://maps.googleapis.com/maps/api/staticmap?center=53.423,-6.46&zoom=13&size=580x300&scale=2&markers=icon|53.432677,-6.481554&sensor=true", 'Map to ground' , array('class'=>'img-polaroid')) }}
		<p>
			GPS: N53.43323° W6.48118°<br />
			{{ HTML::link("https://maps.google.ie/maps/ms?msa=0&amp;msid=207536698210182088650.000460d56d43214a6991f&amp;ie=UTF8&amp;ll=53.43323,-6.48118&amp;spn=0,0&amp;t=m&amp;z=13", "View in Google Maps", array('class' => 'btn btn-primary whitespace'))}}
		</p>	
	</div>
</div>
@endsection