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

  foreach ($students as $student) {
    // map spe 1
    $studWithSpe1List = \DB::select("select u.iduser,st.name,st.studid,a.speciality1 from user u inner join student st on st.Student_ID = u.iduser inner join aspiration a on u.iduser = a.StudenID inner join speciality s on a.speciality1 = s.name");

    foreach ($studWithSpe1List as $studWithSpe1) {
      $compList = \DB::select("select c.Name,s.name,t.content from topic t inner join company c on t.CompanyID = c.idCompany
inner join speciality s on t.SpecialityID = s.idSpeciality where s.name = ?", [$studWithSpe1->speciality1]);

      $small = array();
      $companyName = "";
      $speciality = "";

      foreach ($compList as $compTopic) {
        $v1 = $compTopic->Name;
        $v2 = $compTopic->name;
        $v3 = $compTopic->content;

        $companyName = $v1;
        $speciality = $v2;

        $small[] = $compTopic;//$v1.$v2.$v3;
      }

      $test[] = array(
        "id" => 1,
        "studentName" => $studWithSpe1->name,
        "studentNumber" => $studWithSpe1->studid,
        "company" => $companyName,
        "speciality" => $speciality,
        "list" => $small
        );
    }
  }

  return view('col-manager-matched-list', ['test' => $test]);
});

Route::get('/collegeintershipmanager/edit-profile', function () {
   return view('col-manager-profile');
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

Route::get('/companyinstructor', function () {
   return view('comp-instructor-home');
});

Route::get('/companyinstructor/mark', function () {
   return view('comp-instructor-mark');
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
