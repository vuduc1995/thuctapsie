
@include('includes.head', array('cssFolder' => 'admin-manage-user'))
<body>
@include('includes.header', array('subdomain'=>'admin'))  
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>Manage user</h2>

                <div class="form-group">
                  <div class="text-right">
                   
                  </div>

                  
                  <div class="text-center"> 
                   <button id="match" class="btn btn-primary" style="text-align:center">Match Data</button>
                     </div>
                </div>

    
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>

<!-- end-of-form-register -->

@include('includes.footer')

<!--E.O.Footer-->
<script type="text/javascript">
var $EXPORT = $('#export-btn');

$('#match').click(function () {

  $.ajax({
        url:'/admin/auto',
        type:'get',
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
