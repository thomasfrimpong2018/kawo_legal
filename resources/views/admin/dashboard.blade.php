<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KawoLegal Admin | Dashboard</title>
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
            <li class="active"><a href="Dashboard.html">Dashboard</a></li>
            <li><a href="addStartup.html">Add Startup</a></li>
            <li><a href="detailed.html">Startup Details</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">

            <li class="active">
                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
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
              <a href="addStartup.html" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true">    
                </span> Add Startup
              </a>
              <a href="detailed.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">   
                </span> Startup Details
              </a>
              <a href="detailed.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true">   
              </span> Manage Users
            </a>
            <a href="detailed.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true">   
            </span>Manage Admins
              <a href="detailed.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">   
                </span> Approved StartUps
              </a>
              <a href="detailed.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">   
              </span> Unapproved StartUps
            </a>
            </div>
          </div>

          <div class="col-md-9">

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
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Company</th>
                      <th>Market/Industry</th>
                      <th>Location</th>
                      <th>Joined</th>
                      <th>Approve</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td><img src="../assets/img/placeholder" class="img-logo"> Company Name</td>
                      <td>Real Estate</td>
                      <td>Lagos</td>
                      <td>Dec 12, 2016</td>
                      <td><a class="btn btn-success" href=""><i class="glyphicon glyphicon-ok"></i></a></td>
                      <td><a class="btn btn-primary" href="detailed.html"><i class="glyphicon glyphicon-pencil"></i></a> <a class="btn btn-danger" href="#"><i class="glyphicon glyphicon-trash"></a></td>
                    </tr>
                    <tr>
                      <td><img src="../assets/img/placeholder" class="img-logo"> Company Name</td>
                      <td>Local Business</td>
                      <td>Accra</td>
                      <td>Dec 13, 2016</td>
                      <td><a class="btn btn-success" href=""><i class="glyphicon glyphicon-ok"></i></a></td>
                      <td><a class="btn btn-primary" href="detailed.html"><i class="glyphicon glyphicon-pencil"></i></a> <a class="btn btn-danger" href="#"><i class="glyphicon glyphicon-trash"></a></td>
                    </tr>
                    <tr>
                      <td><img src="../assets/img/placeholder" class="img-logo"> Company Name</td>
                      <td>Specialty Food</td>
                      <td>Texas</td>
                      <td>Dec 13, 2016</td>
                      <td><a class="btn btn-success" href=""><i class="glyphicon glyphicon-ok"></i></a></td>
                      <td><a class="btn btn-primary" href="detailed.html"><i class="glyphicon glyphicon-pencil"></i></a> <a class="btn btn-danger" href="#"><i class="glyphicon glyphicon-trash"></a></td>
                    </tr>
                    <tr>
                      <td><img src="../assets/img/placeholder" class="img-logo"> Company Name</td>
                      <td>E-commerce</td>
                      <td>Nairobi</td>
                      <td>Dec 14, 2016</td>
                      <td><a class="btn btn-success" href=""><i class="glyphicon glyphicon-ok"></i></a></td>
                      <td><a class="btn btn-primary" href="detailed.html"><i class="glyphicon glyphicon-pencil"></i></a> <a class="btn btn-danger" href="#"><i class="glyphicon glyphicon-trash"></a></td>
                    </tr>
                  </table>
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
