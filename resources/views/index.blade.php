
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href=""> 

    <title>KawoLegal | Online Legal Help</title>

    <!-- Material Design Icons -->
    <link rel="stylesheet" href="assets/MaterialDesign-Webfont-master/css/materialdesignicons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fonts CSS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-fixed-top scrolling-navbar bar-mobi">

	    <div class="container">

	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="index.html"><img src="assets/img/kawo-legal-logo.png" alt="KawoLegal" class="logo"></a>
	        </div>

	        <div id="navbar" class="navbar-collapse collapse">

		        <ul class="nav navbar-nav navbar-right kl-nav">
		            <li class="active"><a href="/">Home</a></li>
		            <li><a href="/startups">Startups</a></li> 
					
					@if(Auth::guest())
					<li><a href="/register">Register</a></li>
					<li><a href="/login">Login</a></li> 
                   @else
					<li><a href="/dashboard">Dashboard</a></li> 
					  @endif  
		        </ul>

	        </div><!-- /.nav-collapse -->

	    </div>

    </nav><!-- /.Navbar -->


    <!-- Mask -->
    <div class="view hm-black-strong" style="background-image: url('assets/img/office.jpg');">

        <div class="full-bg-img flex-center">

	        <div class="container container-flex">

	        	<div class="col-md-3"></div>

		        <div class="col-md-6 text">

		        	<p>
		        		<h1 class="hidden-xs">KAWOLEGAL</h1>
		        	</p>

		        	<p>
		        		<h3>
		        			A collaborative ecosystem for African problem solvers providing basic legal, business and innovation support to Startups.
		        		</h3>
		        	</p>

		        	<br>
                  @if(Auth::guest())
		        	<p>
		        		<a href="/register"><button class="btn btn-info btn-lg text-btn">Register Now!</button></a>
		        	</p>
                @endif
		        </div>

		        <div class="col-md-3"></div>

	        </div>

	    </div>

	</div>


	<!-- Footer -->
	<footer class="main-footer mobi-footer">

		<div class="container container-footer">

			<div class="col-md-6 foot-txt">
				<ul>
					<li> &copy;2017 KawoLegal. All Rights Reserved</li>
				</ul>
			</div>

			<div class="col-md-6 social">

				<ul>
					<li><a href=""><span class="mdi mdi-facebook"></span></a></li>
					<li><a href=""><span class="mdi mdi-twitter"></span></a></li>
					<li><a href=""><span class="mdi mdi-linkedin"></span></a></li>
					<li><a href=""><span class="mdi mdi-instagram"></span></a></li>
				</ul>

			</div>

		</div>

	</footer>

   


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>