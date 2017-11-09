@include('includes.head', array('cssFolder' => 'col.instructor-edit-profile'))
<body>
@include('includes.header', array('subdomain'=>'collegeinstructor'))

</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>Mark</h2>

          <div class="row fillin">
            <form class="form-horizontal">

              <!-- <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6 control-label">
                  <label class="col-sm-4 control-label" style="text-align: left;"><h4>Student's Name</h4></label>
                  <label class="col-sm-4 control-label" style="text-align: left;"><h4>Student's Number</h4></label>
                  <label class="col-sm-4 control-label" style="text-align: left;"><h4>Class</h4></label>
                </div>
              </div>
 -->
 
                 @foreach ($students as $i => $student)
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6 control-label" >
                  <label class="col-sm-4 control-label" style="text-align: left;"><a href="/collegeinstructor/mark-2/{{$student['id']}}">{{$i+1}}. {{$student['name']}}</a></label>
                  <label class="col-sm-4 control-label" style="text-align: left;">Student's Number: {{$student['studnumber']}}</label>
                  <label class="col-sm-4 control-label" style="text-align: left;">Class: {{$student['class']}}</label>
                </div>
              </div>
                @endforeach
                
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>
<!-- end-of-form-register -->

@include('includes.footer') 

</body>
