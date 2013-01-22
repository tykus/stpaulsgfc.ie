<!DOCTYPE html>
<html>
	<head>
		<title>{{ $page_title }}</title>
		{{ Asset::container('bootstrapper')->styles() }}
		{{ Asset::container('bootstrapper')->scripts() }}
		{{ HTML::style('css/application.css') }}
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
		               	{{ HTML::link('location', 'About', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')) }}
					      
					    <ul class="dropdown-menu">
					      <li>{{ HTML::link('#', 'Committee') }}</li>
					      <li>{{ HTML::link('location', 'Location') }}</li>
					      <li>{{ HTML::link('contact', 'Contact') }}</li>
					    </ul>
					  </li>
			          <li class="divider-vertical"></li>
		              <li>{{ HTML::link('#', 'Gallery') }}</li>
			          <li class="divider-vertical"></li>
		              <li>{{ HTML::link('#', 'Matches') }}</li>
		            </ul>
		            <!-- The drop down menu -->
			        <ul class="nav pull-right">
			          <li class="divider-vertical"></li>
			          <li class="dropdown">
			            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
			            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
			            	<form action="[YOUR ACTION]" method="post" accept-charset="UTF-8">
							  <input id="user_username" style="margin-bottom: 15px;" type="text" name="user[username]" size="30" placeholder="Email" />
							  <input id="user_password" style="margin-bottom: 15px;" type="password" name="user[password]" size="30" placeholder="Password" />
							  <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="user[remember_me]" value="1" />
							  <label class="string optional" for="user_remember_me"> Remember me</label>
							 
							  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
							</form>
			            </div>
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
			
			
			<div class="page-header">
				<h1>{{ $page_title }}</h1>
			</div>
			
			<div class="row">
				@yield('content')
			</div>	
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
        		{{ HTML::image('img/crests/stpauls.png') }}	
        	</div>
        	<div class="span4 footer-center">
        		<p class="muted">&copy; {{ date('Y') }} St. Paul's GFC</p>	
        	</div>
        	<div class="span4 footer-right">
        		{{ HTML::image('img/gaa.png') }}	
        	</div>
        	
      </div>
    </div>
				
	</body>
</html>