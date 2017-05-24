<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>College Manager Home</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/col.manager-duyet-topic-2/css/styles.css') }}">
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
                    <span class ="usertext">College Manager
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
                  <a class ="menu-action" href="/collegeintershipmanager">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="action-text">Homepage</span>
                  </a>
                </li>

                <li>
                  <a class ="menu-action" href="/collegeintershipmanager/profile">
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
        <li class="active"><a href="/collegeintershipmanager"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
        
         <li><a href="/collegeintershipmanager/duyet-topic-1">Censorship</a></li>
        <li><a href="/collegeintershipmanager/matched-list">Matched list</a></li>
        <li><a href="/collegeintershipmanager/internship-assignment">Internship Assignment</a></li>
        <li><a href="/collegeintershipmanager/statistic">Statistics</a></li>
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

        <h2>censorship</h2>

          <div class="fillin">
            <form class="form-horizontal" id="myForm">
                    <input class="form-control" type="hidden" id="order" placeholder="Order" name="order">
              
                <div class="form-group">
                <label class="col-sm-2 control-label">Company: {{$company->Name}}</label>
                <label class="col-sm-3 control-label">Representative: {{$represent->name}}</label>
                <label class="col-sm-3 control-label">Email: {{$represent->email}}</label>
                </div>

                @foreach($topics as $i => $topic)
                  <div class="form-group">
                  <label for="speciality" class="col-sm-2 control-label">Speciality: {{$topic->name}}</label>
                  <div class="col-sm-2">
                
                  </div>

                  <label for="topic" class="col-sm-1 control-label">Topic {{$i+1}}</label>
                  <div class="col-sm-4">
                    <input class="form-control" id="topic" placeholder="Topic" value="{{$topic->content}}">
                  </div>

                    <input class="form-control" type="hidden" id="topicId{{$i}}" name="topicId{{$i}}" placeholder="Topic" value="{{$topic->idTopic}}">

                  <div class="col-sm-2 ">
                      <button type="Accept" class="btn btn-default btn-topic" id="accept-{{$i}}">Accept</button>
                      <button type="Decline" class="btn btn-default btn-topic" id="decline-{{$i}}">Decline</button>
                    </div>
                  </div>
                @endforeach


              


                </div>
              </form>

     
      </div> 

      
    </div>
</div>
<!-- end-of-form-register -->

<script type="text/javascript">
var func = function(e,action,order){
    $('#order').val(order);
    e.preventDefault();
    $.ajax({
        url:'/collegeintershipmanager/duyet-topic-2/' + action,
        type:'post',
        data:$('#myForm').serialize(),
        success:function(){
            //whatever you wanna do after the form is successfully submitted
        }
    }).done(function( msg ) {
      alert( msg );
      location.reload();
    });
  };
$(document).ready ( function () {
   $(document).on('click', "#accept-0", e => func(e,'accept',0));
   $(document).on('click', "#accept-1", e => func(e,'accept',1));
   $(document).on('click', "#accept-2", e => func(e,'accept',2));
   $(document).on('click', "#accept-3", e => func(e,'accept',3));
   $(document).on('click', "#accept-4", e => func(e,'accept',4));

   $(document).on('click', "#decline-0", e => func(e,'decline',0));
   $(document).on('click', "#decline-1", e => func(e,'decline',1));
   $(document).on('click', "#decline-2", e => func(e,'decline',2));
   $(document).on('click', "#decline-3", e => func(e,'decline',3));
   $(document).on('click', "#decline-4", e => func(e,'decline',4));
});
</script>

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
