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


@include('includes.head', array('cssFolder' => 'comp.instructor-edit-profile'))
<body>
@include('includes.header', array('subdomain'=>'companyinstructor'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>profile </h2>

          <div class="fillin">
            <form class="form-horizontal" id ="myForm">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label" >Fullname</label>
                <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Fullname" name="name" value="{{$users->name}}">
                </div>

                
              </div>

              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-6 col-lg-5">
                  <div class="radio radio-danger">
                    <label style="font-weight: bold"> Gender  </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey" value="male" {{$users->gender == 'male' ? "checked=checked" : ''}}> Male
                    </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey" value="female" {{$users->gender == 'female' ? "checked=checked" : ''}}> Female
                    </label>
                  </div>
                </div>
              </div>

  
              

              
              <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{$users->address}}">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{$users->email}}">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Position</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="position" placeholder="position" name="position" value="{{$users->position}}">
                </div>
              </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="7" rows="7" name="description">{{$users->description}}</textarea>
                  </div>
                 </div>

                <div class="imageupload form-group">
                <label class="col-sm-2 control-label">Avatar</label>
                <div class="file-tab col-sm-3">
                    <label class="btn btn-default btn-file">
                        <span>Choose Your Photo</span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file">
                    </label>
                </div>
                 </div>
              
                <script>
                    var $imageupload = $('.imageupload');
                    $imageupload.imageupload();
                </script>
            
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

@include('includes.footer')


<script type="text/javascript">
      $('#myForm').submit(function(e){
    e.preventDefault();
    var data,dataIm;
    data = $('#myForm').serialize();
    if($('#image_upload').length == 0) {

      }else{
        dataIm = $('#image_upload')[0].src;
          
          data = data +"&img="+encodeURIComponent(dataIm);
      }
    
    $.ajax({
        url:'/companyinstructor/upEditProfile',
        type:'post',
        data:data,
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
