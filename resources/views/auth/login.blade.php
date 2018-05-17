<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="description" content="">
        <meta name="author" content="">    
        <link rel="shortcut icon" href=""> 
    
        <title>KawoLegal | Login</title>
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
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
    <div id="app">
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
		            <li ><a href="/startups">Startups</a></li> 
		            <li ><a href="/register">Register</a></li>
		            <li class="active"><a href="/login">Login</a></li>    
		        </ul>

	        </div><!-- /.nav-collapse -->

	    </div>

    </nav><!-- /.Navbar -->
 <main class="py-4">
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <center><h2><div class="card-header">{{ __('Login') }}</div></h2></center>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</div>

<!-- Footer--> 
<!--<footer class="main-footer mobi-footer">

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

</footer>-->



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>
