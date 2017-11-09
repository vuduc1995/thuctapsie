@if (!isset($users))
  @php
    $users = new StdClass();
    $users->fullname = '';
    $users->class = '';
    $users->gender = '';
    $users->stdid = '';
    $users->email = '';
    $users->foreignLanguage = '';
    $users->skills = '';
    $users->experience = '';
    $users->address = '';
    $users->phone= '';
  @endphp
@endif

@include('includes.head', array('cssFolder' => 'stud-view-topic'))
<body>
@include('includes.header', array('subdomain'=>'student')) 
    
</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>manage cv</h2>

          <div class="fillin">
            <form class="form-horizontal" id="myForm">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Fullname</label>
                <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Fullname" name="fullname" @if (isset($userData)) value="{{$userData->fullname}}" @endif>
                </div>

                <label for="class" class="col-sm-2 control-label">Class</label>
                <div class="col-sm-3">
                  <input class="form-control" id="class" placeholder="Class" name="class" @if (isset($userData)) value="{{$userData->class}}" @endif>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-6 col-lg-5">
                  <div class="radio radio-danger">
                    <label style="font-weight: bold"> Gender  </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey" value="male" @if (isset($userData)) {{$userData->gender == 'male' ? "checked=checked" : ''}} @endif> Male
                    </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey" value="female" @if (isset($userData)) {{$userData->gender == 'female' ? "checked=checked" : ''}} @endif> Female
                    </label>
                  </div>
                </div>
              </div>

  
              <div class="form-group">
                <label for="idnumber" class="col-sm-2 control-label" >Student's number</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="idnumber" placeholder="Student's number" name="stdnumber" @if (isset($userData))value="{{$userData->stdid}}" @endif>
                </div>
              </div>

              
              <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" placeholder="Address" name="address" @if (isset($userData)) value="{{$userData->address}}" @endif>
                </div>
              </div>

              <div class="form-group">
                <label for="phonenumber" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="phonenumber" placeholder="phonenumber" name="phonenumber" @if (isset($userData)) value="{{$userData->phone}}" @endif>
                </div>

                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-3">
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" @if (isset($userData)) value="{{$userData->email}}" @endif>
                </div>
              </div>

              <div class="form-group">
                <label for="language" class="col-sm-2 control-label">Foreign Language</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="type" placeholder="Certification" name="certification" @if (isset($userData)) value="{{$userData->foreignLanguage}}" @endif>
                </div>
                 </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">Skills</label>
                  <div class="col-sm-9">
                  <textarea class="form-control" col="7" rows="7" name="skills" >@if (isset($userData)) {{$userData->skills}} @endif</textarea>
                  </div>
                 </div>

                 <div class="form-group">
                  <label for="learning" class="col-sm-2 control-label">Experience</label>
                  <div class="col-sm-9">
                  <textarea class="form-control" col="7" rows="7" name="experience" >@if (isset($userData))  {{$userData->experience}} @endif</textarea>
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
<script type="text/javascript">
      $('#myForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/student/upCV',
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

@include('includes.footer')

</body>
