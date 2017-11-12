@include('includes.head', array('cssFolder' => 'comp.instructor-home'))
<body>
@include('includes.header', array('subdomain'=>'companyinstructor'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>Rate</h2>
<div class="fillin">
            <form class="form-horizontal">
               <div class="form-group">
               <label for="companyname" class="col-sm-2 control-label" >Company Name</label>
              <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Company Name">
                </div>
                </div>

                <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Company instructor</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name ">
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">Phone</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="ins-phonenumber" placeholder="Phone number">
                </div>
                <label for="ins-email" class="col-sm-1 control-label">Email</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="ins-email" placeholder="Email ">
                </div>
              </div>

              <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Student</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name ">
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">ID</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="student-id" placeholder="Student's ID">
                </div>
                <label for="ins-email" class="col-sm-1 control-label">Class</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="class" placeholder="Class">
                </div>
              </div>

              <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Content:</label>
                <div class="col-sm-9">
                <textarea class="form-control" col="7" rows="7" ></textarea>
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

</body>