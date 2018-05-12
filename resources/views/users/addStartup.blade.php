<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Area | Add Startup</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/adminstyle.css" rel="stylesheet">
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
          <ul class="nav navbar-nav">
            <li><a href='/dashboard'>Dashboard</a></li>
            <li><a href="/addStartup">Add Startup</a></li>
            <li><a href="detailed.html">Startup Details</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="active">
                  <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Welcome,  {{ Auth::user()->name }} <span class="caret"></span>
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
            <h1><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Startup</h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" 
              aria-haspopup="true" aria-expanded="true">
                Add Startup
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Edit Startup</a></li>
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
          <li><a href="/dashboard">Dashboard</a></li>
          <li class="active">Add Startup</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <div class="list-group">
              <a href="/dashboard" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard           
              </a>
              <a href="/addStartup" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Startup
              </a>
              <a href="#" class="list-group-item">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Startup Details    
              </a>
            </div>
          </div>

          <div class="col-md-9">
          <!--Startup Overview-->
            <div class="panel panel-default">

              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Add Startup</h3>
              </div>

              <div class="panel-body panel-inner">

                  <form method="POST" action='dashboard/store' enctype="multipart/form-data">
                    {{ csrf_field() }}
                          <h4>Personal Information :</h4>

                          <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control"name="fullname" placeholder="Your Full Name" required>
                          </div>

                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control"name="email" placeholder="Your Email" required>
                          </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password" required>
                          </div>

                          <br>

                          <h4>Startup Information :</h4>

                          <div class="form-group">
                            <label>Business Name</label>
                            <input type="text" class="form-control"name="business_name" placeholder="Name of Startup" required>
                          </div>

                          <div class="form-group">
                            <label>Business Location</label>
                            <input type="text" class="form-control"name="business_location" placeholder="Location of Startup" required>
                          </div>

                          <div class="form-group">
                            <label>Business Website</label>
                            <input type="text" class="form-control" name="business_website" placeholder="Website" required>
                          </div>

                          <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" name="phone" placeholder="Phone Number" required>
                          </div>

                          <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control"name="facebook" placeholder="Facebook url" >
                          </div>

                          <div class="form-group">
                            <label>Twitter</label>
                            <input type="url" class="form-control" name="twitter" placeholder="Twitter url" >
                          </div>

                          <div class="form-group">
                            <label>Linkedin</label>
                            <input type="url" class="form-control" name="linkedin" placeholder="Linkedin url" >
                          </div>

                          <div class="form-group">
                            <label>Market / Industry</label>
                            <input type="text" class="form-control"name="industry" placeholder="e.g. Real Estate" required>
                          </div>

                          <div class="form-group">
                            <label>Brief Description / Overview</label>
                            <textarea name="editor1" class="form-control" placeholder="Description of Business" required></textarea>
                          </div>

                          <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div><label>Business Logo</label></div>
                            <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;">
                              <img src="../assets/img/placeholder" alt="logo">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                            <div class="text-center">
                              <span class="btn btn-default btn-file"><span class="fileinput-new">Upload photo</span><span class="fileinput-exists">Change</span><input type="file" name="cover_image"></span>
                              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                          </div>

                          <br><br>

        

                      <h4>Founder Information:</h4>

                      <div class="row">

                        <div class="col-md-6">

                          

                          <!-- F1 -->
                            <h5>--- Founder 1 ---</h5>
                            <div class="form-group">
                              <label>Full Name</label>
                              <input type="text" class="form-control" name="fullname1" placeholder="Your Full Name" required>
                            </div>

                            <div class="form-group">
                              <label>Facebook</label>
                              <input type="url" class="form-control"name="facebook1" placeholder="Facebook url">
                            </div>

                            <div class="form-group">
                              <label>Twitter</label>
                              <input type="url" class="form-control"name="twitter1" placeholder="Twitter url">
                            </div>

                            <div class="form-group">
                              <label>Linkedin</label>
                              <input type="url" class="form-control" name="linkedin1" placeholder="Linkedin url">
                            </div>

                            <br>

                            <!-- F2 -->
                            <h5>--- Founder 2 ---</h5>
                            <div class="form-group">
                              <label>Full Name</label>
                              <input type="text" class="form-control" name="fullname2" placeholder="Your Full Name">
                            </div>

                            <div class="form-group">
                              <label>Facebook</label>
                              <input type="url" class="form-control" name="facebook2" placeholder="Facebook url">
                            </div>

                            <div class="form-group">
                              <label>Twitter</label>
                              <input type="url" class="form-control" name="twitter2" placeholder="Twitter url">
                            </div>

                            <div class="form-group">
                              <label>Linkedin</label>
                              <input type="url" class="form-control" name="linkedin2" placeholder="Linkedin url">
                            </div>

                            <br>

                            <!-- F3 -->
                            <h5>--- Founder 3 ---</h5>
                            <div class="form-group">
                              <label>Full Name</label>
                              <input type="text" class="form-control" name="fullname3" placeholder="Your Full Name">
                            </div>

                            <div class="form-group">
                              <label>Facebook</label>
                              <input type="url" class="form-control" name="facebook3" placeholder="Facebook url">
                            </div>

                            <div class="form-group">
                              <label>Twitter</label>
                              <input type="url" class="form-control" name="twitter3" placeholder="Twitter url">
                            </div>

                            <div class="form-group">
                              <label>Linkedin</label>
                              <input type="url" class="form-control"  name="linkedin3" placeholder="Linkedin url">
                            </div>

                          

                        </div>

                        <div class="col-md-6">

                          

                          <!-- F4 -->
                            <h5>--- Founder 4 ---</h5>
                            <div class="form-group">
                              <label>Full Name</label>
                              <input type="text" class="form-control" name="fullname4" placeholder="Your Full Name">
                            </div>

                            <div class="form-group">
                              <label>Facebook</label>
                              <input type="url" class="form-control" name="facebook4" placeholder="Facebook url">
                            </div>

                            <div class="form-group">
                              <label>Twitter</label>
                              <input type="url" class="form-control" name="twitter4" placeholder="Twitter url">
                            </div>

                            <div class="form-group">
                              <label>Linkedin</label>
                              <input type="url" class="form-control" name="linkedin4" placeholder="Linkedin url">
                            </div>

                            <br>

                            <!-- F5 -->
                            <h5>--- Founder 5 ---</h5>
                            <div class="form-group">
                              <label>Full Name</label>
                              <input type="text" class="form-control" name="fullname5" placeholder="Your Full Name">
                            </div>

                            <div class="form-group">
                              <label>Facebook</label>
                              <input type="url" class="form-control" name="facebook5" placeholder="Facebook url">
                            </div>

                            <div class="form-group">
                              <label>Twitter</label>
                              <input type="url" class="form-control" name="twitter5" placeholder="Twitter url">
                            </div>

                            <div class="form-group">
                              <label>Linkedin</label>
                              <input type="url" class="form-control" name="linkedin5" placeholder="Linkedin url">
                            </div>

                          

                        </div>

                      </div>
                      <div class="panel-footer">
                      <div>
                            <input type="submit" class="btn btn-success" value="Submit"/>
                            <button href="/dashboard" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>

                  </form>
                    </div>

                    
                    
              
            </div>
            
          
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright KawoLegal, &copy; 2017</p>
    </footer>
    
    
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'editor1' );
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/fileinput.js"></script>
  </body>
</html>
