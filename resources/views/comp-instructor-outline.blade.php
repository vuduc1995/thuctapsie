@if (!isset($users))
  @php
  @endphp
 @else  
   @php
    $dateDeadline = new DateTime($users->time);
    $dateDeadline = date_format($dateDeadline, 'g:ia \o\n l jS F Y');
   @endphp
@endif

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Instructor Outline</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/comp.instructor-outline/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</head>

<body>

<header id="header">

  <div class="header-main">
    <div class="header-main-content">
      <div class="container-fluid">
        <div class="container row">
          <div class="col-sm-2">
            <div id="logo"><img src="{{ URL::asset('images/logo60nambk.png') }}" width="165" height="77" alt="Klass">
            </div>
            
            
          </div>

          <div class="breadcrum col-sm-7">
              <p>hanoi university of science and technology</p>
              <h1>school of international education</h1>  
          </div>

          <div class="user-menu col-sm-3">   
            <div class="dropdown wrap-item">
              <ul class="btn dropdown-toggle menubar" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <li class="">  
                  <a class ="action-menu-toggle" href="#">
                  <span class ="userbutton">
                    <span class ="usertext">Company Instructor
                    </span>
                    <span class ="avatar">
                      <span class ="ava current">

                          <img src="{{ URL::asset('images/logo.png') }}" alt="avatar"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                      </span>
                    </span>
                  </span>
                  </a>
                </li>
            </ul>

              <ul class="dropdown-menu hidemenu" aria-labelledby="dropdownMenu1">
               <li>
                  <a class ="menu-action" href="/companyinstructor">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="action-text">Homepage</span>
                  </a>
                </li>

                <li>
                   <a class ="menu-action" href="/companyinstructor/edit-profile">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                    <span class="action-text">Profile</span>
                  </a>
                </li>

                <li role="separator" class="divider"></li>

                <li class=" sign-out">
                  <a class ="menu-action" href="/logout">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    <span class="action-text">Sign Out</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
<!-- 
          
 -->          
             <!-- end-of-user -->
            
              
            <div class="clearfix"></div>
        </div>
             
      </div>
    </div>
  </div>

    <div class="header-main-menubar">
  

      <nav class="navbar navbar-default">
        <div class="container-fluid">
  
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/companyinstructor"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
        
        <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/companyinstructor/outline">Outline</a></li>
            <li><a href="/companyinstructor/mark-1">Mark's form</a></li>
            <li><a href="/companyinstructor/timesheet-1">Timesheet</a></li>
            <li><a href="/companyinstructor/rate-1">Rate</a></li>
          </ul>
        </li>
            </ul>

        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
    </div>

  </div>
  
</header>
<!--E.O.Header--><!--Custom theme header-->

<!--E.O.Slider-->    
    
    
    
</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>outline</h2>

          <div class="fillin">
            <form class="form-horizontal" method="POST" action="/companyinstructor/upOutline" accept-charset="UTF-8" enctype="multipart/form-data">
              <div class="form-group">
               

                
             <div class="form-group">
                    <label for="skills" class="col-sm-5 control-label">Attachments:</label>
                    <div class="file-tab col-sm-5" style="text-align: left">
                        <label class="btn btn-default btn-file"> 
                          <input type="file" name="file" required />
                        </label>
                      <div id="output"></div>   
                        
                    </div>
                  </div>

                   <div class="form-group">
                  <label for="skills" class="col-sm-5 control-label">Deadline:</label>
                  <div class="col-sm-7 control-label">
                  <p id="deadline" style="font-weight:bold; text-align: left"> {{$dateDeadline}}</p>
                  </div>
                 </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-5 control-label">Time remaining:</label>
                  <div class="col-sm-7 control-label" id="countdown" style="font-weight: bold; color: red; text-align: left">
                  <script>
                  // Set the date we're counting down to
                  var countDownDate = new Date("<?php echo $users->time ?>").getTime();   

                  // Update the count down every 1 second
                  var x = setInterval(function() {

                      // Get todays date and time
                      var now = new Date().getTime();
                      
                      // Find the distance between now an the count down date
                      var distance = countDownDate - now;
                      
                      // Time calculations for days, hours, minutes and seconds
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                      
                      // Output the result in an element with id="countdown"
                      document.getElementById("countdown").innerHTML = days + " days " + hours + " hours "
                      + minutes + " minutes " + seconds + " seconds" ;
                      
                      // If the count down is over, write some text 
                      if (distance < 0) {
                          clearInterval(x);
                          document.getElementById("demo").innerHTML = "EXPIRED";
                      }
                  }, 1000);
                  </script>
                  </div>
                  </div>


                <div class="form-group">
                  <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button><button type="cancel" class="btn btn-default">Cancel</button>
                  </div>

                 


                </div>
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>
<!-- end-of-form-register -->

<footer id="footer">    
  <div class="footer-main">
    <div class="container-fluid">
      <div class="row-fluid">

          <div class="infoarea">
            <div class="footer-logo">
              <a href="hust">
                <img src="{{ URL::asset('images/logo.png') }}" width="89" height="56" alt="footer-logo">
              </a>
            </div>
        
            <div class="info">
              <p> Add: Room 201, D7 Building, HUST | No.1, Dai Co Viet Street, Hanoi, Vietnam.</p>
              <p> Email: sievn@hust.edu.vn</p>
              <p> Copyright© <b>School of International Education | HUST</b></p>
            </div>


        
      </div>
    </div>
  </div>
</footer>
<!--E.O.Footer-->

</body>