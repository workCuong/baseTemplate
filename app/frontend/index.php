<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Description of website">
	<meta name="robots" content="INDEX,FOLLOW">
	<meta property="og:title" content="title of website">
	<meta property="og:description" content="description of website.">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../skin/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../skin/css/bootstrap.min.css">
</head>
<body>

<!-- Navigation -->
	<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
<!--End navigation-->
<!--Carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img class="first-slide" src="" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>First headline.</h1>
              <p>Note:.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1second headline.</h1>
              <p>second.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img class="third-slide" src="" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Third title.</h1>
              <p>Content of third.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!--end carousel->

<!--footer-->
<footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>© 2014 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>
<!--end footer-->
<!--Import script -->
<script type="text/javascript" src="../skin/js/jquery.js"></script>
<script type="text/javascript" src="../skin/js/theme-script.js"></script>
<script type="text/javascript" src="../skin/js/bootstrap.min.js"></script>
<!--End import script -->
</body>
</html>