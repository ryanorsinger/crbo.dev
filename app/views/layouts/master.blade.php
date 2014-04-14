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
      <a href="/"><img src="/img/210Geek_logo.png"></a>
    </div>
  </div>

  <br>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
            <a href="/" class="btn-lg">
              <span class="glyphicon glyphicon-home"></span>
            </a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check() && Auth::user()->role == "admin")
        <li><a href=" {{{ action('HomeController@showAdmin') }}} ">Admin Panel</a>
        @endif
        <li><a href="{{{ action('HomeController@logout') }}}">Logout</a></li>
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


</body>

  <!-- SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  @yield('bottom-script')

</html>