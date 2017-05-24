<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Instructor Mark</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/comp.instructor-mark 2/css/styles.css') }}">
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
            <div id="logo"><img src="../comp.instructor-mark/images/logo60nambk.png" width="165" height="77" alt="Klass">
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

                          <img src="" alt="avatar"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
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

        <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Submit outline</a></li>
            <li><a href="/companyinstructor/mark-1">Mark's form</a></li>
            <li><a href="/companyinstructor/rate">Rate</a></li>
            <li><a href="/companyinstructor/timesheet">Timesheet</a></li>
          </ul>
        </li>
        
        <li><a href="#">Chat</a></li>
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
            <form class="form-horizontal" method="POST" action="/companyinstructor/mark-2">
                    <input class="form-control" type="hidden" id="studentId" name="studentId" value="{{$studentId}}">

                <div class="form-group">
              <p style="color: red; font-weight: bold; font-style: italic;" class="col-sm-7 col-sm-offset-1" > Rating on the following scale:
                 A: Excellent, B: Very Good, C: Good, D: Pass, F: Fail, X: No comments
              </p>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;">A. Criteria</label>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">The Technical Level</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level related to internship</label>
                <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_TTL_1 }}-->
                  <select class="form-control" name="point_TTL_1"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                </div>
              
                 
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="cmt_TTL_1" name="cmt_TTL_1" value="{{$report->cmt_TTL_1}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to catch new techniques</label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_TTL_2 }}-->
                  <select class="form-control" name="point_TTL_2"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_TTL_2" value="{{$report->cmt_TTL_2}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level after being instructed</label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_TTL_3 }}-->
                  <select class="form-control" name="point_TTL_3"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_TTL_3" value="{{$report->cmt_TTL_3}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Analysis capabilities</label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_TTL_4 }}-->
                  <select class="form-control" name="point_TTL_4"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_TTL_4" value="{{$report->cmt_TTL_4}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Methodology </label>
                <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_TTL_5 }}-->
                  <select class="form-control" name="point_TTL_5"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_TTL_5" value="{{$report->cmt_TTL_5}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Creativity </label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_TTL_6 }}-->
                  <select class="form-control" name="point_TTL_6"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_TTL_6" value="{{$report->cmt_TTL_6}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">English Level </label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_TTL_7 }}-->
                  <select class="form-control" name="point_TTL_7"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_TTL_7" value="{{$report->cmt_TTL_7}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Work Has Been Finished</label>
              </div>
              
              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quantity of work done during the internship </label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_WHBF_1 }}-->
                  <select class="form-control" name="point_WHBF_1"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_WHBF_1" value="{{$report->cmt_WHBF_1}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quality of work done during the internship </label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_WHBF_2 }}-->
                  <select class="form-control" name="point_WHBF_2"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_WHBF_2" value="{{$report->cmt_WHBF_2}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to self-complete work and solve problems incurred</label>
                <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_WHBF_3 }}-->
                  <select class="form-control" name="point_WHBF_3"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_WHBF_3" value="{{$report->cmt_WHBF_3}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Write a document about the work done </label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_WHBF_4 }}-->
                  <select class="form-control" name="point_WHBF_4"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_WHBF_4" value="{{$report->cmt_WHBF_4}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Presentation </label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_WHBF_5 }}-->
                  <select class="form-control" name="point_WHBF_5"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_WHBF_5" value="{{$report->cmt_WHBF_5}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Abide by the rules of company</label>
                 <div class="col-sm-2 selectContainer">
                  <!--{{ $temp = $report->point_WHBF_6 }}-->
                  <select class="form-control" name="point_WHBF_6"> 
                    <option value=""> Point</option>
                    <option value="1" {{ $temp == 1 ? 'selected="selected"' : '' }}> A</option> 
                    <option value="2" {{ $temp == 2 ? 'selected="selected"' : '' }}> B</option> 
                    <option value="3" {{ $temp == 3 ? 'selected="selected"' : '' }}> C</option>
                    <option value="4" {{ $temp == 4 ? 'selected="selected"' : '' }}> D</option>
                    <option value="5" {{ $temp == 5 ? 'selected="selected"' : '' }}> E</option>
                    <option value="6" {{ $temp == 6 ? 'selected="selected"' : '' }}> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="cmt_WHBF_6" value="{{$report->cmt_WHBF_6}}" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Attitude</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">On time</label>
                 <div class="col-sm-2 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=""> Point</option>
                  <option value="q"> A</option> 
                  <option value="b"> B</option> 
                  <option value="c"> C</option>
                  <option value="d"> D</option>
                  <option value="f"> E</option>
                  <option value="x"> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Appearance </label>
                 <div class="col-sm-2 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=""> Point</option>
                  <option value="q"> A</option> 
                  <option value="b"> B</option> 
                  <option value="c"> C</option>
                  <option value="d"> D</option>
                  <option value="f"> E</option>
                  <option value="x"> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Attitude at companny </label>
                 <div class="col-sm-2 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=""> Point</option>
                  <option value="q"> A</option> 
                  <option value="b"> B</option> 
                  <option value="c"> C</option>
                  <option value="d"> D</option>
                  <option value="f"> E</option>
                  <option value="x"> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Teamwork </label>
                 <div class="col-sm-2 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=""> Point</option>
                  <option value="q"> A</option> 
                  <option value="b"> B</option> 
                  <option value="c"> C</option>
                  <option value="d"> D</option>
                  <option value="f"> E</option>
                  <option value="x"> F</option>
                  </select>
                  </div>
                <div class="col-sm-4>
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Communication with employees, clients at company  </label>
                 <div class="col-sm-2 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=""> Point</option>
                  <option value="q"> A</option> 
                  <option value="b"> B</option> 
                  <option value="c"> C</option>
                  <option value="d"> D</option>
                  <option value="f"> E</option>
                  <option value="x"> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Improvement</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved capacity, technical level </label>
                 <div class="col-sm-2 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=""> Point</option>
                  <option value="q"> A</option> 
                  <option value="b"> B</option> 
                  <option value="c"> C</option>
                  <option value="d"> D</option>
                  <option value="f"> E</option>
                  <option value="x"> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved the attitude </label>
                 <div class="col-sm-2 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=""> Point</option>
                  <option value="q"> A</option> 
                  <option value="b"> B</option> 
                  <option value="c"> C</option>
                  <option value="d"> D</option>
                  <option value="f"> E</option>
                  <option value="x"> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved work methods </label>
                 <div class="col-sm-2 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=""> Point</option>
                  <option value="q"> A</option> 
                  <option value="b"> B</option> 
                  <option value="c"> C</option>
                  <option value="d"> D</option>
                  <option value="f"> E</option>
                  <option value="x"> F</option>
                  </select>
                  </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              
              <div class="form-group">
                  <label for="danh-gia" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;"">B. General assessment</label>
                  <div class="col-sm-6">
                  <textarea class="form-control" col="9" rows="10" ></textarea>
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
                <img src="../comp.instructor-mark/images/logo.png" width="89" height="56" alt="footer-logo">
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
