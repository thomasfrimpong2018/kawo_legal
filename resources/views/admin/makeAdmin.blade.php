
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Area | Dashboard</title>
          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap core CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/adminstyle.css" rel="stylesheet">
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
      <a class="navbar-brand" href="/"><img src="http://kawolegal.com/assets/img/kawo-legal-logo.png" class="logo" alt="kawo-legal-logo"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href='/addstartup'>Add Startup</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="active">
                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 Welcome,   {{ Auth::user()->name }} <span class="caret"></span>
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

   <header id="header">
     <div class="container">
       <div class="row">
         <div class="col-md-10">
           <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Dashboard</h1>
         </div>
         <div class="col-md-2">
           <div class="dropdown create">
             <a href='/addstartup' class="btn btn-default" id="dropdownMenu1" >
               Add Startup
             </a>

           </div>
         </div>
       </div>
     </div>
   </header>
   <center>
   <div class="container">
     <div class="panel-body">
     <h3>Are You Sure You Want To make  "{{$user->name}}" an administrator</h3>

       <div class="row">
         <div class="col-md-6">
           <form style="float:right" action="/newadmin/{{$user->id}}" method="POST">
            {{method_field('PUT')}}
              {{ csrf_field() }}
              <input type="hidden" value="1" name="admin"/>
              <button type="submit" class="btn btn-success" >
              </form>
              <span class="glyphicon glyphicon-ok"></span>
              <span>Yes</span>
            </button>
         </div>
         <div class="col-md-1" style="float:left">
           
            <a href="/userlist" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancel</a>
         </div>

       </div>
     </div>
   </div>
 </center>
 
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
