<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Area | Add Startup</title>
    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/adminstyle.css" rel="stylesheet">
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
          <a class="navbar-brand" href="#"><img src="/assets/img/kawo-legal-logo.png" class="logo"></a>
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
              <h3 class="panel-title">Edit Startup,  {{$startup->business_name}}</h3>
              </div>

              <div class="panel-body panel-inner">
                {!!Form::open(['action'=>['DashboardController@update',$startup->id],'method'=>'POST', 'enctype'=>"multipart/form-data"]) !!}
                      
                  <h4>Personal Information :</h4>

                          <div class="form-group">
                            {{Form::label('fullname','Full Name')}}
                            {{Form::text('fullname',$startup->fullname,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                           {{Form::label('email','Email')}}
                            
                            {{Form::email('email',$startup->email,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                            {{Form::label('password','Password')}}
                            
                            {{Form::text('password',$startup->password,['class'=>"form-control"])}}
                          </div>

                          <br>

                          <h4>Startup Information :</h4>

                          <div class="form-group">
                            {{Form::label('business_name','Business Name')}}
                            
                            {{Form::text('business_name',$startup->business_name,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                            {{Form::label('business_location','Business Location')}}
                            
                            {{Form::text('business_location',$startup->business_location,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                            {{Form::label('business_website','Business Website')}}
                            
                            {{Form::text('business_website',$startup->business_website,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                             {{Form::label('phone','Phone')}}
                            
                            {{Form::text('phone',$startup->phone,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                            {{Form::label('facebook','Facebook')}}
                            
                            {{Form::text('facebook',$startup->facebook,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                            {{Form::label('twitter','Twitter')}}
                            
                            {{Form::text('twitter',$startup->twitter,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                            {{Form::label('linkedin','Linkedin')}}
                            
                            {{Form::text('linkedin',$startup->linkedin,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                            {{Form::label('idustry','Market / Industry')}}
                            
                            {{Form::text('industry',$startup->industry,['class'=>"form-control"])}}
                          </div>

                          <div class="form-group">
                            {{Form::label('editor1','Brief Description / Overview')}}
     
                            {{Form::textarea('editor1',$startup->description,['class'=>"form-control"]) }}
                          </div>

                          <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div> {{Form::label('cover_image','Business Logo')}}</div>
                            <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;">
                              <img src="/storage/cover_image/{{$startup->business_logo}}" alt="logo">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                            <div class="text-center">
                              <span class="btn btn-default btn-file"><span class="fileinput-new">Upload photo</span><span class="fileinput-exists">Change</span><input type="file"  name="cover_image"></span>
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
                               {{Form::label('fullname1','Full Name')}}
                             
                              {{Form::text('fullname1',$startup->founder_1,['class'=>"form-control"])}}
                            </div>

                            <div class="form-group">
                              {{Form::label('facebook1','Facebook')}}
                              
                              {{Form::text('facebook1',$startup->facebook_1,['class'=>"form-control"])}}
                            </div>

                            <div class="form-group">
                              {{Form::label('twitter1','Twitter')}}
                              
                              {{Form::text('twitter1',$startup->twitter_1,['class'=>"form-control"])}}
                            </div>

                            <div class="form-group">
                              {{Form::label('linkedin1','Linkedin')}}
                              
                              {{Form::text('linkedin1',$startup->linkedin_1,['class'=>"form-control"])}}
                            </div>

                            <br>

                            <!-- F2 -->
                            <h5>--- Founder 2 ---</h5>
                            <div class="form-group">
                              {{Form::label('fullname2','Full Name')}}
                            
                             {{Form::text('fullname2',$startup->founder_2,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('facebook2','Facebook')}}
                             
                             {{Form::text('facebook2',$startup->facebook_2,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('twitter2','Twitter')}}
                             
                             {{Form::text('twitter2',$startup->twitter_2,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('linkedin2','Linkedin')}}
                             
                             {{Form::text('linkedin2',$startup->linkedin_2,['class'=>"form-control"])}}
                           </div>

                           <br>

                            <!-- F3 -->
                            <div class="form-group">
                              {{Form::label('fullname3','Full Name')}}
                            
                             {{Form::text('fullname3',$startup->founder_3,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('facebook3','Facebook')}}
                             
                             {{Form::text('facebook3',$startup->facebook_3,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('twitter3','Twitter')}}
                             
                             {{Form::text('twitter3',$startup->twitter_3,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('linkedin3','Linkedin')}}
                             
                             {{Form::text('linkedin3',$startup->linkedin_3,['class'=>"form-control"])}}
                           </div>

                           <br>
                          

                        </div>

                        <div class="col-md-6">

                          

                          <div class="form-group">
                            {{Form::label('fullname4','Full Name')}}
                          
                           {{Form::text('fullname4',$startup->founder_4,['class'=>"form-control"])}}
                         </div>

                         <div class="form-group">
                           {{Form::label('facebook4','Facebook')}}
                           
                           {{Form::text('facebook4',$startup->facebook_4,['class'=>"form-control"])}}
                         </div>

                         <div class="form-group">
                           {{Form::label('twitter4','Twitter')}}
                           
                           {{Form::text('twitter4',$startup->twitter_4,['class'=>"form-control"])}}
                         </div>

                         <div class="form-group">
                           {{Form::label('linkedin4','Linkedin')}}
                           
                           {{Form::text('linkedin4',$startup->linkedin_4,['class'=>"form-control"])}}
                         </div>

                         <br>

                            <!-- F5 -->
                            <div class="form-group">
                              {{Form::label('fullname5','Full Name')}}
                            
                             {{Form::text('fullname5',$startup->founder_5,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('facebook5','Facebook')}}
                             
                             {{Form::text('facebook5',$startup->facebook_5,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('twitter5','Twitter')}}
                             
                             {{Form::text('twitter5',$startup->twitter_5,['class'=>"form-control"])}}
                           </div>

                           <div class="form-group">
                             {{Form::label('linkedin5','Linkedin')}}
                             
                             {{Form::text('linkedin5',$startup->linkedin_5,['class'=>"form-control"])}}
                           </div>

                           <br>

                          

                        </div>

                      </div>
                      <div class="panel-footer">
                      <div>
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Submit',['class'=>'btn btn-success'])}}
                         {!!Form::close()!!}  
                         <button href="/dashboard" class="btn btn-danger">Cancel</button> 
                      </div>
                      
                    </div>

                  
                  
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
    <script src="/assets/js/jquery-3.1.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/fileinput.js"></script>
  </body>
</html>
