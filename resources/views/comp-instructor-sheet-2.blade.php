@include('includes.head', array('cssFolder' => 'comp.instructor-timesheet-2'))
<body>
@include('includes.header', array('subdomain'=>'companyinstructor'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>timesheet</h2>

          <div class="fillin">
            <form class="form-horizontal" method="POST" action="/companyinstructor/upTimeSheet" accept-charset="UTF-8" enctype="multipart/form-data">
            <input class="form-control hidden"  name ="id" value="{{$id}}">
              <div class="form-group">
               

                
                <div class="form-group">
                  <label for="skills" class="col-sm-5 control-label">Attachments</label>
                  <div class="file-tab col-sm-5" style="text-align: left">
                        <label class="btn btn-default btn-file"> 
                          <input type="file" name="file" required multiple />
                        </label>
                      <div id="output"></div>   
                        
                  </div>
                  </div>

                <div class="form-group">
                  <div class="text-center" style="margin-top: 50px">
                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="cancel" class="btn btn-default">Cancel</button>
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

