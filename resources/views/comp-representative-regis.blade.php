@if (!isset($users))
  @php
    $users = new StdClass();
    $users->companyname = '';
    $users->address = '';
    $users->comp_instructor_name = '';
    $users->email = '';
    $users->phone = '';
    $users->quantitysutd = '';
    $users->speciality = '';
    $users->requirement = '';


  @endphp
 @else  
   @php
    $dateDeadline = new DateTime($users->deadline);
    $dateDeadline = date_format($dateDeadline, 'g:ia \o\n l jS F Y');
   @endphp
@endif

@include('includes.head', array('cssFolder' => 'comp.representative-regis'))
<body>
@include('includes.header', array('subdomain'=>'companyrepresentative'))


<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>Application for internship </h2>
<div class="fillin">
            <form class="form-horizontal"  id="myForm">
               <div class="form-group">
               <label for="noi-dung" class="col-sm-3 control-label">1. General Information</label>
              </div>


          
              <div class="form-group">
                <label for="company-name" class="col-sm-3 control-label"  style="font-style: italic" >Company name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="company-name" placeholder="Company name" name="compName" value="{{$users->companyname}}">
                </div>
          </div>

              

              <div class="form-group">
                <label for="address" class="col-sm-3 control-label" style="font-style: italic">Address</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" placeholder="Address" name="compAddress" value="{{$users->address}}">
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-3 control-label" style="font-style: italic">Company instructor's name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" placeholder="Name" name="compInsName" value="{{$users->comp_instructor_name}}">
                </div>

             <div class="form-group">
             </div>
                <div class="form-group">
                <label for="email" class="col-sm-3 control-label" style="font-style: italic">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{$users->email}}">
                </div>
                </div>
                  <div class="form-group">
                 <label for="phone"  class="col-sm-3 control-label" style="font-style: italic">Phone</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phoneNumber" value="{{$users->phone}}">
                </div>
              </div>

              
              <div class="form-group">
               <label for="so-luong" class="col-sm-3 control-label">2. Number of students can receive:</label>
               <div class="col-sm-1">
                  <input type="text" class="form-control" id="so-luong" placeholder="Number of students" name="numberStudent" value="{{$users->quantitysutd}}">
                </div>
             </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-3 control-label">3. Content and requirements</label>
                

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="topic1" placeholder="Speciality " name="speciality" value="{{$users->speciality}}">
                </div>
                
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="topic2" placeholder="Requirement" name="requirement" value="{{$users->requirement}}">
                </div>
              </div>

             <div class="form-group">
                                  <label for="skills" class="col-sm-3 control-label">4. Deadline</label>
                                    <div class="col-sm-3 control-label">
                  <p id="deadline" style="font-weight:bold; text-align: left"> {{$dateDeadline}}</p>
                  </div>
                 </div>
                 <div class="form-group">
                  <label for="skills" class="col-sm-3 control-label">5. Time remaining</label>
                  <div class="col-sm-3 control-label" id="countdown" style="font-weight: bold; color: red; text-align: left">
                  <script>
                  // Set the date we're counting down to
                  var countDownDate = new Date("<?php echo $users->deadline ?>").getTime();   
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
                          document.getElementById("demo").innerHTML = "EXPIRED";
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
        url:'/companyrepresentative/Registration/up',
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
</body>
