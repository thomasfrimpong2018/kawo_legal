<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Area | Dashboard</title>
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
          <a class="navbar-brand" href="#"><img src="../assets/img/kawo-legal-logo.png" class="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/dashboard">Dashboard</a></li>
            <li><a href="/addStartup">Add Startup</a></li>
            <li><a href="detailed.html">Startup Details</a></li>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>User Dashboard</h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Add Startup
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Edit Startup</a></li>
                <li><a href="#">Remove Startup</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">

            <div class="list-group">
              <a href="dashboard.html" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                Dashboard
              </a>
              <a href='/addstartup' class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true">    
                </span>Add Startup 
              </a>
              <a href="detailed.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">   
                </span>Startup Details 
              </a>
              
            </div>
          </div>
           
          <div class="col-md-9">
           @include('inc.messages')
            <!--List of All Startups-->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">All Startups</h3>
              </div>
              <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <input type="text" class="form-control" placeholder="Filter Startups">
                    </div>
                  </div>
                  <br>
                  @if(count($startups)>0)
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Company</th>
                      <th>Market/Industry</th>
                      <th>Added</th>
                      <th>Status</th>
                     <th>Edit/Delete/Details</th>
                    </tr>

                    @foreach($startups as $startup)
                  <tr id="row_{{$startup->id}}">
                      <td><img src="/storage/cover_image/{{$startup->business_logo}}" class="img-logo"> {{$startup->business_name}}</td>
                      <td>{{$startup->industry}}</td>
                      <td>{{$startup->created_at}}</td>
                      <td>{{$startup->status}}</td>
                     <td><a class="btn btn-primary" href="/dashboard/{{$startup->id}}/edit"><i class="glyphicon glyphicon-pencil"></i></a>

                       <a class="btn btn-danger" href="/dashboard/{{$startup->id}}"><i class="glyphicon glyphicon-trash"></i></a>
                        <a class="btn btn-info" href="/showdetailed/{{$startup->id}}"><i class="glyphicon glyphicon-list-alt"></i></a> </td>
                    </tr>
                    @endforeach
                   
                  </table>
                  @else
                    <h4>No  StarUp to show</h4>
                    @endif
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <footer id="footer">
      <p>Copyright KawoLegal, &copy; 2017</p>
    </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
  </body>
</html>
