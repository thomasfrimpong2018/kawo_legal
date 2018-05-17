 
 
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
    <link rel="stylesheet" href="/assets/MaterialDesign-Webfont-master/css/materialdesignicons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">

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
		            <li class="active"><a href="/startups">Startups</a></li> 
					
					@if(Auth::guest())
					<li ><a href="/register">Register</a></li>
					<li><a href="/login">Login</a></li> 
                   @else
					<li><a href="/dashboard">Dashboard</a></li> 
					  @endif    
		        </ul>

	        </div><!-- /.nav-collapse -->

	    </div>

    </nav><!-- /.Navbar -->
    <div class="container">

    	<div class="row">

    		<div class="col-md-1"></div>

    		<div class="col-md-10 content">

    			
    		
	    		<div class="list">
	    			
	    			<ul>
                        @foreach($startups as $startup)
	    				<li>
							
	    					
	    					<div class="col-md-12">
	    						
	    						<div class="col-md-2">

	    							<div class="profile">
	    								<h3><img src='/storage/cover_image/{{$startup->business_logo}}' class="img-responsive dp" alt="company logo"></h3>
	    							</div>

	    						</div>

	    						<div class="col-md-10">
	    							
	    							<h3>{{$startup->business_name}}</h3>

	    							<p>
											{!!$startup->description!!}
	    							</p>

	    							<p>
	    								<a href="/showdetail/{{$startup->id}}"><button class="btn btn-default btn-sm">See full details</button></a>
	    							</p>

	    							<hr>

	    						</div>

	    					</div>

						</li>
						@endforeach

	    				

	    			</ul>

	    		</div>


	    		</div>
                 {{$startups->links()}}
	    	

	    	<div class="col-md-1"></div>

    	</div>

	</div>


   


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>

