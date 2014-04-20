<!doctype html>
<html lang="en-us" ng-app>
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	@yield('title')

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="animate.min.css">

	@yield('top-script')

	<style>

	  .navbar-default .navbar-nav > li > a {
		color: rgb(85,85,85);
		font-size: 1.2em;
	  }

	  #main-container {
		margin-right: 10%;
		margin-left: 10%;
		margin-top: 5%;
		color: rgb(85,85,85);
	  }

	  #user-display {
		padding-top: 15px;
		padding-bottom: 15px;
		font-style: italic;
	  }

	</style>
	

	@yield('style')

  </head>
  <body>
	<div class="container-fluid" id="main-container">
  
	  <div class="row">
		<div class="col-md-3">
		  <a href="/"><img src="/img/210Geek_logo.png"></a>
		</div>
	  </div>

	  <br>

	  <nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">

		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="user-display">

			  <!--- Show username if logged in -->
			  @if (Auth::check())
			  <li>
				  <span class="glyphicon glyphicon-user"></span> &nbsp;{{ Auth::user()->username }}
			  </li>
			  @endif
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  
			  <!--- Navbar links for Admin -->
			  @if (Auth::check() && Auth::user()->role == "admin")
			  <li>
				<a href=" {{{ action('HomeController@showHome') }}} ">
				  <span title="Home"; class="glyphicon glyphicon-home"></span>
				</a></li>
			  <li>
				<a href=" {{{ action('HomeController@showAdmin') }}} ">
				  <span title="Settings"; class="glyphicon glyphicon-cog"></span> 
				</a>
			  </li>
			  <li>
				<a href="{{{ action('HomeController@logout') }}}">
				  <span title="Logout"; class="glyphicon glyphicon-log-out"></span>
				</a>
			  </li>

			  <!--- Navbar links for Employee -->
			  @elseif (Auth::check())
			  <li>
				  <a href=" {{{ action('HomeController@showHome') }}} " class="btn-lg">
					<span class="glyphicon glyphicon-home"></span>
				  </a>
			  </li>
			  <li><a href="{{{ action('HomeController@logout') }}}">Logout</a></li>

			  <!--- Navbar links for non-authenticated -->
			  @else
			  <li><a href="{{{ action('HomeController@showLogin') }}}"></a></li>        
			  @endif
			</ul>
		  </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	  </nav>

		  @if (Session::has('successMessage'))
			  <div class="alert alert-success message">{{{ Session::get('successMessage') }}}</div>
		  @endif
		  @if (Session::has('errorMessage'))
			  <div class="alert alert-danger message">{{{ Session::get('errorMessage') }}}</div>
		  @endif


		  @yield('content')

	</div>

  <!-- SCRIPTS -->
  <script src="/js/jquery-1.10.2.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  
  </body>

  @yield('bottom-script')

</html>