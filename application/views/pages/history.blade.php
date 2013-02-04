@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span12">
		<h3>{{ $history->heading }}</h3>
		{{ $history->content }}
	</div>
	
	
	<div class="span12">
    <ul class="thumbnails">
      <li class="span3">
        <a href="img/gallery/100.jpg" class="thumbnail" rel="lightbox['history']" title="St. Paul's GFC">
          <img src="img/gallery/100.jpg" alt="260x180" style="width: 260px; height: 180px;">
        </a>
      </li>
      <li class="span3">
        <a href="img/gallery/50.jpg" class="thumbnail" rel="lightbox['history']" title="St. Paul's GFC">
          <img src="img/gallery/50.jpg" alt="260x180" style="width: 260px; height: 180px;">
        </a>
      </li>
      <li class="span3">
        <a href="img/gallery/51.jpg" class="thumbnail" rel="lightbox['history']" title="St. Paul's GFC">
          <img src="img/gallery/51.jpg" >
        </a>
      </li>
      <li class="span3">
        <a href="img/gallery/64.jpg" class="thumbnail" rel="lightbox['history']" title="St. Paul's GFC">
          <img src="img/gallery/64.jpg"  >
        </a>
      </li>
    </ul>
  </div>
</div>
@endsection