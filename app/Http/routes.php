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

Route::get('/student/CV',array('uses'=>'StudentController@showCvStudent'));
Route::get('/student/edit-profile',array('uses'=>'StudentController@showProfileStudent'));
Route::get('/student/registration',array('uses'=>'StudentController@showRegistStudent'));
Route::get('/student/mark',array('uses'=>'StudentController@showMarkStudent'));
Route::get('/student/status',array('uses'=>'StudentController@showStatusStudent'));
Route::get('/student/topic',array('uses'=>'StudentController@showTopicList'));
Route::get('/student/report',array('uses'=>'StudentController@showReport'));

Route::post('/student/registration/up',array('uses'=>'StudentController@registration'));
Route::post('/student/upCV',array('uses'=>'StudentController@upCV'));
Route::post('/student/upEditProfile',array('uses'=>'StudentController@editProfile'));
Route::post('/student/upFeedback',array('uses'=>'StudentController@feedback'));
Route::post('/student/upReport',array('uses'=>'StudentController@updateReport'));

Route::get('/companyrepresentative/topic-list',array('uses'=>'companyrepresentativeController@showTopic'));
Route::get('/companyrepresentative/Registration',array('uses'=>'companyrepresentativeController@showRegistration'));
Route::post('/companyrepresentative/Registration/up',array('uses'=>'companyrepresentativeController@upRegistration'));
Route::post('/companyrepresentative/topic/up',array('uses'=>'companyrepresentativeController@upTopic'));

Route::get('/collegeinstructor/edit-profile',array('uses'=>'collegeinstructorController@showProfileCollegeinstructor'));
Route::post('/collegeinstructor/upEditProfile',array('uses'=>'collegeinstructorController@editProfile'));
Route::post('/collegeinstructor/upMark',array('uses'=>'collegeinstructorController@upMark'));
Route::get('/collegeinstructor/chat',array('uses'=>'ChatController@chat'));
Route::post('/collegeinstructor/chat',array('uses'=>'ChatController@send'));
Route::get('/collegeinstructor/chat/read',array('uses'=>'ChatController@read'));

Route::get('/collegeintershipmanager/edit-profile',array('uses'=>'collegeintershipmanagerController@showProfileCollegeinstructor'));
Route::post('/collegeintershipmanager/upEditProfile',array('uses'=>'collegeintershipmanagerController@editProfile'));
Route::post('/collegeintershipmanager/upSchedule',array('uses'=>'collegeintershipmanagerController@upSchedule'));
Route::get('/collegeintershipmanager/statistic',array('uses'=>'collegeintershipmanagerController@showStatistic'));
Route::get('/collegeintershipmanager/schedule',array('uses'=>'collegeintershipmanagerController@showSchedule'));



Route::get('/companyrepresentative/edit-profile',array('uses'=>'companyrepresentativeController@showProfileCompanyrepresentative'));
Route::post('/companyrepresentative/upEditProfile',array('uses'=>'companyrepresentativeController@editProfile'));
Route::get('/companyrepresentative/chat',array('uses'=>'ChatController@chat'));
Route::post('/companyrepresentative/chat',array('uses'=>'ChatController@send'));
Route::get('/companyrepresentative/chat/read',array('uses'=>'ChatController@read'));

Route::get('/admin/chat',array('uses'=>'ChatController@chat'));
Route::post('/admin/chat',array('uses'=>'ChatController@send'));
Route::get('/admin/chat/read',array('uses'=>'ChatController@read'));
Route::post('/admin/upAddUser',array('uses'=>'adminController@upAddUser'));
Route::post('/admin/upUser',array('uses'=>'adminController@upUser'));
Route::post('/admin/upMark',array('uses'=>'adminController@upMark'));
Route::get('/admin/manager-mark',array('uses'=>'adminController@showMark'));
Route::get('/admin/manager-user',array('uses'=>'adminController@showUser'));
Route::get('/companyinstructor/edit-profile',array('uses'=>'companyinstructorController@showProfileCompanyinstructor'));
Route::post('/companyinstructor/upEditProfile',array('uses'=>'companyinstructorController@editProfile'));
Route::post('/companyinstructor/mark',array('uses'=>'companyinstructorController@mark'));
Route::post('/companyinstructor/upOutline',array('uses'=>'companyinstructorController@upOutline'));
Route::get('/companyinstructor/outline',array('uses'=>'companyinstructorController@showOutline'));
Route::post('/companyinstructor/upRate',array('uses'=>'companyinstructorController@upRate'));
Route::post('/companyinstructor/upTimeSheet',array('uses'=>'companyinstructorController@upTimeSheet'));
Route::get('/companyinstructor/chat',array('uses'=>'ChatController@chat'));
Route::post('/companyinstructor/chat',array('uses'=>'ChatController@send'));
Route::get('/companyinstructor/chat/read',array('uses'=>'ChatController@read'));

Route::get('/student/chat/read',array('uses'=>'ChatController@read'));
Route::get('/student/chat',array('uses'=>'ChatController@chat'));
Route::post('/student/chat',array('uses'=>'ChatController@send'));
Route::get('/student', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('student')->where('Student_ID',$iduser)->first();
  $user->id = $iduser;
  return view('stud-home',['users'=> $user]);
});

Route::get('/admin/auto',array('uses'=>'adminController@matchInfo'));



Route::get('/admin', function () {
  $iduser = \Session::get('loginId');
  $user = new StdClass();
  $user->id = 1;
  $user->name = 'Admin';
   return view('admin-home', ['users' => $user]);
});

Route::get('/admin/add-user', function () {
   return view('admin-add-user');
});

// Route::get('/admin/manager-mark', function () {
//    return view('admin-manage-mark');
// });

Route::get('/admin/auto-match', function () {
  $iduser = \Session::get('loginId');
  $user = new StdClass();
  $user->id = 1;
  $user->name = 'Admin';
   return view('admin-auto', ['users' => $user]);
});

Route::get('/collegeinstructor', function () {
  $iduser = \Session::get('loginId');
  Log::info("id:".$iduser);
  $user = \DB::table('collegeinstructor')->where('CI_ID',$iduser)->first();
  $user->id = $iduser;
  return view('col-instructor-home',['users'=> $user]);
});


Route::get('/collegeintershipmanager/matchInfo',array('uses'=>'collegeintershipmanagerController@showMatchInfo'));


Route::get('/collegeintershipmanager', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('collegeintershipmanager')->where('CIM_ID',$iduser)->first();
  $user->id = $iduser;
   return view('col-manager-home',['users'=> $user]);
});

Route::get('/companyrepresentative', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('companyrepresentative')->where('CR_ID',$iduser)->first();
  $user->id = $iduser;
  return view('comp-representative-home',['users'=> $user]);
});

Route::get('/companyinstructor', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('companyinstructor')->where('CI_ID',$iduser)->first();
  $user->id = $iduser;
   return view('comp-instructor-home',['users'=> $user]);
});

Route::get('/companyinstructor/mark', function () {
   return view('comp-instructor-mark');
});

Route::get('/companyinstructor/timesheet', function () {
   return view('comp-instructor-timesheet');
});



Route::get('/companyinstructor/rate', function () {
   return view('comp-instructor-rate');
});



Route::get('/student/feedback', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('student')->where('Student_ID',$iduser)->first();
  $user->id = $iduser;
  return view('stud-feedback',['users'=> $user]);
});

Route::get('/collegeinstructor/mark-1', function () {
 $students = \DB::select("select * from student");
 $list = array();

  $iduser = \Session::get('loginId');
  $user = \DB::table('collegeinstructor')->where('CI_ID',$iduser)->first();
  $user->id = $iduser;

 foreach ($students as $student) {
  $list[] = array (
    'id'=>$student->Student_ID,
    'name'=>$student->name,
    'studnumber'=>$student->studid,
    'class'=>$student->class) ;
  } 
  return view('col-instructor-mark-1', ['students' =>$list, 'users'=> $user]);
});

Route::get('/companyinstructor/mark-1', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('companyinstructor')->where('CI_ID',$iduser)->first();
  $user->id = $iduser;
 $students = \DB::select("select * from student");
 $list = array();

 foreach ($students as $student) {
  $list[] = array (
    'id'=>$student->Student_ID,
    'name'=>$student->name,
    'studnumber'=>$student->studid,
    'class'=>$student->class) ;
  } 
  return view('comp-instructor-mark-1', ['students' =>$list,'users'=>$user]);
});

Route::get('/companyinstructor/timesheet-1', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('companyinstructor')->where('CI_ID',$iduser)->first();
  $user->id = $iduser;
 $students = \DB::select("select * from student");
 $list = array();

 foreach ($students as $student) {
  $list[] = array (
    'id'=>$student->Student_ID,
    'name'=>$student->name,
    'studnumber'=>$student->studid,
    'class'=>$student->class) ;
  } 
  return view('comp-instructor-sheet-1', ['students' =>$list, 'users'=>$user]);
});

Route::get('/companyinstructor/rate-1', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('companyinstructor')->where('CI_ID',$iduser)->first();
  $user->id = $iduser;
 $students = \DB::select("select * from student");
 $list = array();

 foreach ($students as $student) {
  $list[] = array (
    'id'=>$student->Student_ID,
    'name'=>$student->name,
    'studnumber'=>$student->studid,
    'class'=>$student->class) ;
  } 
  return view('comp-instructor-rate-1', ['students' =>$list, 'users'=>$user]);
});


Route::get('/collegeinstructor/mark-2/{id}',array('uses'=>'collegeinstructorController@showMark'));
Route::get('/companyinstructor/mark-2/{id}',array('uses'=>'companyinstructorController@showMark'));
Route::get('/companyinstructor/rate-2/{id}',array('uses'=>'companyinstructorController@showRate'));
Route::get('/companyinstructor/sheet-2/{id}',array('uses'=>'companyinstructorController@showSheet'));


Route::post('/collegeintershipmanager/duyet-topic-2/accept',array('uses'=>'collegeintershipmanagerController@accept'));
Route::post('/collegeintershipmanager/duyet-topic-2/decline',array('uses'=>'collegeintershipmanagerController@decline'));
Route::get('/collegeintershipmanager/chat',array('uses'=>'ChatController@chat'));
Route::post('/collegeintershipmanager/chat',array('uses'=>'ChatController@send'));
Route::get('/collegeintershipmanager/chat/read',array('uses'=>'ChatController@read'));


Route::get('/collegeintershipmanager/duyet-topic-1', function () {
  $iduser = \Session::get('loginId');
  $user = \DB::table('collegeintershipmanager')->where('CIM_ID',$iduser)->first();
  $user->id = $iduser;
  $companies = \DB::select("select * from company");
  $list = array();

  foreach ($companies as $company) {
  $list[] = array(
  'id'=>$company->idCompany,
  'name'=>$company->Name);
  }

  return view('col-manager-duyet-topic-1', ['companies' => $list, 'users' => $user]);
});

Route::get('/collegeintershipmanager/duyet-topic-2/{id}', function ($id) {
  $company = \DB::table('company')->where('idCompany',$id )->first();
  $represent = \DB::table('companyrepresentative')->where('CompanyID',$id )->first();
  $topics = null;
  if (env('DB_CONNECTION') == 'mysql') {
  $topics = \DB::select("select * from topic t inner join speciality s on t.SpecialityID = s.idSpeciality where t.CompanyID = ?", [$id]);
  } else if (env('DB_CONNECTION') == 'pgsql') {
  $topics = \DB::select("select * from topic t inner join speciality s on t.\"SpecialityID\" = s.\"idSpeciality\" where t.\"CompanyID\" = ?", [$id]);
  }
  return view('col-manager-duyet-topic-2', ['company' => $company, 'represent' => $represent, 'topics' => $topics]);
});

Route::post('/collegeintershipmanager/matched-list',array('uses'=>'collegeintershipmanagerController@updateMatchedList'));

Route::get('/collegeintershipmanager/matched-list', function () {
  $students = null;
  if (env('DB_CONNECTION') == 'mysql') {
  $students = \DB::select("select * from user where role = 2");
  } else if (env('DB_CONNECTION') == 'pgsql') {
  $students = \DB::select("select * from \"user\" where role = 2");
  }

  $test = array();




    $studWithSpe1List = null;
    if (env('DB_CONNECTION') == 'mysql') {
    $studWithSpe1List = \DB::select("select u.iduser,st.name,st.studid,a.speciality1 from user u inner join student st on st.Student_ID = u.iduser inner join aspiration a on u.iduser = a.StudenID inner join speciality s on (a.speciality1 = s.name or a.speciality1 = s.idSpeciality)");
    } else if (env('DB_CONNECTION') == 'pgsql') {
    $studWithSpe1List = \DB::select("select u.iduser,st.name,st.studid,a.speciality1 from \"user\" u inner join student st on st.\"Student_ID\" = u.iduser inner join aspiration a on u.iduser = a.\"StudenID\" inner join speciality s on (a.speciality1 = s.name or a.speciality1 = s.\"idSpeciality\")");
    }

    foreach ($studWithSpe1List as $studWithSpe1) {
      $compList = null;
      if (env('DB_CONNECTION') == 'mysql') {
      $compList = \DB::select("select  t.idTopic,c.Name,c.idCompany,s.idSpeciality,s.name,t.content from topic t inner join company c on t.CompanyID = c.idCompany
inner join speciality s on t.SpecialityID = s.idSpeciality where s.name = ? or s.idSpeciality = ?", [$studWithSpe1->speciality1, $studWithSpe1->speciality1]);
      } else if (env('DB_CONNECTION') == 'pgsql') {
      $compList = \DB::select("select  t.\"idTopic\",c.\"Name\",c.\"idCompany\",s.\"idSpeciality\",s.name,t.content from topic t inner join company c on t.\"CompanyID\" = c.\"idCompany\"
inner join speciality s on t.\"SpecialityID\" = s.\"idSpeciality\" where s.name = ? or s.\"idSpeciality\" = ?", [$studWithSpe1->speciality1, $studWithSpe1->speciality1]);
      }

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
