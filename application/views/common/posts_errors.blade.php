@if($errors->has())
<div class="alert alert-error">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error(s) preventing the form submission:</h4>
  	{{ $errors->first('title', '<p>:message</p>') }}
	{{ $errors->first('content', '<p>:message</p>') }}
</div>
@endif