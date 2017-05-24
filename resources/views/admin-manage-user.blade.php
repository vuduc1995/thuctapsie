<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>Admin manage user</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/admin-manage-user/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <style type="text/css">
    input {

        border: none;
        display: inline;
        font-family: inherit;
        font-size: inherit;
        padding: none;
        width: inherit;
        background-color: transparent;
      }
    </style>
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
                    <span class ="usertext">Admin
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
                  <a class ="menu-action" href="/admin">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="action-text">Homepage</span>
                  </a>
                </li>

                <li>
                  <a class ="menu-action" href="#">
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
        <li class="active"><a href="/admin"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>

        <li><a href="/admin/manager-user">Manage User</a></li>
        <li><a href="/admin/manager-mark">Manage Mark</a></li>
        <li><a href="/admin/auto-match">Auto Match Info</a></li>
          </ul>
        </li>
      
      
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
      
        <h2>Manage user</h2>

        <form id='myForm'>
                <div class="form-group">
                  <div class="text-right">
                   
                  </div>

                  <table id="table"  >
                    <tr>
                      <th>Email</th> 
                      <th>Password</th>
                      <th>Role</th>
                      <th> <span class="table-add glyphicon glyphicon-plus" style="color:white"></span></th>
                    </tr>

                    @foreach($users as $i=>$item)


                    <tr>
                      <input class="form-control" type="hidden" value="{{$item['iduser']}}" name="iduser_{{$i}}">
                      <td>
                      <input type="email" name="email_{{$i}}" size="35" value="{{$item['email']}}">
                      </td>
                      <td>
                      <input type="text" name="password_{{$i}}"  value="{{$item['password']}}">
                      </td>
                      <td>
                      <input type="number" name="role_{{$i}}"  value="{{$item['role']}}">
                      </td>
                      <td>
                      <span class="table-remove glyphicon glyphicon-remove"></span>
                    </td>

                    </tr>

                  @endforeach

                    
                      <tr class="hide">
                      <input class="form-control" type="hidden" value="-1" name="iduser">
                       <td> Email</td>
                      <td> Password</td>
                      <td>1</td>
                      <td>
                      <span class="table-remove glyphicon glyphicon-remove"></span>
                    </td>
                    </tr>
                  </table>
             <div class="text-center"> 
                   <button id="export-btn" class="btn btn-primary" style="text-align:center">Save Data</button>
                     <p id="export"></p>
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
  var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.table-add').click(function () {
  window.location="/admin/add-user";
  
});

$('.table-remove').click(function () {

  $(this).parents('tr').detach();
});


// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;


</script>
<script type="text/javascript">
      $('#myForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/admin/upUser',
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
