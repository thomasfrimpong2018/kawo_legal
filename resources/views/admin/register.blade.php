<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/adminstyle.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body> 
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../assets/img/kawo-legal-logo.png" class="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Admin Register</h1>
          </div>      
        </div>
      </div>
    </header>
    
    <section id="main">
      <div class="container">
        <div class="row">
          
          <div class="col-md-4 col-md-offset-4">
              @include('inc.messages')
            <form id="login" class="well" action="/newadmin" method="POST">
                {{ csrf_field() }}
               <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Fullname">
                </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password"  class="form-control" placeholder="Confirm Password">
                  </div>
              <button class="btn btn-primary btn-block">Register</button>
            </form>

          </div>
        </div>
      </div>
    </section>
    <footer id="footer">
      <p>Copyright KawoLegal, &copy; 2017</p>
    </footer>

    

    <script>
      CKEDITOR.replace( 'editor1' );
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
