@if (!isset($data))
  @php
    $data = new StdClass();
    for ($i = 1; $i <= 21; $i++) {
                $namepoint = 'point'.$i;
                $namecomment = 'comment'.$i; 
                $data->$namepoint ='';
                $data->$namecomment ='';
            }

  @endphp
@else 
  @php
  @endphp
@endif

@include('includes.head', array('cssFolder' => 'comp.instructor-home'))
<body>
@include('includes.header', array('subdomain'=>'companyinstructor'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>Final assessment</h2>
<div class="fillin">
            <form class="form-horizontal" id="myForm">
               
              <input class="form-control hidden"  name ="id" value="{{$id}}">
              <p class="note"> Rating on the following scale:
                 A: Excellent, B: Very Good, C: Good, D: Pass, F: Fail, X: No comments
              </p>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;">A. Criteria</label>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">The Technical Level</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level related to internship</label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point1"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point1 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point1 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point1 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point1 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point1 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point1 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
              
                 
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment1"  value="{{$data->comment1}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to catch new techniques</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point2"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point2 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point2 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point2 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point2 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point2 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point2 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment2"  value="{{$data->comment2}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level after being instructed</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point3"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point3 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point3 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point3 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point3 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point3 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point3 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment3"  value="{{$data->comment3}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Analysis capabilities</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point4"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point4 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point4 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point4 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point4 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point4 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point4 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment4"  value="{{$data->comment4}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Methodology </label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point5" > 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point5 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point5 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point5 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point5 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point5 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point5 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment5"  value="{{$data->comment5}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Creativity </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point6"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point6 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point6 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point6 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point6 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point6 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point6 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment6"  value="{{$data->comment6}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">English Level </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point7"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point7 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point7 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point7 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point7 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point7 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point7 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment7"  value="{{$data->comment7}}">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Work Has Been Finished</label>
              </div>
              
              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quantity of work done during the internship </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point8"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point8 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point8 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point8 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point8 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point8 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point8 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment8"  value="{{$data->comment8}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quality of work done during the internship </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point9"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point9 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point9 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point9 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point9 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point9 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point9 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment9"  value="{{$data->comment9}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to self-complete work and solve problems incurred</label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point10"> 
                 <option value=""> Point</option>
                  <option value="A" {{$data->point10 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point10 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point10 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point10 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point10 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point10 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment10"  value="{{$data->comment10}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Write a document about the work done </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point11"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point11 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point11 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point11 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point11 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point11 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point11 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment11"  value="{{$data->comment11}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Presentation </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point12" > 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point12 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point12 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point12 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point12 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point12 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point12 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment12"  value="{{$data->comment12}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Abide by the rules of company</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point13" > 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point13 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point13 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point13 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point13 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point13 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point13 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment13"  value="{{$data->comment13}}">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Attitude</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">On time</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point14"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point14 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point14 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point14 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point14 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point14 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point14 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment14"  value="{{$data->comment14}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Appearance </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point15"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point15 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point15 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point15 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point15 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point15 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point15 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment15"  value="{{$data->comment15}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Attitude at companny </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point16"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point16 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point16 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point16 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point16 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point16 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point16 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment16"  value="{{$data->comment16}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Teamwork </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point17" > 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point17 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point17 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point17 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point17 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point17 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point17 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment17"  value="{{$data->comment17}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Communication with employees, clients at company  </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point18"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point18 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point18 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point18 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point18 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point18 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point18 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment18"  value="{{$data->comment18}}">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Improvement</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved capacity, technical level </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point19"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point19 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point19 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point19 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point19 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point19 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point19 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment19"  value="{{$data->comment19}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved the attitude </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point20"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point20 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point20 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point20 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point20 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point20 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point20 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment20"  value="{{$data->comment20}}">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved work methods </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point21"> 
                  <option value=""> Point</option>
                  <option value="A" {{$data->point21 == 'A' ? "selected" : ''}}> A</option> 
                  <option value="B" {{$data->point21 == 'B' ? "selected" : ''}}> B</option> 
                  <option value="C" {{$data->point21 == 'C' ? "selected" : ''}}> C</option>
                  <option value="D" {{$data->point21 == 'D' ? "selected" : ''}}> D</option>
                  <option value="E" {{$data->point21 == 'E' ? "selected" : ''}}> E</option>
                  <option value="F" {{$data->point21 == 'F' ? "selected" : ''}}> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment21"  value="{{$data->comment21}}">
                </div>
              </div>

              
              <div class="form-group">
                  <label for="danh-gia" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;">B. General assessment</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="9" rows="10" name="generalassessment" >{{$data->general_assessment}}</textarea>
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
        url:'/companyinstructor/mark',
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

