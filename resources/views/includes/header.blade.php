@if (!isset($users))
  @php
    $users = new StdClass();
    $users->name = '';
    $users->gender = '';
    $users->email = '';
    $users->address = '';
    $users->description = '';
    $users->position = '';
  @endphp
@else
  @php
    $image = 'avatar/avatar_' .$users->id . '.png';
  @endphp  
@endif


<header id="header">

  <div class="header-main">
    <div class="header-main-content">
      <div class="container-fluid">
        <div class="container row">
          <div class="col-sm-4 col-lg-2">
            <div id="logo"><img src="{{ URL::asset('images/logo60nambk.png') }}" width="165" height="77" alt="Klass">
            </div>
            
            
          </div>

          <div class="breadcrum col-sm-8">
              <p>hanoi university of science and technology</p>
              <h1>school of international education</h1>  
          </div>

          <div class="user-menu col-sm-2">   
            <div class="dropdown wrap-item">
              <ul class="btn dropdown-toggle menubar" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <li class="">  
                  <a class ="action-menu-toggle" href="#">
                  <span class ="userbutton">
                    <span class ="usertext">{{$users->name}}
                    </span>
                    <span class ="avatar">
                      <span class ="ava current">
                          <img src="{{ URL::asset($image) }}" alt="avatar"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                      </span>
                    </span>
                  </span>
                  </a>
                </li>
            </ul>

              <ul class="dropdown-menu hidemenu" aria-labelledby="dropdownMenu1">
               <li>
                  <a class ="menu-action" href="/{{$subdomain}}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="action-text">Homepage</span>
                  </a>
                </li>

                <li>
                  <a class ="menu-action" href="/{{$subdomain}}/edit-profile">
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
        <li class="active"><a href="/{{$subdomain}}"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
        
        @if ($subdomain == 'collegeinstructor')
          <li class="intern dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/{{$subdomain}}/mark-1">Mark</a></li>
            </ul>
          </li>
        @elseif ($subdomain == 'student')
          <li class="dropdown" id="formcv">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Form <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/{{$subdomain}}/CV">CV</a></li>
              <li><a href="/{{$subdomain}}/registration">Registration</a></li>
            </ul>
          </li>
          <script>
            $('#formcv a').click.dropdown();
          </script>
          <li class="intern dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/{{$subdomain}}/topic">Topic</a></li>
              <li><a href="/{{$subdomain}}/report">Report</a></li>
              <li><a href="/{{$subdomain}}/feedback">Feedback</a></li>
              <li><a href="/{{$subdomain}}/status">Status</a></li>
              <li><a href="/{{$subdomain}}/mark">Mark</a></li>
            </ul>
          </li>
        @elseif ($subdomain == 'companyrepresentative')
        <li class="dropdown" id="formcv">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Form <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/{{$subdomain}}/Registration">Registration</a></li>
          </ul>
        </li>
        <li class="intern dropdown">
          <a href="/{{$subdomain}}/topic-list" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/{{$subdomain}}/topic-list">Topic list</a></li>
        </ul>
        </li>
        @elseif ($subdomain == 'companyinstructor')
        <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/{{$subdomain}}/outline">Outline</a></li>
            <li><a href="/{{$subdomain}}/mark-1">Mark's form</a></li>
            <li><a href="/{{$subdomain}}/timesheet-1">Timesheet</a></li>
            <li><a href="/{{$subdomain}}/rate-1">Rate</a></li>
          </ul>
        </li>
        @elseif ($subdomain == 'collegeintershipmanager')
          <li><a href="/{{$subdomain}}/duyet-topic-1">Censorship</a></li>
          <li><a href="/{{$subdomain}}/matched-list">Matched list</a></li>
          <li><a href="#">Internship Assignment</a></li>
          <li><a href="/{{$subdomain}}/statistic">Statistics</a></li>
        @elseif ($subdomain == 'companyrepresentative')
          <li class="dropdown" id="formcv">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Form <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="/{{$subdomain}}/Registration">Registration</a></li>
          </ul>
          </li>
          <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="/{{$subdomain}}/topic-list">Topic list</a></li>
          </ul>
          </li>
@elseif ($subdomain == 'admin')
         <li><a href="/{{$subdomain}}/manager-user">Manage User</a></li>
        <li><a href="/{{$subdomain}}/manager-mark">Manage Mark</a></li>
        <li><a href="/{{$subdomain}}/auto-match">Auto Match Info</a></li>
       


        @endif
        <li class="active"><a href="/{{$subdomain}}/chat">Message</a></li>

      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
    </div>

  </div>

</header>
