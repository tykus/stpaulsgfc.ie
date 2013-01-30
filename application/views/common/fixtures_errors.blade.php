@if($errors->has())
<div class="alert alert-error">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error(s) preventing the form submission:</h4>
  	{{ $errors->first('team_id', '<p>:message</p>') }}
	{{ $errors->first('competition_id', '<p>:message</p>') }}
	{{ $errors->first('venue_id', '<p>:message</p>') }}
</div>
@endif