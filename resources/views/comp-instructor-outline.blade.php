@if (!isset($users))
  @php
  @endphp
 @else  
   @php
    $dateDeadline = new DateTime($users->time);
    $dateDeadline = date_format($dateDeadline, 'g:ia \o\n l jS F Y');
   @endphp
@endif

@include('includes.head', array('cssFolder' => 'comp.instructor-outline'))
<body>
@include('includes.header', array('subdomain'=>'companyinstructor'))


<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>outline</h2>

          <div class="fillin">
            <form class="form-horizontal" method="POST" action="/companyinstructor/upOutline" accept-charset="UTF-8" enctype="multipart/form-data">
              <div class="form-group">
               

                
             <div class="form-group">
                    <label for="skills" class="col-sm-5 control-label">Attachments:</label>
                    <div class="file-tab col-sm-5" style="text-align: left">
                        <label class="btn btn-default btn-file"> 
                          <input type="file" name="file" required />
                        </label>
                      <div id="output"></div>   
                        
                    </div>
                  </div>

                   <div class="form-group">
                  <label for="skills" class="col-sm-5 control-label">Deadline:</label>
                  <div class="col-sm-7 control-label">
                  <p id="deadline" style="font-weight:bold; text-align: left"> {{$dateDeadline}}</p>
                  </div>
                 </div>

                 <div class="form-group">
                  <label for="skills" class="col-sm-5 control-label">Time remaining:</label>
                  <div class="col-sm-7 control-label" id="countdown" style="font-weight: bold; color: red; text-align: left">
                  <script>
                  // Set the date we're counting down to
                  var countDownDate = new Date("<?php echo $users->time ?>").getTime();   

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
                    <button type="submit" class="btn btn-default">Submit</button><button type="cancel" class="btn btn-default">Cancel</button>
                  </div>

                 


                </div>
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>
<!-- end-of-form-register -->

@include('includes.footer')


</body>