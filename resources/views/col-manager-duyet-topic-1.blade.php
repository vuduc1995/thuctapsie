@include('includes.head', array('cssFolder' => 'col.manager-duyet-topic-1'))
<body>
@include('includes.header', array('subdomain'=>'collegeintershipmanager'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>censorship</h2>

          <div class="fillin">
            <form class="form-horizontal">

              @foreach ($companies as $i => $company)
              <div class="form-group">
                <div class="col-sm-6 control-label">
                  <a href="/collegeintershipmanager/duyet-topic-2/{{$company['id']}}">{{$i+1}}. {{$company['name']}}:</a>
                </div>
                <div class="col-sm-3">
                  <input type="checkbox"  value="publish">Published?<br>
                  <input type="checkbox"  value="censor">Censored?
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
