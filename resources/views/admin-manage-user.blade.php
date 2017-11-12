@include('includes.head', array('cssFolder' => 'admin-manage-user'))
<body>
@include('includes.header', array('subdomain'=>'admin'))  
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>Manage user</h2>

        <form id='myForm'>
                <div class="form-group">
                  <div class="text-right">
                   
                  </div>

                  <table id="table"  >
                    <tr>
                      <th>Email</th> 
                      <th>Password</th>
                      <th>Role</th>
                      <th> <span class="table-add glyphicon glyphicon-plus" style="color:white"></span></th>
                    </tr>

                    @foreach($array as $i=>$item)


                    <tr>
                      <input class="form-control" type="hidden" value="{{$item['iduser']}}" name="iduser_{{$i}}">
                      <td>
                      <input type="email" name="email_{{$i}}" size="35" value="{{$item['email']}}">
                      </td>
                      <td>
                      <input type="text" name="password_{{$i}}"  value="{{$item['password']}}">
                      </td>
                      <td>
                      <input type="number" name="role_{{$i}}"  value="{{$item['role']}}">
                      </td>
                      <td>
                      <span class="table-remove glyphicon glyphicon-remove"></span>
                    </td>

                    </tr>

                  @endforeach

                    
                      <tr class="hide">
                      <input class="form-control" type="hidden" value="-1" name="iduser">
                       <td> Email</td>
                      <td> Password</td>
                      <td>1</td>
                      <td>
                      <span class="table-remove glyphicon glyphicon-remove"></span>
                    </td>
                    </tr>
                  </table>
             <div class="text-center"> 
                   <button id="export-btn" class="btn btn-primary" style="text-align:center">Save Data</button>
                     <p id="export"></p>
                     </div>
                </div>

      </form>
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>

<!-- end-of-form-register -->

@include('includes.footer')
<!--E.O.Footer-->
<script type="text/javascript">
  var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.table-add').click(function () {
  window.location="/admin/add-user";
  
});

$('.table-remove').click(function () {

  $(this).parents('tr').detach();
});


// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;


</script>
<script type="text/javascript">
      $('#myForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/admin/upUser',
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
