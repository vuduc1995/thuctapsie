@if (!isset($users))
  @php
    $users = new StdClass();
    $users->fullname = '';
    $users->class = '';
    $users->gender = '';
    $users->laptop = '';
    $users->studnumber = '';
    $users->email = '';
    $users->language_certification = '';
    $users->language_point = '';
    $users->stud_own_skill = '';
    $users->address = '';
    $users->phone= '';
    $users->stud_learn_skill = '';
    $users->speciality1 = '';
    $users->speciality2 = '' ;
    $users->speciality3 = '';
    $users->compHave = 0;
    $users->compName= '';
    $users->compAdderss= '';
    $users->compInstructor= '';
    $users->compPhone= '';
    $users->compEmail= '';

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Student Registration</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/stud-regis/css/styles.css') }}">
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
          <div class="col-sm-4 col-lg-2">
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
                    <span class ="usertext">Student
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
      
        <h2>internship registration for student </h2>

          <div class="fillin">
          <!-- method="POST" action="/student/registration/up" -->
            <form class="form-horizontal" id="myForm">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Fullname</label>
                <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Fullname" name ="fullname" value="{{$users->fullname}}">
                </div>

                <label for="class" class="col-sm-2 control-label">Class</label>
                <div class="col-sm-2">
                  <input class="form-control" id="class" placeholder="Class" name ="class" value="{{$users->class}}">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-6 col-lg-5">
                  <div class="radio radio-danger">
                    <label style="font-weight: bold"> Gender  </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey" value="male" {{$users->gender == 'male' ? "checked=checked" : ''}} > Male
                    </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey" value="female" {{$users->gender == 'female' ? "checked=checked" : ''}} > Female
                    </label>
                  </div>
                </div>
                
                <div class="col-sm-5 col-lg-6">
                  <div class="radio radio-danger">
                    <label style="font-weight: bold"> Laptop   </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="check" value="1" {{$users->laptop == 1 ? "checked=checked" : ''}} > Yes
                    </label>
                     <label style="margin-left: 40px">
                      <input type="radio" name="check" value="0" {{$users->laptop == 0 ? "checked=checked" : ''}} > No
                    </label>

                  </div>
                </div>
              </div>

  
              <div class="form-group">
                <label for="idnumber" class="col-sm-2 control-label">Student's number</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="idnumber" placeholder="Student's number" name="StudentNumber" value="{{$users->studnumber}}">
                </div>
              </div>

              
              <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" placeholder="Address" name="Address" value="{{$users->address}}">
                </div>
              </div>

              <div class="form-group">
                <label for="phonenumber" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="phonenumber" placeholder="phonenumber" name="phonenumber" value="{{$users->phone}}">
                </div>

                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-3">
                  <input type="email" class="form-control" id="email" placeholder="Email" name = "email" value="{{$users->email}}">
                </div>
              </div>

              <div class="form-group">
                <label for="language" class="col-sm-2 control-label">Foreign Language</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="type" placeholder="Certification" name="Certification" value="{{$users->language_certification}}">
                </div>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="mark" placeholder="Point" name ="Point" value="{{$users->language_point}}">
                </div>
                 </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">What skills do I have?</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="7" rows="7" name="skillsHave" >{{$users->stud_own_skill}}</textarea>
                  </div>
                 </div>

                 <div class="form-group">
                  <label for="learning" class="col-sm-2 control-label">What skills do I want to learn?</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="7" rows="7" name="skillsRequire" >{{$users->stud_learn_skill}}</textarea>
                  </div>
                 </div>

                 <div class="form-group">
                <label for="topic" class="col-sm-2 control-label">Speciality</label>
                <div class="col-sm-3">
              
                  <select name="speciality1" >
                        <option value="1" {{$users->speciality1 == 1 ? "selected" : ''}}>Java</option>
                        <option value="2" {{$users->speciality1 == 2 ? "selected" : ''}}>C#</option>
                        <option value="3" {{$users->speciality1 == 3 ? "selected" : ''}}>Android</option>
                        <option value="4" {{$users->speciality1 == 4 ? "selected" : ''}}>PHP</option>
                        <option value="5" {{$users->speciality1 == 5 ? "selected" : ''}}>QA</option>
                      </select>
                </div>
                  
                
                <div class="col-sm-3">
              
                  <select name="speciality2" >
                        <option value="1" {{$users->speciality2 == 1 ? "selected" : ''}}>Java</option>
                        <option value="2" {{$users->speciality2 == 2 ? "selected" : ''}}>C#</option>
                        <option value="3" {{$users->speciality2 == 3 ? "selected" : ''}}>Android</option>
                        <option value="4" {{$users->speciality2 == 4 ? "selected" : ''}}>PHP</option>
                        <option value="5" {{$users->speciality2 == 5 ? "selected" : ''}}>QA</option>
                      </select>
                </div>

                
                <div class="col-sm-3">
              
                  <select name="speciality3" >
                        <option value="1" {{$users->speciality3 == 1 ? "selected" : ''}}>Java</option>
                        <option value="2" {{$users->speciality3 == 2 ? "selected" : ''}}>C#</option>
                        <option value="3" {{$users->speciality3 == 3 ? "selected" : ''}}>Android</option>
                        <option value="4" {{$users->speciality3 == 4 ? "selected" : ''}}>PHP</option>
                        <option value="5" {{$users->speciality3 == 5 ? "selected" : ''}}>QA</option>
                      </select>
                </div>
              </div>

                 <p class="note">* Complete the following information if the student has an intern's company:</p>
                  
                <div class="form-group">
                <label for="companyname" class="col-sm-2 control-label">Company's name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="companyname" placeholder="Company name" name="companyname" @if ($users->compHave == 1) value="{{$users->compName}}" @endif> 
                </div>
              </div>

              <div class="form-group">
                <label for="company-address" class="col-sm-2 control-label">Company's address</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="companyaddress" placeholder="Company address" name="companyaddress" @if ($users->compHave == 1) value="{{$users->compAdderss}}" @endif>
                </div>
              </div>

              <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Company's Instructor</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name " name="instructor" @if ($users->compHave == 1) value="{{$users->compInstructor}}" @endif>
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">Phone</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="insphonenumber" placeholder="Phone" name="insphonenumber" @if ($users->compHave == 1) value="{{$users->compPhone}}" @endif>
                </div>

                <label for="ins-email" class="col-sm-1 control-label">Email</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="insemail" placeholder="Email " name="insemail" @if ($users->compHave == 1) value="{{$users->compEmail}}" @endif>
                </div>
              </div>
<div class="form-group">    
                  <label for="skills" class="col-sm-2 control-label">Deadline</label>   
                  <div class="col-sm-9 control-label">    
                  <p id="deadline" style="font-weight:bold; text-align: left"> {{$dateDeadline}}</p>    
                  </div>    
                 </div>   
                 <div class="form-group">   
                  <label for="skills" class="col-sm-2 control-label">Time remaining</label>   
                  <div class="col-sm-3 control-label" id="countdown" style="font-weight: bold; color: red; text-align: left">   
                  <script>    
                  // Set the date we're counting down to    
                  // var countDownDate = new Date("April 20, 2017 23:55:00").getTime(); 
                  var countDownDate = new Date("<?php echo $users->deadline ?>").getTime();  
                  // var countDownDate = <?php echo $users->deadline ?>;
                  // console.log(<?php echo $users->deadline ?>);
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
                    <button type="submit" class="btn btn-default">Submit</button>
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
 <script type="text/javascript">
      $('#myForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/student/registration/up',
        type:'post',
        data:$('#myForm').serialize(),
        success:function(){
            //whatever you wanna do after the form is successfully submitted
        }
    }).done(function( msg ) {
    // alert( "Data Saved: " + msg );
    if(msg==1){
      alert( "Successfully" );
    }else{
      alert( "Error!" );
    }
  });
});
    </script>
</body>
