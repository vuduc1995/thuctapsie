
@include('includes.head', array('cssFolder' => 'comp.instructor-home'))
<body>
@include('includes.header', array('subdomain'=>'companyinstructor'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>final assessment</h2>
<div class="fillin">
            <form class="form-horizontal" id="myForm">
               <div class="form-group">
               <label for="companyname" class="col-sm-2 control-label" >Company Name</label>
              <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Company Name" name="companyname">
                </div>
                </div>

                <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Company instructor</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name " name="companyinstructorname">
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">Phone</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="ins-phonenumber" placeholder="Phone number" name="phonenumber">
                </div>
                <label for="ins-email" class="col-sm-1 control-label">Email</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="ins-email" placeholder="Email " name="email">
                </div>
              </div>

              <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Student</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name " name="studentname">
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">ID</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="student-id" placeholder="Student's ID" name="studentid">
                </div>
                <label for="ins-email" class="col-sm-1 control-label">Class</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="class" placeholder="Class" name="class">
                </div>
              </div>

              <p class="note"> Rating on the following scale:
                 A: Excellent, B: Very Good, C: Good, D: Pass, F: Fail, X: No comments
              </p>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;">A. Criteria</label>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">The Technical Level</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level related to internship</label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point1"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
              
                 
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment1">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to catch new techniques</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point2"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment2">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level after being instructed</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point3"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment3">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Analysis capabilities</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point4"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment4">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Methodology </label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point5" > 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment5">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Creativity </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point6"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment6">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">English Level </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point7"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment7">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Work Has Been Finished</label>
              </div>
              
              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quantity of work done during the internship </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point8"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment8">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quality of work done during the internship </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point9"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment9">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to self-complete work and solve problems incurred</label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point10"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment10">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Write a document about the work done </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point11"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment11">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Presentation </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point12" > 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment12">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Abide by the rules of company</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point13" > 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment13">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Attitude</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">On time</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point14"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment14">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Appearance </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point15"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment15">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Attitude at companny </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point16"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment16">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Teamwork </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point17" > 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment17">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Communication with employees, clients at company  </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point18"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment18">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Improvement</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved capacity, technical level </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point19"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment19">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved the attitude </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point20"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment20">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved work methods </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point21"> 
                  <option value=""> Point</option>
                  <option value="A"> A</option> 
                  <option value="B"> B</option> 
                  <option value="C"> C</option>
                  <option value="D"> D</option>
                  <option value="E"> E</option>
                  <option value="F"> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment21">
                </div>
              </div>

              
              <div class="form-group">
                  <label for="danh-gia" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;">B. General assessment</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="9" rows="10" name="generalassessment"></textarea>
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
        url:'/companyinstructor/mark',
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
