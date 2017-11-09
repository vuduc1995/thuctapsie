@include('includes.head', array('cssFolder' => 'col.instructor-edit-profile'))
<body>
@include('includes.header', array('subdomain'=>'collegeinstructor'))
    
</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>mark</h2>

          <div class="fillin">
            <form class="form-horizontal" method="POST" action="/collegeinstructor/upMark" accept-charset="UTF-8" enctype="multipart/form-data">
              
                <div class="form-group">
                <p style="color: black; font-weight: bold; font-style: italic;" class="col-sm-5 col-sm-offset-3">1. Mid-term</p>
                </div>


                <div class="form-group">
                <label class="col-sm-5 control-label">Report from Student:</label>
                
                <div class="col-sm-5 col-sm-offset-1 ">
                    <a href="{{ URL::asset($midReport) }}">Download
                     </a>
                  </div>
              </div>

                <div class="form-group">
                <label class="col-sm-5 control-label">Rate from Company Instructor:</label>
                
                <div class="col-sm-5 col-sm-offset-1 ">
                  
                    <button type="preview" class="btn btn-default btn-topic">Preview</button>
                   
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label">Mid-term point:</label>
                
                <div class="col-sm-5 col-sm-offset-6 ">
                <select name="Topic1" >
                        <option value="1">A</option>
                        <option value="2">B+</option>
                        <option value="3">B</option>
                        <option value="4">C+</option>
                        <option value="5">C</option>
                        <option value="6">D+</option>
                        <option value="7">D</option>
                        <option value="8">F</option>
                      </select>
                      </div>
              </div>

              <div class="form-group">
                <p style="color: black; font-weight: bold; font-style: italic;" class="col-sm-5 col-sm-offset-3">2. Final</p>
                </div>

                <div class="form-group">
                <label class="col-sm-5 control-label">Report from Student:</label>
                
                <div class="col-sm-5 col-sm-offset-1 ">
                    <a href="{{ URL::asset($finalReport ) }}">Download
                    </a>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label">Mark's form from Company Instructor:</label>
                
                <div class="col-sm-5 col-sm-offset-1 ">
                    <button type="preview" class="btn btn-default btn-topic">Preview</button>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label">Final point:</label>
                <input class="form-control hidden"  name ="id" value="{{$id}}">
                <div class="col-sm-5 col-sm-offset-6 ">
                <select name="Topic2" >
                        <option value="1">A</option>
                        <option value="2">B+</option>
                        <option value="3">B</option>
                        <option value="4">C+</option>
                        <option value="5">C</option>
                        <option value="6">D+</option>
                        <option value="7">D</option>
                        <option value="8">F</option>
                      </select>
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

