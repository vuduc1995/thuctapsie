<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>SIE Student's Internship Process Management</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/login/css/styles.css') }}">
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
            
              
            <div class="clearfix"></div>
        </div>
             
      </div>
    </div>
  </div>

</header>

<!--E.O.Header--><!--Custom theme header-->
<div class="container-fluid">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" align="center">
      <img src="{{ URL::asset('images/img_1.png') }}" alt="img_1" >
    </div>

    <div class="item" align="center">
      <img src="{{ URL::asset('images/img_2.png') }}" alt="img_2" >
    </div>

    <div class="item" align="center">
      <img src="{{ URL::asset('images/img_3.jpg') }}" alt="img_3" >
    </div>

    <div class="item" align="center">
      <img src="{{ URL::asset('images/img_4.jpg') }}" alt="img_4" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="padding-right: 0; padding-left: 0">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   
</div>
<!--Custom theme slider-->

<div class="signin-form">
  <div class="container-fluid">
      
        <h2>Sign In {{ config('global.siteTitle') }}</h2>

          <div class="signin-normal">
          <form class="signin" method="POST" action="/user/login">
          <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> -->

          <div class="form-group">
            <label>Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1"  name = "email" placeholder="Email">
          </div>

          <div class="form-group">
            <label>Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1"  name = "password" placeholder="Password">
          </div>
          

          <button type="submit" class="btn signin-btn">Sign In</button>
      </form>

      <div class="register">

          <a href="">Forgot your password</a>
          
        </div>
      </div>

      
    </div>
</div>
<!-- end-of-signin-form -->

<footer id="footer">    
  <div class="footer-main">
    <div class="container-fluid">
      <div class="row-fluid">

          <div class="infoarea">
            <div class="footer-logo">
              <a href="hust">
                <img src="{{ URL::asset('images/logo.png') }}" width="89" height="56" alt="Klass">
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

