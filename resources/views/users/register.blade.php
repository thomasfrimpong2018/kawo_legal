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

    <title>KawoLegal | Register</title>

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
    <nav class="navbar navbar-fixed-top topnav">

	    <div class="container">

	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="/"><img src="assets/img/kawo-legal-logo.png" alt="KawoLegal" class="logo"></a>
	        </div>

	        <div id="navbar" class="navbar-collapse collapse">

		        <ul class="nav navbar-nav navbar-right kl-nav">
		            <li><a href="/">Home</a></li>
		            <li><a href="/startups">Startups</a></li> 
		            <li class="active"><a href="/register">Register</a></li>
		            <li><a href="/login">Login</a></li>    
		        </ul>

	        </div><!-- /.nav-collapse -->

	    </div>

    </nav><!-- /.Navbar -->


    <div class="container mobi-reg">

    	<div class="row">

    		<div class="col-md-2"></div>

    		<div class="col-md-8 content">
    		
    			<h3>Join KawoLegal. Sign up to get your Startup listed now!</h3>

    			<br>

    			<div class="signup">
    				
    				<form method="POST" action="{{ route('register') }}">
                        @csrf    
    				  <div class="form-group">
					    <label for="fullName">Full Name</label>
					    <input type="password" class="form-control" id="fullName" name="name" placeholder="Full Name" required>
					  </div>

					  <div class="form-group">
					    <label for="Email">Email address</label>
					    <input type="email" class="form-control" name='email' id="Email" placeholder="Email" required>
					  </div>

					  <div class="form-group">
					    <label for="Password">Password</label>
					    <input type="password" class="form-control" name="password " id="Password" placeholder="Password" required>
					  </div>
					  <div class="form-group">
					    <label for="Password">Confirm Password</label>
					    <input type="password" class="form-control" name="password_confirmation " id="Password" placeholder="Password" required>
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Sign up</button>

					</form>

    			</div>

    		</div>

    		<div class="col-md-2"></div>

    	</div>

    </div>


	<!-- Footer -->
	<footer class="footer mobi-footer">

		<div class="container container-footer">

			<div class="col-md-6 foot-txt">
				<ul>
					<li> &copy; 2017 KawoLegal. All Rights Reserved</li>
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