<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
	$role = \Session::get('loginRole');
	$userid = \Session::get('loginId');

	if(is_null($role)){
		return view('home');	
	}else{
		if($role == 1){
            return  redirect('/admin');
        }else if($role == 2){
            return  redirect('/student');
        }else if($role == 3){
            return  redirect('/collegeinstructor');
        }else if($role == 4){
            return  redirect('/collegeintershipmanager');
        }else if($role == 5){
            return  redirect('/companyrepresentative');
        }else if($role == 6){
            return  redirect('/companyinstructor');
        }
	}

   
});

Route::get('/logout', function () {
   \Session::flush();
   return redirect('/');
});

Route::post('/user/login',array('uses'=>'LogInController@checkLogin'));
Route::post('/student/registration/up',array('uses'=>'StudentController@registration'));
Route::post('/student/upCV',array('uses'=>'StudentController@upCV'));
Route::post('/student/upEditProfile',array('uses'=>'StudentController@editProfile'));
Route::post('/student/upFeedback',array('uses'=>'StudentController@feedback'));
Route::post('/comp-representative/Registration/up',array('uses'=>'companyrepresentativeController@registration'));
Route::post('/companyrepresentative/topic-list',array('uses'=>'companyrepresentativeController@updateTopics'));
Route::post('/collegeintershipmanager/duyet-topic-2/accept',array('uses'=>'ColManagerController@accept'));
Route::post('/collegeintershipmanager/duyet-topic-2/decline',array('uses'=>'ColManagerController@decline'));
Route::post('/collegeintershipmanager/matched-list',array('uses'=>'ColManagerController@updateMatchedList'));
Route::post('/companyinstructor/mark-2',array('uses'=>'CompanyInstructorController@updateReport'));

Route::get('/student', function () {
   return view('stud-home');
});

Route::get('/admin', function () {
   return view('admin-home');
});

Route::get('/admin/manager-user', function () {
   return view('admin-manage-user');
});

Route::get('/collegeinstructor', function () {
   return view('col-instructor-home');
});

Route::get('/collegeinstructor/edit-profile', function () {
   return view('col-instructor-profile');
});

Route::get('/collegeintershipmanager', function () {
   return view('col-manager-home');
});

Route::get('/collegeintershipmanager/matched-list', function () {
  $students = \DB::select("select * from user where role = 2");

  $test = array();


//UPDATE `db_sie4`.`aspiration` SET `speciality1`='PHP' WHERE `idAspiration`='9';


//  foreach ($students as $student) {
    // map spe 1
    $studWithSpe1List = \DB::select("select u.iduser,st.name,st.studid,a.speciality1 from user u inner join student st on st.Student_ID = u.iduser inner join aspiration a on u.iduser = a.StudenID inner join speciality s on (a.speciality1 = s.name or a.speciality1 = s.idSpeciality)");

    foreach ($studWithSpe1List as $studWithSpe1) {
      $compList = \DB::select("select  t.idTopic,c.Name,c.idCompany,s.idSpeciality,s.name,t.content from topic t inner join company c on t.CompanyID = c.idCompany
inner join speciality s on t.SpecialityID = s.idSpeciality where s.name = ? or s.idSpeciality = ?", [$studWithSpe1->speciality1, $studWithSpe1->speciality1]);

      $t = $studWithSpe1->speciality1;
      Log::info('test '.$t);

      $topics = array();
      $companyName = "";
      $speciality = "";
      $specialityName = "";

      foreach ($compList as $compTopic) {
        $v1 = $compTopic->Name;
        $v2 = $compTopic->idSpeciality;
        $v3 = $compTopic->content;

        $companyName = $v1;
        $speciality = $v2;
        $specialityName = $compTopic->name;

        $topics[] = array(
          'idTopic' => $compTopic->idTopic,
          'content' => $compTopic->content
          );
      }

      Log::info($companyName);
      Log::info($speciality);
      Log::info('ok');

      $test[] = array(
        "iduser" => $studWithSpe1->iduser,
        "idCompany" => $compList[0]->idCompany,
        "idTopic" => $studWithSpe1->iduser.'.'.$compList[0]->idCompany,
        "studentName" => $studWithSpe1->name,
        "studentNumber" => $studWithSpe1->studid,
        "company" => $companyName,
        "speciality" => $speciality,
        "specialityName" => $specialityName,
        "topics" => $topics
      );
    }
//  }

  return view('col-manager-matched-list', ['list' => $test]);
});

Route::get('/collegeintershipmanager/edit-profile', function () {
   return view('col-manager-profile');
});

Route::get('/collegeintershipmanager/duyet-topic-1', function () {
  $companies = \DB::select("select * from company");
  $list = array();

  foreach ($companies as $company) {
    $list[] = array(
      'id'=>$company->idCompany,
      'name'=>$company->Name);
  }

  return view('col-manager-duyet-topic-1', ['companies' => $list]);
});

Route::get('/collegeintershipmanager/duyet-topic-2/{id}', function ($id) {
  $company = \DB::table('company')->where('idCompany',$id )->first();
  $represent = \DB::table('companyrepresentative')->where('CompanyID',$id )->first();
  $topics = \DB::select("select * from topic t inner join speciality s on t.SpecialityID = s.idSpeciality where t.CompanyID = ?", [$id]);
  return view('col-manager-duyet-topic-2', ['company' => $company, 'represent' => $represent, 'topics' => $topics]);
});

Route::get('/collegeinstructor/mark-1', function () {
 $students = \DB::select("select * from student");
 $list = array();

 foreach ($students as $student) {
  $list[] = array (
    'id'=>$student->id,
    'name'=>$student->name,
    'studnumber'=>$student->studid,
    'class'=>$student->class) ;
    # code...
  } 
  return view('col-instructor-mark-1', ['students' =>$list]);
});

Route::get('/collegeinstructor/mark-2/{id}', function ($id) {
  $student = \DB::table('student')->where('id',$id )->first();
  // $report = \DB::table('report')->where('idReport',$id )->first();
  $reports = \DB::select("select * from report r inner join student s on r.idReport = s.Student_ID where r.idReport = ?", [$id]);
  
  return view('col-instructor-mark-2', ['student' => $student, 'report'=> $reports ]);
   // ['company' => $company, 'represent' => $represent, 'topics' => $topics]
    
});

Route::get('/companyrepresentative', function () {
   return view('comp-representative-home');
});

Route::get('/companyrepresentative/topic-list', function () {
  $userId = \Session::get('loginId');
  $comRep = \DB::select("select * from companyrepresentative where CR_ID = ? ",[$userId]);

  $comId = $comRep[0]->CompanyID;
  $topics = \DB::select("select * from topic where CompanyID = ? ",[$comId]);
  $speList1 = array();
  foreach($topics as $topic) {
    $t = $topic->content;

    $speId = $topic->SpecialityID;
    $spe = \DB::select("select * from speciality where idSpeciality = ? ",[$speId]);
    $name = $spe[0]->name;

    $speList1[0] = $name;
  }

  // return  view('comp-representative-publish-topic-list',[
  //   'iduser' => $userId,
  //   'address' => $item[0]->address,
  //   'description' => $item[0]->description,
  //   'name' => $item[0]->name,
  //   'birthday' => $item[0]->birthday,
  //   'gender' => $item[0]->gender,
  //   'phone' => $item[0]->phone]);
  return view('comp-representative-publish-topic-list'
    // , ['speList1' => $speList1] 
    );
});

Route::get('/companyrepresentative/edit-profile', function () {
   return view('comp-representative-profile');
});

Route::get('/companyrepresentative/Registration', function () {
   return view('comp-representative-regis');
});

Route::get('/companyinstructor/mark-1', function () {
 $students = \DB::select("select * from student");
 $list = array();

 foreach ($students as $student) {
  $list[] = array (
    'id'=>$student->id,
    'name'=>$student->name,
    'studnumber'=>$student->studid,
    'class'=>$student->class) ;
    # code...
  } 
  return view('comp-instructor-mark-1', ['students' =>$list]);
});

Route::get('/companyinstructor/mark-2/{id}', function ($id) {
  $student = \DB::table('student')->where('id',$id )->first();
  // $report = \DB::table('report')->where('idReport',$id )->first();
  // $reports = \DB::select("select * from report r inner join student s on r.idReport = s.Student_ID where r.idReport = ?", [$id]);

  $report = \DB::table('reportdetail')->where('StudentID',$id )->first();

  return view('comp-instructor-mark-2', ['studentId' => $id, 'student'=>$student, 'report' => $report]);
});

Route::get('/companyinstructor', function () {
   return view('comp-instructor-home');
});

Route::get('/companyinstructor/timesheet', function () {
   return view('comp-instructor-timesheet');
});

Route::get('/companyinstructor/outline', function () {
   return view('comp-instructor-outline');
});

Route::get('/companyinstructor/rate', function () {
   return view('comp-instructor-rate');
});


Route::get('/companyinstructor/edit-profile', function () {
   return view('comp-instructor-profile');
});

Route::get('/student/CV', function () {
   return view('stud-manage-cv');
});

Route::get('/student/edit-profile', function () {
   return view('stud-home-profile');
});

Route::get('/student/registration', function () {
   return view('stud-regist');
});

Route::get('/student/report', function () {
   return view('stud-report');
});

Route::get('/student/feedback', function () {
   return view('stud-feedback');
});

Route::get('/student/topic', function () {
  $userId = \Session::get('loginId');
  $topics = \DB::select("select * from topic t inner join company c on t.CompanyID = c.idCompany inner join speciality s on t.SpecialityID = s.idSpeciality");

  return view('stud-view topic', ['topics' => $topics]);
});


Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');
