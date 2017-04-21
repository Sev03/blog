<!DOCTYPE html>
<html lang="de">
<head>
	<title>Blog</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/site.css') }}">
	@yield('head')
</head>

<body>
	<div class="nav1">
	<header> <!-- Code für zusammenklappbare Navbar -->
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Mobile Menü -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Home</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="#"><a href="#">News <span class="sr-only"></span></a></li>
		        <li><a href="#">Kontakt</a></li>
		        <li class="#">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mehr <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-right">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="...">
		        </div>
		        <button type="submit" class="btn btn-default">Suchen</button>
		      </form>

		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>

  <div align="center">

        <img id="logo" class="img-rounded img-responsive" src="{{asset('img/banner.jpg')}}">
  </div>
<hr>
    <div class="container">

     		@yield('content')
    </div>
     <div class="push"></div>
  </div>


<footer>	<!-- Footer mit Impressum und (c) -->
          <nav class="navbar navbar-default" id="footer">
            <div class="container" style="color: #0070bf">
            <div class="navbar-brand navbar-right"><a href="{{url('impressum')}}">Impressum</a> &copy; Sev</div>
            </div>
          </nav>
</footer>


	</div>
<script src="{{ asset('js/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>