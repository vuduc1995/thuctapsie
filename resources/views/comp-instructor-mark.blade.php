<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>Company Instructor Mark</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/comp.instructor-mark/css/styles.css') }}">
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

          <div class="breadcrum col-sm-8">
              <p>hanoi university of science and technology</p>
              <h1>school of international education</h1>  
          </div>
            
            <div class="user-menu col-sm-2" style="margin-left:0px" >   
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
            <li><a href="/companyinstructor/mark">Mark's form</a></li>
            <li><a href="/companyinstructor/timesheet">Timesheet</a></li>
            <li><a href="/companyinstructor/rate">Rate</a></li>
            
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
      
        <h2>final assessment</h2>
<div class="fillin">
            <form class="form-horizontal" id="myForm">
               <div class="form-group">
               <label for="companyname" class="col-sm-2 control-label" >Company Name</label>
              <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Company Name" name="companyname">
                </div>
                </div>

                <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Company instructor</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name " name="companyinstructorname">
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">Phone</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="ins-phonenumber" placeholder="Phone number" name="phonenumber">
                </div>
                <label for="ins-email" class="col-sm-1 control-label">Email</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="ins-email" placeholder="Email " name="email">
                </div>
              </div>

              <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Student</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name " name="studentname">
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">ID</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="student-id" placeholder="Student's ID" name="studentid">
                </div>
                <label for="ins-email" class="col-sm-1 control-label">Class</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="class" placeholder="Class" name="class">
                </div>
              </div>

              <p class="note"> Rating on the following scale:
                 A: Excellent, B: Very Good, C: Good, D: Pass, F: Fail, X: No comments
              </p>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;">A. Criteria</label>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">The Technical Level</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level related to internship</label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point1"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
              
                 
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment1">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to catch new techniques</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point2"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment2">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level after being instructed</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point3"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment3">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Analysis capabilities</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point4"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment4">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Methodology </label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point5" > 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment5">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Creativity </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point6"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment6">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">English Level </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point7"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment7">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Work Has Been Finished</label>
              </div>
              
              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quantity of work done during the internship </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point8"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment8">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quality of work done during the internship </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point9"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment9">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to self-complete work and solve problems incurred</label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point10"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment10">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Write a document about the work done </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point11"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment11">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Presentation </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point12" > 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment12">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Abide by the rules of company</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point13" > 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment13">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Attitude</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">On time</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point14"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment14">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Appearance </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point15"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment15">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Attitude at companny </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point16"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment16">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Teamwork </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point17" > 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment17">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Communication with employees, clients at company  </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point18"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment18">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Improvement</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved capacity, technical level </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point19"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment19">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved the attitude </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point20"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment20">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved work methods </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point21"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment21">
                </div>
              </div>

              
              <div class="form-group">
                  <label for="danh-gia" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;">B. General assessment</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="9" rows="10" name="generalassessment"></textarea>
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
        url:'/companyinstructor/mark',
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
