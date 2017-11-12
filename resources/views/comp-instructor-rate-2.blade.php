
@include('includes.head', array('cssFolder' => 'comp.instructor-home'))
<body>
@include('includes.header', array('subdomain'=>'companyinstructor'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>Rate</h2>
<div class="fillin">
            <form class="form-horizontal" id='myForm'>
            <input class="form-control hidden"  name ="id" value="{{$id}}">
               <div class="form-group">
               <label for="Mid-term" class="col-sm-3 control-label" >Mid-term point:</label>
              <div class="col-sm-1">
                  <input class="form-control" id="point" placeholder="Point" name="point" value="{{$data->point}}">
                </div>
                </div>

              <div class="form-group">
                <label for="instructor" class="col-sm-3 control-label">Content:</label>
                <div class="col-sm-7">
                <textarea class="form-control" col="6" rows="6" name="content">{{$data->content}}</textarea>
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
        url:'/companyinstructor/upRate',
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

