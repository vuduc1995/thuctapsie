@include('includes.head', array('cssFolder' => 'stud-view-topic'))
<body>
@include('includes.header', array('subdomain'=>'student')) 

</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>mark</h2>

                

                  <table id="t01">
                    <tr>
                      
                      <th>Student</th> 
                      <th>Student's number</th>
                      <th>Mid-term's point</th>
                      <th>Final's point</th>
                      <th>Average</th>

                    </tr>

                    
  
                  </table>
             

                </div>
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>
<!-- end-of-form-register -->

@include('includes.footer')

<script type="text/javascript">
  var $TABLE = $('#t01');
  var insert = "<tr>  <td> <?php echo $users->name ?></td> "
                    + " <td> <?php echo $users->studid ?></td>"
                    + "<td> <?php echo $users->midtermmark ?></td>"
                    +  "<td> <?php echo $users->finaltermark ?></td>"
                    + "<td> <?php echo $users->average ?></td>"
                    + "</tr>";
  $TABLE.append(insert);

</script>
</body>
