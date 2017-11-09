@if (!isset($users))
  @php
    $users = new StdClass();
    $users->idTopic = '';
    $users->topic = '';
    $users->company = '';
    $users->speciality = '';
  @endphp
@endif

@include('includes.head', array('cssFolder' => 'stud-view-topic'))
<body>
@include('includes.header', array('subdomain'=>'student')) 
    
</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>topic list</h2>

               
                  <table id="t01">
                    <tr>
                      <th>No.</th>
                      <th>Company</th>
                      <th>Topic</th>
                      <th>Speciality</th>
                    </tr>

                   
  
                  </table>
             
             
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>
<!-- end-of-form-register -->

@include('includes.footer')

<script type="text/javascript">
  var $TABLE = $('#t01');
  var data = <?php  echo json_encode($userData) ?>;
  for(var i = 0;i < data.length;i++){
  var insert = "<tr>  <td>" +(i+1)+"</td> "
                    + " <td>" +data[i].company+"</td>"
                    + "<td>" +data[i].topic+"</td>"
                    +  "<td>" +data[i].speciality+"</td>"
                    + "</tr>";
  $TABLE.append(insert);
  }
</script>
</body>
