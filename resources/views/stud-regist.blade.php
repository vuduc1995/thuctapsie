@if (!isset($users))
  @php
    $users = new StdClass();
    $users->fullname = '';
    $users->class = '';
    $users->gender = '';
    $users->laptop = '';
    $users->studnumber = '';
    $users->email = '';
    $users->language_certification = '';
    $users->language_point = '';
    $users->stud_own_skill = '';
    $users->address = '';
    $users->phone= '';
    $users->stud_learn_skill = '';
    $users->speciality1 = '';
    $users->speciality2 = '' ;
    $users->speciality3 = '';
    $users->compHave = 0;
    $users->compName= '';
    $users->compAdderss= '';
    $users->compInstructor= '';
    $users->compPhone= '';
    $users->compEmail= '';

  @endphp
 @else  
   @php
    $dateDeadline = new DateTime($userData->deadline);
    $dateDeadline = date_format($dateDeadline, 'g:ia \o\n l jS F Y');
   @endphp
@endif

@include('includes.head', array('cssFolder' => 'stud-view-topic'))
<body>
@include('includes.header', array('subdomain'=>'student')) 
    
</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>internship registration for student </h2>

          <div class="fillin">
          <!-- method="POST" action="/student/registration/up" -->
            <form class="form-horizontal" id="myForm">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Fullname</label>
                <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Fullname" name ="fullname" value="{{$userData->fullname}}">
                </div>

                <label for="class" class="col-sm-2 control-label">Class</label>
                <div class="col-sm-2">
                  <input class="form-control" id="class" placeholder="Class" name ="class" value="{{$userData->class}}">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-6 col-lg-5">
                  <div class="radio radio-danger">
                    <label style="font-weight: bold"> Gender  </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey" value="male" {{$userData->gender == 'male' ? "checked=checked" : ''}} > Male
                    </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="survey" value="female" {{$userData->gender == 'female' ? "checked=checked" : ''}} > Female
                    </label>
                  </div>
                </div>
                
                <div class="col-sm-5 col-lg-6">
                  <div class="radio radio-danger">
                    <label style="font-weight: bold"> Laptop   </label>
                    <label style="margin-left: 40px">
                      <input type="radio" name="check" value="1" {{$userData->laptop == 1 ? "checked=checked" : ''}} > Yes
                    </label>
                     <label style="margin-left: 40px">
                      <input type="radio" name="check" value="0" {{$userData->laptop == 0 ? "checked=checked" : ''}} > No
                    </label>

                  </div>
                </div>
              </div>

  
              <div class="form-group">
                <label for="idnumber" class="col-sm-2 control-label">Student's number</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="idnumber" placeholder="Student's number" name="StudentNumber" value="{{$userData->studnumber}}">
                </div>
              </div>

              
              <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" placeholder="Address" name="Address" value="{{$userData->address}}">
                </div>
              </div>

              <div class="form-group">
                <label for="phonenumber" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="phonenumber" placeholder="phonenumber" name="phonenumber" value="{{$userData->phone}}">
                </div>

                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-3">
                  <input type="email" class="form-control" id="email" placeholder="Email" name = "email" value="{{$userData->email}}">
                </div>
              </div>

              <div class="form-group">
                <label for="language" class="col-sm-2 control-label">Foreign Language</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="type" placeholder="Certification" name="Certification" value="{{$userData->language_certification}}">
                </div>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="mark" placeholder="Point" name ="Point" value="{{$userData->language_point}}">
                </div>
                 </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">What skills do I have?</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="7" rows="7" name="skillsHave" >{{$userData->stud_own_skill}}</textarea>
                  </div>
                 </div>

                 <div class="form-group">
                  <label for="learning" class="col-sm-2 control-label">What skills do I want to learn?</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="7" rows="7" name="skillsRequire" >{{$userData->stud_learn_skill}}</textarea>
                  </div>
                 </div>

                 <div class="form-group">
                <label for="topic" class="col-sm-2 control-label">Speciality</label>
                <div class="col-sm-3">
              
                  <select name="speciality1" >
                        <option value="1" {{$userData->speciality1 == 1 ? "selected" : ''}}>Java</option>
                        <option value="2" {{$userData->speciality1 == 2 ? "selected" : ''}}>C#</option>
                        <option value="3" {{$userData->speciality1 == 3 ? "selected" : ''}}>Android</option>
                        <option value="4" {{$userData->speciality1 == 4 ? "selected" : ''}}>PHP</option>
                        <option value="5" {{$userData->speciality1 == 5 ? "selected" : ''}}>QA</option>
                      </select>
                </div>
                  
                
                <div class="col-sm-3">
              
                  <select name="speciality2" >
                        <option value="1" {{$userData->speciality2 == 1 ? "selected" : ''}}>Java</option>
                        <option value="2" {{$userData->speciality2 == 2 ? "selected" : ''}}>C#</option>
                        <option value="3" {{$userData->speciality2 == 3 ? "selected" : ''}}>Android</option>
                        <option value="4" {{$userData->speciality2 == 4 ? "selected" : ''}}>PHP</option>
                        <option value="5" {{$userData->speciality2 == 5 ? "selected" : ''}}>QA</option>
                      </select>
                </div>

                
                <div class="col-sm-3">
              
                  <select name="speciality3" >
                        <option value="1" {{$userData->speciality3 == 1 ? "selected" : ''}}>Java</option>
                        <option value="2" {{$userData->speciality3 == 2 ? "selected" : ''}}>C#</option>
                        <option value="3" {{$userData->speciality3 == 3 ? "selected" : ''}}>Android</option>
                        <option value="4" {{$userData->speciality3 == 4 ? "selected" : ''}}>PHP</option>
                        <option value="5" {{$userData->speciality3 == 5 ? "selected" : ''}}>QA</option>
                      </select>
                </div>
              </div>

                 <p class="note">* Complete the following information if the student has an intern's company:</p>
                  
                <div class="form-group">
                <label for="companyname" class="col-sm-2 control-label">Company's name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="companyname" placeholder="Company name" name="companyname" @if ($userData->compHave == 1) value="{{$userData->compName}}" @endif> 
                </div>
              </div>

              <div class="form-group">
                <label for="company-address" class="col-sm-2 control-label">Company's address</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="companyaddress" placeholder="Company address" name="companyaddress" @if ($userData->compHave == 1) value="{{$userData->compAdderss}}" @endif>
                </div>
              </div>

              <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Company's Instructor</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name " name="instructor" @if ($userData->compHave == 1) value="{{$userData->compInstructor}}" @endif>
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">Phone</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="insphonenumber" placeholder="Phone" name="insphonenumber" @if ($userData->compHave == 1) value="{{$userData->compPhone}}" @endif>
                </div>

                <label for="ins-email" class="col-sm-1 control-label">Email</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="insemail" placeholder="Email " name="insemail" @if ($userData->compHave == 1) value="{{$userData->compEmail}}" @endif>
                </div>
              </div>
<div class="form-group">    
                  <label for="skills" class="col-sm-2 control-label">Deadline</label>   
                  <div class="col-sm-9 control-label">    
                  <p id="deadline" style="font-weight:bold; text-align: left"> {{$dateDeadline}}</p>    
                  </div>    
                 </div>   
                 <div class="form-group">   
                  <label for="skills" class="col-sm-2 control-label">Time remaining</label>   
                  <div class="col-sm-3 control-label" id="countdown" style="font-weight: bold; color: red; text-align: left">   
                  <script>    
                  // Set the date we're counting down to    
                  // var countDownDate = new Date("April 20, 2017 23:55:00").getTime(); 
                  var countDownDate = new Date("<?php echo $userData->deadline ?>").getTime();  
                  // var countDownDate = <?php echo $userData->deadline ?>;
                  // console.log(<?php echo $userData->deadline ?>);
                  // Update the count down every 1 second   
                  var x = setInterval(function() {    
                      // Get todays date and time   
                      var now = new Date().getTime();   
                          
                      // Find the distance between now an the count down date   
                      var distance = countDownDate - now;   
                          
                      // Time calculations for days, hours, minutes and seconds   
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));    
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));    
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));    
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);    
                          
                      // Output the result in an element with id="countdown"    
                      document.getElementById("countdown").innerHTML = days + " days " + hours + " hours "    
                      + minutes + " minutes " + seconds + " seconds" ;    
                          
                      // If the count down is over, write some text     
                      if (distance < 0) {   
                          clearInterval(x);   
                          // document.getElementById("demo").innerHTML = "EXPIRED";    
                      }   
                  }, 1000);   
                  </script>   
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

@include('includes.footer')

 <script type="text/javascript">
      $('#myForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/student/registration/up',
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
