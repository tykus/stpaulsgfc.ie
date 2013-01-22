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
		
			<div class="row">
				<div class="span9">
					@yield('content')
				</div>
				<div class="span3">
					<h3>Last Result</h3>
				</div>	
			</div>	
		</div>

    </div>


	<!-- FOOTER 
		 ======
	-->
    <div id="footer">
      <div class="container">
        <p class="muted">&copy; {{ date('Y') }} St. Paul's GFC</p>
      </div>
    </div>
				
	</body>
</html>