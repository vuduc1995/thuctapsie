@if (!isset($users))
  @php
    $users = new StdClass();
    $users->fullname = '';
  @endphp
 @else  
   @php
    $dateDeadline = new DateTime($users->deadline);
    $dateDeadline = date_format($dateDeadline, 'g:ia \o\n l jS F Y');
   @endphp
@endif
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>Student Report</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/stud-report/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-imageupload.css') }}">
     <script type="text/javascript" src="{{ URL::asset('js/bootstrap-imageupload.js') }}"></script>

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
            <div class="user-menu col-sm-3"  >   
            <div class="dropdown wrap-item">
              <ul class="btn dropdown-toggle menubar" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <li class="">  
                  <a class ="action-menu-toggle" href="#">
                  <span class ="userbutton">
                    <span class ="usertext">Student
                    </span>
                    <span class ="avatar">
                      <span class ="ava current">

                          <img src={{ URL::asset('images/logo.png') }} alt="avatar"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                      </span>
                    </span>
                  </span>
                  </a>
                </li>
            </ul>

              <ul class="dropdown-menu hidemenu" aria-labelledby="dropdownMenu1">
               <li>
                  <a class ="menu-action" href="/student">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="action-text">Homepage</span>
                  </a>
                </li>

                <li>
                  <a class ="menu-action" href="/student/edit-profile">
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
        <li class="active"><a href="/student"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown" id="formcv">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Form <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/student/CV">CV</a></li>
            <li><a href="/student/registration">Registration</a></li>
          </ul>
        </li>

        

        <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/student/topic">Topic</a></li>
            <li><a href="/student/report">Report</a></li>
            <li><a href="/student/feedback">Feedback</a></li>
            <li><a href="/student/status">Status</a></li>
            <li><a href="/student/mark">Mark</a></li>
          </ul>
        </li>

        
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
      
        <h2>report</h2>

          <div class="fillin">
            <form class="form-horizontal" method="POST" action="/student/upReport" accept-charset="UTF-8" enctype="multipart/form-data">
              <div class="form-group">

                <label for="tieu-de" class="col-sm-5 control-label">Subject: Report</label>
                 <div class="col-sm-7 control-label" style="text-align: left">
                 <select name="type"> 
                
                  <option value="1"> Mid-term</option> 
                  <option value="2"> Final</option> 
                  </select>
                   </div>  
              </div>  

              <div class="form-group">
                  <label for="skills" class="col-sm-5 control-label">Content</label>
                  <div class="col-sm-3 control-label">
                  <textarea class="form-control" col="3" rows="3" name="content" ></textarea>
                  </div>
                 </div>

                  <div class="form-group">
            <label for="skills" class="col-sm-5 control-label">Attachments:</label>
            <div class="file-tab col-sm-5" style="text-align: left">
                <!-- <a href="{{URL::asset('document\midterm\2\2-Bang-diem-ren-luyen.doc')}}">test</a> -->
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
                  var countDownDate = new Date("<?php echo $users->deadline ?>").getTime();   
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
                          // document.getElementById("demo").innerHTML = "EXPIRED";    
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
