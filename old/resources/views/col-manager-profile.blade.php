<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>Student Homepage</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/col.manager-edit-profile/css/styles.css') }}">
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
                    <span class ="usertext">College Intership Manager
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
        
        <li><a href="#">Matched list</a></li>
        <li><a href="#">Internship Assignment</a></li>
        <li><a href="#">Statistics</a></li>
      </ul>

        
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
      
        <h2>profile </h2>

          <div class="fillin">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Fullname</label>
                <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Fullname">
                </div>

                
              </div>

              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-6 col-lg-5">
                  <div class="radio radio-danger">
                    <label style="font-weight: bold"> Gender  </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey"> Male
                    </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey"> Female
                    </label>
                  </div>
                </div>
              </div>

  
              

              
              <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" placeholder="Address">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Position</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="7" rows="7" ></textarea>
                  </div>
                 </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">Avatar</label>
                  <input id="input-folder-2" name="input-folder-2[]" class="file-loading" type="file" multiple webkitdirectory accept="image/*">
                  <div id="errorBlock" class="help-block"></div>
                  <script>
                  $(document).on('ready', function() {
                      $("#input-folder-2").fileinput({
                          browseLabel: 'Select Folder...',
                          previewFileIcon: '<i class="fa fa-file"></i>',
                          allowedPreviewTypes: null, // set to empty, null or false to disable preview for all types
                          previewFileIconSettings: {
                              'xls': '<i class="fa fa-file-excel-o text-success"></i>',
                              'zip': '<i class="fa fa-file-archive-o text-muted"></i>',
                          },
                          previewFileExtSettings: {
                              'xls': function(ext) {
                                return ext.match(/(xls|xlsx)$/i);
                              },
                              'zip': function(ext) {
                                  return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
                              },
                                                        }
                      });
                  });
                  </script>
                  </div>
            
                <div class="form-group">
                  <div class="text-center">
                    <button type="submit" class="btn btn-default">Update Profile</button>
                  </div>
                </div>
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>


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