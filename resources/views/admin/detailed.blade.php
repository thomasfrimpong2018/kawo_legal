<!DOCTYPE html>
<html lang="en">

	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KawoLegal Admin | Dashboard</title>
    <!-- Material Design Icons -->
    <link rel="stylesheet" href="/assets/MaterialDesign-Webfont-master/css/materialdesignicons.min.css">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/adminstyle.css" rel="stylesheet">

    <!-- Fonts CSS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

    <!-- Custom CSS -->
    
  </head>
<body>
    
    <!-- Navbar -->
    
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="../assets/img/kawo-legal-logo.png" class="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/dashboard">Dashboard</a></li>
            <li><a href="#">Add Startup</a></li>
            <li><a href="#">Startup Details</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">

            <li class="active">
                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   Welcome, {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </li>

            <li><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">Logout</a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                           
                       </form></li>

          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    </nav><!-- /.Navbar -->


    <div class="container container-maindetailed">

    	<div class="row">

    		<div class="col-md-1"></div>

    		<div class="col-md-10 content">

    		<!--Startup details-->

            

            <br>

            <!-- Startup Info -->
            <div class="panel panel-default panel-style">

              <div class="panel-heading">
                <h3>Startup Information</h3>
              </div>

              <div class="panel-body">

                <div class="col-md-8">

                  <p><label>Business Name: </label> {{$startup->business_name}}</p>

                  <p><label>Business Location: </label> {{$startup->business_location}}</p>

                  <p><label>Business Website: </label> {{$startup->business_website}}</p>

                  <p><label>Phone:</label> {{$startup->phone}}</p>

                  <p><span class="mdi mdi-facebook-box"></span> {{$startup->facebook}}</p>

                  <p><span class="mdi mdi-twitter-box"></span>{{$startup->twitter}}</p>

                  <p><span class="mdi mdi-linkedin-box"></span> {{$startup->linkedin}}</p>

                  <p><label>Market/Industry:</label> {{$startup->industry}}</p>

                  <p><label>Description:</label>  <br>{!!$startup->description!!}
                  </p>

                </div>

                <div class="col-md-4">

                  <label>Company Logo</label>
                  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                    <img src="/storage/cover_image/{{$startup->business_logo}}" alt="contact photo">
                  </div>

                </div>

              </div>

            </div>

            <!-- Founder Info -->
            <div class="panel panel-default panel-style">

              <div class="panel-heading">
                <h3>Founder Information</h3>
              </div>

              <div class="panel-body">
                
                <p><label>Full Name:</label> {{$startup->founder_1}}</p>

                <p><span class="mdi mdi-facebook-box"></span> {{$startup->facebook_1}}</p>

                <p><span class="mdi mdi-twitter-box"></span> {{$startup->twitter_1}}</p>

                <p><span class="mdi mdi-linkedin-box"></span> {{$startup->linkedin_1}} </p>

              </div>

            </div>

            <br>

            <!-- Comments -->
            <div class="comments">

            	<hr>

            	<h3>Comments:</h3>
              @foreach($comments  as $comment)
	            <ul>

	            	<li>
		            	<div class="row">
		            		<div class="col-md-1 comment-icon">
		            			<span class="mdi mdi-comment-outline"></span>
		            		</div>

			            	<div class="col-md-10">
				            	{{$comment->body}}
				            </div>

				            <div class="col-md-1"></div>
		            	</div>
	            	</li>

	            	<br>

	            	

	            </ul>
              @endforeach
	            <br>

	            

            </div><!-- /.comments -->

	    	</div>

	    	<div class="col-md-1"></div>

    	</div>

    </div>


	<!-- Footer -->
	<footer id="footer">

		<div class="container container-footer">

			<div class="col-md-6 foot-txt">
				<ul>
					<li> &copy; 2017 KawoLegal. All Rights Reserved</li>
				</ul>
			</div>

			<div class="col-md-6 social">

				<ul class="">
					<li><a href="#"><span class="mdi mdi-facebook"></span></a></li>
					<li><a href="#"><span class="mdi mdi-twitter"></span></a></li>
					<li><a href="#"><span class="mdi mdi-linkedin"></span></a></li>
					<li><a href="#"><span class="mdi mdi-instagram"></span></a></li>
				</ul>

			</div>

		</div>

	</footer>

   


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="/assets/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>


</body>
</html>