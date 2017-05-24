<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Instructor Mark</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/col.instructor-mark-stud-2/css/styles.css') }}">
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
                  <a class ="menu-action" href="/collegeinstructor">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="action-text">Homepage</span>
                  </a>
                </li>

                <li>
                  <a class ="menu-action" href="/collegeinstructor/edit-profile">
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
        <li class="active"><a href="/collegeinstructor"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
        
         <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/collegeinstructor/mark-1">Mark</a></li>
          </ul>
        </li>

        
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
      
        <h2>mark</h2>

          <div class="fillin">
            <form class="form-horizontal" method="POST" action="/collegeinstructor/upMark" accept-charset="UTF-8" enctype="multipart/form-data">
              
                <div class="form-group">
                <p style="color: black; font-weight: bold; font-style: italic;" class="col-sm-5 col-sm-offset-3">1. Mid-term</p>
                </div>


                <div class="form-group">
                <label class="col-sm-5 control-label">Report from Student:</label>
                
                <div class="col-sm-5 col-sm-offset-1 ">
                    <a href="{{ URL::asset($midReport) }}">Download
                     </a>
                  </div>
              </div>

                <div class="form-group">
                <label class="col-sm-5 control-label">Rate from Company Instructor:</label>
                
                <div class="col-sm-5 col-sm-offset-1 ">
                  
                    <button type="preview" class="btn btn-default btn-topic">Preview</button>
                   
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label">Mid-term point:</label>
                
                <div class="col-sm-5 col-sm-offset-6 ">
                <select name="Topic1" >
                        <option value="1">A</option>
                        <option value="2">B+</option>
                        <option value="3">B</option>
                        <option value="4">C+</option>
                        <option value="5">C</option>
                        <option value="6">D+</option>
                        <option value="7">D</option>
                        <option value="8">F</option>
                      </select>
                      </div>
              </div>

              <div class="form-group">
                <p style="color: black; font-weight: bold; font-style: italic;" class="col-sm-5 col-sm-offset-3">2. Final</p>
                </div>

                <div class="form-group">
                <label class="col-sm-5 control-label">Report from Student:</label>
                
                <div class="col-sm-5 col-sm-offset-1 ">
                    <a href="{{ URL::asset($finalReport ) }}">Download
                    </a>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label">Mark's form from Company Instructor:</label>
                
                <div class="col-sm-5 col-sm-offset-1 ">
                    <button type="preview" class="btn btn-default btn-topic">Preview</button>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label">Final point:</label>
                <input class="form-control hidden"  name ="id" value="{{$id}}">
                <div class="col-sm-5 col-sm-offset-6 ">
                <select name="Topic2" >
                        <option value="1">A</option>
                        <option value="2">B+</option>
                        <option value="3">B</option>
                        <option value="4">C+</option>
                        <option value="5">C</option>
                        <option value="6">D+</option>
                        <option value="7">D</option>
                        <option value="8">F</option>
                      </select>
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
                <img src="{{ URL::asset('images/logo.png')}}" width="89" height="56" alt="footer-logo">
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

