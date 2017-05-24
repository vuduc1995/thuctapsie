<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>College manager matched information</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/col.manager-matched-info/css/styles.css') }}">
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
                    <span class ="usertext">College manager
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
                  <a class ="menu-action" href="/collegeintershipmanager/edit-profile">
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
        <li><a href="/collegeintershipmanager/schedule">Internship Assignment</a></li>
        <li><a href="/collegeintershipmanager/statistic">Statistics</a></li>
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
  <div class="container-fluid comparison">
      
        <h2>matched information</h2>
                  <form  id ="myForm">


                  <table id="t01">
                    <tr>
                      <th>No.</th>
                      <th>Student</th> 
                      <th>Student's number</th>
                      <th>Company</th>
                      <th>Speciality</th>
                      <th>Topic</th>
                    </tr>


                  @foreach($list as $i=>$item)

                    <input class="form-control" type="hidden" value="{{$item['iduser']}}" name="iduser_{{$i}}">
                    <input class="form-control" type="hidden" value="{{$item['idCompany']}}" name="idCompany_{{$i}}">
                    <input class="form-control" type="hidden" value="{{$item['speciality']}}" name="speciality_{{$i}}">

                    <tr>
                      <td>{{$i+1}}</td>
                      <td>{{$item['studentName']}}</td>
                      <td>{{$item['studentNumber']}}</td>
                      <td>{{$item['company']}}</td>
                      <td>{{$item['specialityName']}}</td>
                      <td>
                      <select name="topicList_{{$i}}" >
    
                      @foreach($item['topics'] as $topic)
                      <option value="{{$topic['idTopic']}}">{{$topic['content']}}</option>
                      @endforeach

                      </select></td>
                    </tr>

                  @endforeach


  
                  </table>

                  </form>


                  <form  class ="confirm">
                  <div class="text-center">
        <input id="show" type="button" name="ok" value="OK">
    </form>

    <dialog id="window">  
      <form>
        <button id="exit">x</button>
      </form>
     <p>Are you sure?</p>
      <form action="" method="" accept-charset="utf-8">
        <input type="button" name="confirm" id="confirmDialog" value="Confirm">
        <input type="button" name="cancel" id="closeDialog" value="Cancel">
      </form> 
     
    </dialog>  

<script type="text/javascript">
    (function() {  

            var dialog = document.getElementById('window');  
            document.getElementById('show').onclick = function() {  
                dialog.show();  
            };  
            document.getElementById('exit').onclick = function() {  
                dialog.close();  
            };
            document.getElementById('closeDialog').onclick = function() {  
                dialog.close();  
            };
        })();


var func = function(e){
    e.preventDefault();
    $.ajax({
        url:'/collegeintershipmanager/matched-list',
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
   $(document).on('click', "#confirmDialog", e => func(e));
});
</script>
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
