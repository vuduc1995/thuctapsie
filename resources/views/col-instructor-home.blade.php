@include('includes.head', array('cssFolder' => 'col.instructor-edit-profile'))
<body>
@include('includes.header', array('subdomain'=>'collegeinstructor'))

    <div class="container-fluid">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" align="center">
      <img src="{{ URL::asset('images/img_1.png') }}" alt="img_1" >
    </div>

    <div class="item" align="center">
      <img src="{{ URL::asset('images/img_2.png') }}" alt="img_2" >
    </div>

    <div class="item" align="center">
      <img src="{{ URL::asset('images/img_3.jpg') }}" alt="img_3" >
    </div>

    <div class="item" align="center">
      <img src="{{ URL::asset('images/img_4.jpg') }}" alt="img_4" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="padding-right: 0; padding-left: 0">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   

<!--Custom theme slider-->


             

                

      
    </div>
</div>
<!-- end-of-form-register -->

@include('includes.footer')
<!--E.O.Footer-->

</body>
