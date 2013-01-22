@layout('layouts.default')

@section('content')
	<div class="span6">
		<h3>Contact Form</h3>
		{{ Form::vertical_open('#') }}
		{{ Form::label('name', 'Name') }}
		{{ Form::span6_text('name') }}
		{{ Form::label('email', 'Email') }}
		{{ Form::span6_text('email') }}
		{{ Form::label('message', 'Message') }}
		{{ Form::span6_textarea('Message') }}
		{{ Form::submit('Send Message') }}
 		{{ Form::close() }}
	</div>
	<div class="span4 offset2">
		<h3>Club Contact</h3>
		<div class="well">
			<p>David Higgins</p>
			<p class="text-info">Secretary</p>
			<p>
				Warrenstown,<br />
				Dunboyne,<br />
				Co. Meath
			</p>
			<p>087 120 8719</p>
		</div>

	</div>
@endsection