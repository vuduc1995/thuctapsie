
@include('includes.head', array('cssFolder' => 'admin-manage-mark'))
<body>
@include('includes.header', array('subdomain'=>'admin'))  
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>manage mark</h2>

                <div class="form-group">
                  

                  <form id='myForm'>

                  <table id="t01">
                    <tr>
                      <th>No.</th>
                      <th>Student</th> 
                      <th>Student's number</th>
                      <th>Company</th>
                      <th>Mid-term's point</th>
                      <th>Final's point</th>
                    </tr>

                    @foreach($array as $i=>$item)


                    <tr>
                      <input class="form-control" type="hidden" value="{{$item['iduser']}}" name="iduser_{{$i}}">
                      <td>{{$i+1}}</td>
                      <td>{{$item['student']}}</td>
                      <td>{{$item['studentNumber']}}</td>
                      <td>{{$item['company']}}</td>
                      <td>
                      <input type="number" name="midpoint_{{$i}}"  value="{{$item['midpoint']}}">
                      </td>
                      <td>
                      <input type="number" name="finalpoint_{{$i}}"  value="{{$item['finalpoint']}}">
                      </td>

                    </tr>

                  @endforeach
  
                  </table>
             

                </div>
                <div style="text-align:center">
                  <button type="save" class="btn btn-default">Save</button>
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
      $('#myForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/admin/upMark',
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