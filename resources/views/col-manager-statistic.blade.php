@include('includes.head', array('cssFolder' => 'col-manager-statistic'))
<body>
@include('includes.header', array('subdomain'=>'collegeintershipmanager'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>statistic</h2>

                

                  <table id="t01">
                    <tr>
                      <th>No.</th>
                      <th>Student</th> 
                      <th>Student's number</th>
                      <th>Company</th>
                      <th>Mid-term's point</th>
                      <th>Final's point</th>
                      <th>Average</th>

                    </tr>

                    @foreach($arraydata as $i=>$item)


                    <tr>
                      <td>{{$i+1}}</td>
                      <td>{{$item['student']}}</td>
                      <td>{{$item['studentNumber']}}</td>
                      <td>{{$item['company']}}</td>
                      <td>{{$item['midpoint']}}</td>
                      <td>{{$item['finalpoint']}}</td>
                      <td>{{$item['average']}}</td>

                    </tr>

                  @endforeach
  
                  </table>
             

                </div>
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>
<!-- end-of-form-register -->

@include('includes.footer')
</body>
