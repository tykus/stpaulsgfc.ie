<!DOCTYPE html>
<html>
	<head>
		<title>{{ $page_title }}</title>
		{{ Asset::container('bootstrapper')->styles() }}
		{{ Asset::container('bootstrapper')->scripts() }}
		{{ HTML::style('css/application.css') }}
	</head>
	<body>
		<div class="container">
			<!-- Navbar
		    ================================================== -->
		    <div class="navbar navbar-inverse navbar-fixed-top">
		      <div class="navbar-inner">
		        <div class="container">
		          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          {{ HTML::link('posts/index', 'St. Paul\'s GFC', array('class' => 'brand')) }}
		          <div class="nav-collapse collapse">
		            <ul class="nav">
		              <li class="active">
		                <a href="#"><i class="icon-home icon-white"></i>Home</a>
		              </li>
		               <li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					      About
					      <b class="caret"></b>
					    </a>
					    <ul class="dropdown-menu">
					      <li class=""><a href="#">Committee</a></li>
					      <li class=""><a href="#">Location</a></li>
					      <li class=""><a href="#">Contact</a></li>
					    </ul>
					  </li>
		              
		              <li class="">
		                <a href="#">About</a>
		              </li>
		              <li class="">
		                <a href="#">Matches</a>
		              </li>
		              <li class="">
		                <a href="#">Photos</a>
		              </li>
		            </ul>
		          </div>
		        </div>
		      </div>
		    </div>
			
			<div class="jumbotron masthead">
			  <div class="container">
			    <h1>St. Paul&apos;s GFC</h1>
			    <p>Clonee, Co. Meath</p>
			  </div>
			</div>
		
		
			
			@yield('content')
			
		</div>
		
		
	    <!-- Footer
	    ================================================== -->
	    <footer class="footer">
	      <div class="container">
	        <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
	        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
	        <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
	        <ul class="footer-links">
	          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
	          <li class="muted">&middot;</li>
	          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
	          <li class="muted">&middot;</li>
	          <li><a href="https://github.com/twitter/bootstrap/wiki">Roadmap and changelog</a></li>
	        </ul>
	      </div>
	    </footer>		
				
	</body>
</html>