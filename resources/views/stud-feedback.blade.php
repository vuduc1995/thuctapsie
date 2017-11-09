@include('includes.head', array('cssFolder' => 'stud-view-topic'))
<body>
@include('includes.header', array('subdomain'=>'student'))
    
</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>feedback</h2>

          <div class="fillin">
            <form class="form-horizontal" id="myForm">
              <div class="form-group">

                <label for="tieu-de" class="col-sm-2 control-label">Subject:</label>
                 <div class="col-sm-8">
                  <textarea class="form-control" col="1" rows="1" name="subject"></textarea>
                  </div>
                 </div>

              <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">Content:</label>
                  <div class="col-sm-8">
                  <textarea class="form-control" col="6" rows="6" name="content"></textarea>
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

 <script type="text/javascript">
      $('#myForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/student/upFeedback',
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