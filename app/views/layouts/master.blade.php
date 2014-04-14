<!doctype html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    @yield('title')

    @yield('top-script')
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    

    @yield('style')

  </head>
  <body>
  <br>
  
  <div class="row">
    <div class="col-md-3 col-md-offset-2">
      <img src="/img/210Geek_logo.png">
    </div>
  </div>

  <br>

  <div class="navbar navbar-default">
    <div class="container-fluid">
    
      <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      
      <div class="nav-collapse collapse navbar-responsive-collapse">
        <ul class="nav row">
          <li class="col-12 col-sm-2"><a href="{{{ action('HomeController@showHome') }}}"><span class="icon icon-home"></span> <span class="text">HOME</span></a></li>
          <li class="col-12 col-sm-2"><a href=""><span class="icon icon-user"></span> <span class="text">RESUME</span></a></li>

          <li class="col-12 col-sm-2"><a href=""><span class="icon icon-briefcase"></span> <span class="text">PORTFOLIO</span></a></li>
          <li class="col-12 col-sm-2"><a href=""><span class="icon icon-gears"></span> <span class="text">BLOG</span></a></li>
          @if (Auth::check())
          <li class="col-12 col-sm-2"><a href=""><span class="icon icon-heart"></span> <span class="text">LOGOUT</span></a></li>
          @else
          <li class="col-12 col-sm-2"><a href=""><span class="icon icon-envelope"></span> <span class="text">LOGIN</span></a></li>
          @endif        
        </ul>
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar -->

    @if (Session::has('successMessage'))
        <div class="alert alert-success message">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger message">{{{ Session::get('errorMessage') }}}</div>
    @endif


    @yield('content')


</body>

  <!-- SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  @yield('bottom-script')

</html>