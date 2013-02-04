<!DOCTYPE html>
<html>
	<head>
		<title>St. Paul's GFC :: {{ $page_title }}</title>
		{{ Asset::container('bootstrapper')->styles() }}
		{{ HTML::style('css/application.css') }}
		{{ HTML::style('css/lightbox.css') }}
		{{ HTML::style('http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css') }}
		{{ Asset::container('bootstrapper')->scripts() }}
		{{ HTML::script('http://code.jquery.com/ui/1.10.0/jquery-ui.js') }}
		{{ HTML::script('js/application.js') }}
		{{ HTML::script('js/lightbox.js') }}
		{{ HTML::script('js/timepicker.js') }}
	</head>
	<body>
		<div id="wrap">

      	<!-- Begin page content -->
		<div class="container white">
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
		          {{ HTML::link('/', 'St. Paul\'s GFC', array('class' => 'brand')) }}
		          <div class="nav-collapse collapse">
		            <ul class="nav">
			          <li class="divider-vertical"></li>
		              <li>{{ HTML::link('/', 'Home') }}</li>
			          <li class="divider-vertical"></li>
		               <li class="dropdown">
		               	{{ HTML::link('#', 'About', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')) }}
					      
					    <ul class="dropdown-menu">
					      <li>{{ HTML::link('history', 'History') }}</li>
					      <li>{{ HTML::link('committee', 'Committee') }}</li>
					      <li>{{ HTML::link('location', 'Location') }}</li>
					      <li>{{ HTML::link('contact', 'Contact') }}</li>
					    </ul>
					  </li>
			          <li class="divider-vertical"></li>
		              <li>{{ HTML::link('gallery', 'Gallery') }}</li>
			          <li class="divider-vertical"></li>
		               <li class="dropdown">
		               	{{ HTML::link('#', 'Matches', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')) }}
					      
					    <ul class="dropdown-menu">
					      <li>{{ HTML::link_to_route('fixtures', 'Fixtures') }}</li>
					      <li>{{ HTML::link_to_route('results', 'Results') }}</li>
					      <li>{{ HTML::link('#', 'Tables') }}</li>
					    </ul>
					  </li>
		            </ul>
		            <!-- The drop down menu -->
			        <ul class="nav pull-right">
			          <li class="divider-vertical"></li>
			          <li class="dropdown">
			          	@if (Auth::user())
			          		{{ HTML::link('#', 'Logged in ' . Auth::user()->name, array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')) }}
			          	@else
			          		{{ HTML::link('#', 'Sign In', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')) }}
			          	@endif	

					    <ul class="dropdown-menu">
					      @if (Auth::user())
					      	<li>{{ HTML::link('logout', 'Logout') }}</li>
					      	<li>{{ HTML::link_to_route('edit_user', 'Change Password', Auth::user()->id) }}</li>
		                    <li class="nav-header">Matches</li>
		                    <li>{{ HTML::link_to_route('fixture_list','Fixtures') }}</li>
		                    <li>{{ HTML::link_to_route('competitions','Competitions') }}</li>
		                    <li>{{ HTML::link_to_route('teams','Teams') }}</li>
		                    <li class="divider"></li>
		                    <li class="nav-header">News &amp; Media</li>
		                    <li>{{ HTML::link_to_route('posts','Posts') }}</li>
		                    <li><a href="#">Gallery</a></li>
		                    <li class="divider"></li>
		                    <li class="nav-header">Club Information</li>
		                    <li>{{ HTML::link_to_route('committee_list','Committee') }}</li>	
		                  @else
		                  	<div class="span3">
				            	{{ Form::open('login') }}
								    <!-- username field -->
								    <p>{{ Form::label('email', 'Email') }}</p>
								    <p>{{ Form::text('email') }}</p>
								    <!-- password field -->
								    <p>{{ Form::label('password', 'Password') }}</p>
								    <p>{{ Form::password('password') }}</p>
								    <!-- submit button -->
								    <p>{{ Form::submit('Login', array('class'=>'btn btn-primary')) }}</p>
								{{ Form::close() }}
							</div>
		                  @endif				      
					    </ul>
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
			    <a href="http://www.facebook.com/stpaulsgfc.clonee" class="pull-right" title="Find us on Facebook">{{ HTML::image('img/facebook.png') }}</a>
				<a href="http://www.twitter.com/StPaulsGFC" class="pull-right" title="Follow us on Twitter">{{ HTML::image('img/twitter.png') }}</a>					
			  </div>
			</div>
			
			<div class="page-title">
				<h1>{{ HTML::entities($page_title) }}</h1>
			</div>
			
			<!-- Display any flash messages -->
			@if (Session::has('flash'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<p>{{ Session::get('flash') }}</p>
			</div>
			@elseif (Session::has('error'))
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<p>{{ Session::get('error') }}</p>
			</div>
			@endif
			
			<!-- Display the page content -->
			@yield('content')
		</div>

      	<div id="push"></div>
    </div>


	<!-- FOOTER 
		 ======
	-->
    <div id="footer">
      <div class="container">
        <div class="row">
        	<div class="span4 footer-left">
        		{{ HTML::image('img/crests/stpauls.png', 'St. Paul\'s GFC') }}	
        	</div>
        	<div class="span4 footer-center">
        		<p class="muted"><br/>&copy; {{ date('Y') }} St. Paul's GFC</p>	
        		<p class="muted">Designed by <a href="http://www.tykus.ie">Tykus</a?></p>	
        	</div>
        	<div class="span4 footer-right">
        		{{ HTML::image('img/gaa.png', 'GAA') }}	
        	</div>
        	
      </div>
    </div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>			
	</body>
</html>