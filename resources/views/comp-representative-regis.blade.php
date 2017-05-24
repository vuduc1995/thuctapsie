@if (!isset($users))
  @php
    $users = new StdClass();
    $users->companyname = '';
    $users->address = '';
    $users->comp_instructor_name = '';
    $users->email = '';
    $users->phone = '';
    $users->quantitysutd = '';
    $users->speciality = '';
    $users->requirement = '';


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
    <title>Company Representative Registration</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/comp.representative-regis/css/styles.css') }}">
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
            <div class="user-menu col-sm-3"  >   
            <div class="dropdown wrap-item">
              <ul class="btn dropdown-toggle menubar" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <li class="">  
                  <a class ="action-menu-toggle" href="#">
                  <span class ="userbutton">
                    <span class ="usertext">Company Representative
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
                  <a class ="menu-action" href="/companyrepresentative">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="action-text">Homepage</span>
                  </a>
                </li>

                <li>
                  <a class ="menu-action" href="/companyrepresentative/edit-profile">
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
        <li class="active"><a href="/companyrepresentative"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown" id="formcv">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Form <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="/companyrepresentative/Registration">Registration</a></li>
             </ul>
        </li>

       

        <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/companyrepresentative/topic-list">Topic list</a></li>
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
      
        <h2>Application for internship </h2>
<div class="fillin">
            <form class="form-horizontal"  id="myForm">
               <div class="form-group">
               <label for="noi-dung" class="col-sm-3 control-label">1. General Information</label>
              </div>


          
              <div class="form-group">
                <label for="company-name" class="col-sm-3 control-label"  style="font-style: italic" >Company name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="company-name" placeholder="Company name" name="compName" value="{{$users->companyname}}">
                </div>
          </div>

              

              <div class="form-group">
                <label for="address" class="col-sm-3 control-label" style="font-style: italic">Address</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" placeholder="Address" name="compAddress" value="{{$users->address}}">
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-3 control-label" style="font-style: italic">Company instructor's name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" placeholder="Name" name="compInsName" value="{{$users->comp_instructor_name}}">
                </div>

             <div class="form-group">
             </div>
                <div class="form-group">
                <label for="email" class="col-sm-3 control-label" style="font-style: italic">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{$users->email}}">
                </div>
                </div>
                  <div class="form-group">
                 <label for="phone"  class="col-sm-3 control-label" style="font-style: italic">Phone</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phoneNumber" value="{{$users->phone}}">
                </div>
              </div>

              
              <div class="form-group">
               <label for="so-luong" class="col-sm-3 control-label">2. Number of students can receive:</label>
               <div class="col-sm-1">
                  <input type="text" class="form-control" id="so-luong" placeholder="Number of students" name="numberStudent" value="{{$users->quantitysutd}}">
                </div>
             </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-3 control-label">3. Content and requirements</label>
                

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="topic1" placeholder="Speciality " name="speciality" value="{{$users->speciality}}">
                </div>
                
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="topic2" placeholder="Requirement" name="requirement" value="{{$users->requirement}}">
                </div>
              </div>

             <div class="form-group">
                                  <label for="skills" class="col-sm-3 control-label">4. Deadline</label>
                                    <div class="col-sm-3 control-label">
                  <p id="deadline" style="font-weight:bold; text-align: left"> {{$dateDeadline}}</p>
                  </div>
                 </div>
                 <div class="form-group">
                  <label for="skills" class="col-sm-3 control-label">5. Time remaining</label>
                  <div class="col-sm-3 control-label" id="countdown" style="font-weight: bold; color: red; text-align: left">
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
                          document.getElementById("demo").innerHTML = "EXPIRED";
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
        url:'/companyrepresentative/Registration/up',
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
  });;
});
    </script>
</body>
