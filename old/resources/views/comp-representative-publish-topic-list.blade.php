<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>Company Representative Topic List</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/comp.representative-publish topic list/css/styles.css') }}">
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
            <div id="logo"><img src="{{ URL::asset('images/logo60nambk.png')}}" width="165" height="77" alt="Klass">
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
                    <span class ="usertext">My name
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
<!-- 
          <script >
          $('.dropdown-menu').dropdown()
          </script>
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
        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
        
         <li class="dropdown" id="formcv">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Form <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="/companyrepresentative/Registration">Registration</a></li>
             </ul>
        </li>

       

        <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Topic list</a></li>

        
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
      
      @if (!empty($compId))
        <h2>topic list {{$compId}}</h2>
      @else
        <h2>topic list</h2>
      @endif

          <div class="fillin">
            <form class="form-horizontal" method="POST" action="/companyrepresentative/topic-list">
              
                <div class="form-group">
                <p style="color: red; font-weight: bold; font-style: italic;" class="col-sm-5 col-sm-offset-3">* Each company can publish maximum 05 topics.</p>
                </div>




                <div class="form-group">
                <label for="speciality" class="col-sm-2 control-label">Speciality</label>
                <div class="col-sm-1">
                  <select name="speciality1" >
                        <option value="1">Java</option>
                        <option value="2">C#</option>
                        <option value="3">Android</option>
                        <option value="4">PHP</option>
                        <option value="5">QA</option>
                      </select>
                </div>

                <label for="topic" class="col-sm-1 control-label">Topic 1</label>
                <div class="col-sm-4">
                  <input class="form-control" id="topic" placeholder="Topic" name="topic1">
                </div>

                <label for="quantity" class="col-sm-1 control-label">Quantity</label>
                <div class="col-sm-1">
                  <input class="form-control" id="quantity" placeholder="Quantity" name="quantity1">
                </div>
              </div>
              

                <div class="form-group">
                <label for="speciality" class="col-sm-2 control-label">Speciality</label>
                <div class="col-sm-1">
                  <select name="speciality2" >
                        <option value="1">Java</option>
                        <option value="2">C#</option>
                        <option value="3">Android</option>
                        <option value="4">PHP</option>
                        <option value="5">QA</option>
                      </select>
                </div>

                <label for="topic" class="col-sm-1 control-label">Topic 2</label>
                <div class="col-sm-4">
                  <input class="form-control" id="topic" placeholder="Topic" name="topic2">
                </div>

                <label for="quantity" class="col-sm-1 control-label">Quantity</label>
                <div class="col-sm-1">
                  <input class="form-control" id="quantity" placeholder="Quantity" name="quantity2">
                </div>
              </div>

                <div class="form-group">
                <label for="speciality" class="col-sm-2 control-label">Speciality</label>
                <div class="col-sm-1">
                  <select name="speciality3" >
                        <option value="1">Java</option>
                        <option value="2">C#</option>
                        <option value="3">Android</option>
                        <option value="4">PHP</option>
                        <option value="5">QA</option>
                      </select>
                </div>

                <label for="topic" class="col-sm-1 control-label">Topic 3</label>
                <div class="col-sm-4">
                  <input class="form-control" id="topic" placeholder="Topic" name="topic3">
                </div>

                <label for="quantity" class="col-sm-1 control-label">Quantity</label>
                <div class="col-sm-1">
                  <input class="form-control" id="quantity" placeholder="Quantity" name="quantity3">
                </div>
              </div>

                <div class="form-group">
                <label for="speciality" class="col-sm-2 control-label">Speciality</label>
                <div class="col-sm-1">
                  <select name="speciality4" >
                        <option value="1">Java</option>
                        <option value="2">C#</option>
                        <option value="3">Android</option>
                        <option value="4">PHP</option>
                        <option value="5">QA</option>
                      </select>
                </div>

                <label for="topic" class="col-sm-1 control-label">Topic 4</label>
                <div class="col-sm-4">
                  <input class="form-control" id="topic" placeholder="Topic" name="topic4">
                </div>

                <label for="quantity" class="col-sm-1 control-label">Quantity</label>
                <div class="col-sm-1">
                  <input class="form-control" id="quantity" placeholder="Quantity" name="quantity4">
                </div>
              </div>

                <div class="form-group">
                <label for="speciality" class="col-sm-2 control-label">Speciality</label>
                <div class="col-sm-1">
                  <select name="speciality5" >
                        <option value="1">Java</option>
                        <option value="2">C#</option>
                        <option value="3">Android</option>
                        <option value="4">PHP</option>
                        <option value="5">QA</option>
                      </select>
                </div>

                <label for="topic" class="col-sm-1 control-label">Topic 5</label>
                <div class="col-sm-4">
                  <input class="form-control" id="topic" placeholder="Topic" name="topic5">
                </div>

                <label for="quantity" class="col-sm-1 control-label">Quantity</label>
                <div class="col-sm-1">
                  <input class="form-control" id="quantity" placeholder="Quantity" name="quantity5">
                </div>
              </div>

                    <div class="form-group">
                  <label for="skills" class="col-sm-3 control-label">Deadline:</label>
                  <div class="col-sm-7 control-label">
                  <p id="deadline" style="font-weight:bold; text-align: left"> Thursday, 23 March 2017, 11:55 PM</p>
                  </div>
                 </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-3 control-label">Time remaining:</label>
                  <div class="col-sm-7 control-label" id="countdown" style="font-weight: bold; color: red; text-align: left">
                  <script>
                  // Set the date we're counting down to
                  var countDownDate = new Date("April 20, 2017 23:55:00").getTime();

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
