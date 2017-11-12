<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

class collegeintershipmanagerController extends Controller
{
     public function showProfileCollegeinstructor(Request $request)
    {
        $userid = \Session::get('loginId');
        try {

            $user = \DB::table('collegeintershipmanager')->where('CIM_ID',$userid)->first();
            if(is_null($user)){
               return view('col-manager-profile');
            }else{
                      $user->id = $userid;
                   return view('col-manager-profile',['users'=> $user]);

                
                   
                 }
            }catch(\Exception $e){
                 return view('col-manager-profile');
            }

        


       return view('col-manager-profile');
    }

    public function editProfile(Request $request)
    {
        $userid = \Session::get('loginId');
        $fullname = $request->name;
        $sex = $request->survey;
        $Address = $request->address;
        $email = $request->email;
        $position = $request->position;
        $description = $request->description;
        if($fullname == "" || $sex == "" || $Address == ""|| $email == ""|| $description == "" || $position == ""){
            return 0;

        }
        $img = $request->img;
        if(!is_null($img)){
        $data = explode(',', $img);
        $content = base64_decode($data[1]);
        $nameImage = "avatar_" . $userid;
        $path = public_path() . "/avatar/" . $nameImage .".png";
        file_put_contents($path, $content);
        }
        try {
                

                \DB::table('collegeintershipmanager')->where('CIM_ID',$userid )->update(
             array('CIM_ID' => $userid, 'name' => $fullname,'gender' => $sex,
                'address' => $Address,'email' => $email, 'description' => $description,'position' => $position));
            }catch(\Exception $e){
                return $e;
            }


        return 1;
    }

     public function showMatchInfo(Request $request)
    {
        $userid = \Session::get('loginId');
       
        

        try {
                
                $user = null;
                if (env('DB_CONNECTION') == 'mysql') {
                $user = \DB::select("SELECT t1.name as studentName,t1.studid as studentID,t2.Name as companyName,t3.name as specName,t5.content as topic,t4.idMatch as idMatch from student as t1,company as t2,speciality as t3,match_info as t4,topic as t5 where  t1.Student_ID = t4.StudentID and t2.idCompany = t4.CompanyID and t3.idSpeciality = t4.SpecialityID and t4.SpecialityID = t5.SpecialityID");
                } else if (env('DB_CONNECTION') == 'pgsql') {
                $user = \DB::select("SELECT t1.name as \"studentName\",t1.studid as \"studentID\",t2.\"Name\" as \"companyName\",t3.name as \"specName\",t5.content as topic,t4.\"idMatch\" as \"idMatch\" from student as t1,company as t2,speciality as t3,match_info as t4,topic as t5 where  t1.\"Student_ID\" = t4.\"StudentID\" and t2.\"idCompany\" = t4.\"CompanyID\" and t3.\"idSpeciality\" = t4.\"SpecialityID\" and t4.\"SpecialityID\" = t5.\"SpecialityID\"");
                }
                 return view('col-manager-matched-info',['users'=> $user]);
                 
            }catch(\Exception $e){
                return $e;
            }


        return 1;
    }

     public function showStatistic(Request $request)
    {
        $iduser = \Session::get('loginId');
        $user = \DB::table('collegeintershipmanager')->where('CIM_ID',$iduser)->first();
        $user->id = $iduser;
        
        try {
                
                $mark = null;
                if (env('DB_CONNECTION') == 'mysql') {
                $mark = \DB::select("select t1.name as student,t1.studid as studentNumber,t4.Name as company,t3.mid_term_mark as midpoint ,t3.final_term_mark as finalpoint from student as t1,match_info as t2,mark as t3,company as t4 where t4.idCompany = t2.CompanyID  and  t1.Student_ID = t2.StudentID and t3.StudentID = t2.StudentID");
                } else if (env('DB_CONNECTION') == 'pgsql') {
                $mark = \DB::select("select t1.name as student,t1.studid as \"studentNumber\",t4.\"Name\" as company,t3.mid_term_mark as midpoint ,t3.final_term_mark as finalpoint from student as t1,match_info as t2,mark as t3,company as t4 where t4.\"idCompany\" = t2.\"CompanyID\"  and  t1.\"Student_ID\" = t2.\"StudentID\" and t3.\"StudentID\" = t2.\"StudentID\"");
                }
                foreach ($mark as $key => $mark1) {
                
                $i = $mark1->midpoint * 0.3 + $mark1->finalpoint * 0.7;
                if($i < 4) $result = 'F';
                else if($i < 5) $result = 'D';
                else if($i < 5.5) $result = 'D+';
                else if($i < 6.5) $result = 'C';
                else if($i < 7) $result = 'C+';
                else if($i < 8) $result = 'B';
                else if($i < 8.5) $result = 'B+';
                else if($i < 9.5) $result = 'A';
                else  $result = 'A+';    
                
                $mark1->average = $result;
                }
                $array = json_decode(json_encode($mark), true);
                 return view('col-manager-statistic',['arraydata'=> $array, 'users' =>$user]);
                 
            }catch(\Exception $e){
                return $e;
            }


        return 1;
    }

    public function showSchedule(Request $request)
    {
        $userid = \Session::get('loginId');
       
        

        try {
               

             $test = array();
 

                $studWithSpe1List = null;
                if (env('DB_CONNECTION') == 'mysql') {
                $studWithSpe1List = \DB::select("SELECT t2.name as studentName,t2.studid as studentNumber,t3.Name as company,t4.name as specialityName,t1.topic as content,t2.Student_ID as iduser,t1.CompanyID as idCompany FROM match_info as t1,student as t2,company as t3 ,speciality as t4 where t1.CompanyID = t3.idCompany and t2.Student_ID = t1.StudentID and t4.idSpeciality = t1.SpecialityID  ");
                } else if (env('DB_CONNECTION') == 'pgsql') {
                $studWithSpe1List = \DB::select("SELECT t2.name as \"studentName\",t2.studid as \"studentNumber\",t3.\"Name\" as company,t4.name as \"specialityName\",t1.topic as content,t2.\"Student_ID\" as iduser,t1.\"CompanyID\" as \"idCompany\" FROM match_info as t1,student as t2,company as t3 ,speciality as t4 where t1.\"CompanyID\" = t3.\"idCompany\" and t2.\"Student_ID\" = t1.\"StudentID\" and t4.\"idSpeciality\" = t1.\"SpecialityID\"  ");
                }

                foreach ($studWithSpe1List as $studWithSpe1) {

                  $test[] = array(
                    "iduser" => $studWithSpe1->iduser,
                    "idCompany" => $studWithSpe1->idCompany,
                    "studentName" => $studWithSpe1->studentName,
                    "studentNumber" => $studWithSpe1->studentNumber,
                    "company" => $studWithSpe1->company,
                    "specialityName" => $studWithSpe1->specialityName,
                    "topics" => $studWithSpe1->content
                  );
                }
            //  }

              return view('col-manager-schedule', ['list' => $test]);
                 
            }catch(\Exception $e){
                return $e;
            }


        return 1;
    }

    public function upSchedule(Request $request)
    {
        $userid = \Session::get('loginId');
            
        

        try {
                $i = 0;
        while (true) {
            ${'topicListTime_'.$i} = $request->{'topicListTime_'.$i};
            ${'iduser_'.$i} = $request->{'iduser_'.$i};
            ${'idCompany_'.$i} = $request->{'idCompany_'.$i};

            if (${'topicListTime_'.$i} == null) {
                break;
            }


            $user = \DB::table('schedule')->where('StudentID',${'iduser_'.$i})->first();
            if (is_null($user)) {
                \DB::table('schedule')->insert(
                array('StudentID' => ${'iduser_'.$i},
                    'CollegeIntershipManagerID' => $userid,
                    'time' => ${'topicListTime_'.$i}));
            } else {
                \DB::table('schedule')->where('StudentID',$user->idSchedule )->update(
                  array('StudentID' => ${'iduser_'.$i},
                    'CollegeIntershipManagerID' => $userid,
                    'time' => ${'topicListTime_'.$i}));
            }

            $i++;
        }

                 
            }catch(\Exception $e){
                return $e;
            }


        return 1;
    }

     public function accept(Request $request)
    {
        $userid = \Session::get('loginId');
        $order = $request->order;

        $order = $request->order;
        $topicId0 = $request->topicId0;
        $topicId1 = $request->topicId1;
        $topicId2 = $request->topicId2;
        $topicId3 = $request->topicId3;
        $topicId4 = $request->topicId4;


        $topicId = null;
        if (strcmp($order, "0") == 0) {
            $topicId = $topicId0;
        }
        if (strcmp($order, "1") == 0) {
            $topicId = $topicId1;
        }
        if (strcmp($order, "2") == 0) {
            $topicId = $topicId2;
        }
        if (strcmp($order, "3") == 0) {
            $topicId = $topicId3;
        }
        if (strcmp($order, "4") == 0) {
            $topicId = $topicId4;
        }
        \DB::table('topic')->where('idTopic', $topicId)->update(  
            array(  'status' => 1));

        return "Accepted successful!";//"accept ".$order;
    }

    public function decline(Request $request)
    {
        $userid = \Session::get('loginId');
        $order = $request->order;
        $topicId0 = $request->topicId0;
        $topicId1 = $request->topicId1;
        $topicId2 = $request->topicId2;
        $topicId3 = $request->topicId3;
        $topicId4 = $request->topicId4;


        $topicId = null;
        if (strcmp($order, "0") == 0) {
            $topicId = $topicId0;
        }
        if (strcmp($order, "1") == 0) {
            $topicId = $topicId1;
        }
        if (strcmp($order, "2") == 0) {
            $topicId = $topicId2;
        }
        if (strcmp($order, "3") == 0) {
            $topicId = $topicId3;
        }
        if (strcmp($order, "4") == 0) {
            $topicId = $topicId4;
        }

        \DB::table('topic')->where('idTopic', $topicId)->update(  
            array(  'status' => 2));

        return "Declined successful!";
    }

    public function updateMatchedList(Request $request) {
        $userid = \Session::get('loginId');
        $order = $request->order;
        // $topicList_1 = $request->{'topicList_1'};
        // $topicList_2 = $request->topicList_2;
        // $topicList_3 = $request->topicList_3;
        // $topicList_4 = $request->topicList_4;

        $i = 0;
        while (true) {
            ${'topicList_'.$i} = $request->{'topicList_'.$i};
            ${'iduser_'.$i} = $request->{'iduser_'.$i};
            ${'idCompany_'.$i} = $request->{'idCompany_'.$i};
            ${'speciality_'.$i} = $request->{'speciality_'.$i};

            if (${'topicList_'.$i} == null) {
                break;
            }

            // Log::info(${'topicList_'.$i}.' vs '.${'iduser_'.$i}.' vs '.${'idCompany_'.$i}.' vs '.${'speciality_'.$i});

            $cur = null;
            if (env('DB_CONNECTION') == 'mysql') {
            $cur = \DB::select("select * from match_info where CompanyID = ? and StudentID = ?",[${'idCompany_'.$i},${'iduser_'.$i}]);
            } else if (env('DB_CONNECTION') == 'pgsql') {
            $cur = \DB::select("select * from match_info where \"CompanyID\" = ? and \"StudentID\" = ?",[${'idCompany_'.$i},${'iduser_'.$i}]);
            }
            $topic = null;
            if (env('DB_CONNECTION') == 'mysql') {
            $topic = \DB::select("select * from topic where idTopic = ?",[${'topicList_'.$i}]);
            } else if (env('DB_CONNECTION') == 'pgsql') {
            $topic = \DB::select("select * from topic where \"idTopic\" = ?",[${'topicList_'.$i}]);
            }
            if (sizeof($cur) == 0) {
                \DB::table('match_info')->insert(
                array('CompanyID' => ${'idCompany_'.$i},
                    'StudentID' => ${'iduser_'.$i},
                    'topic' => $topic[0]->content,
                    'SpecialityID' => ${'speciality_'.$i}));
            } else {
                \DB::table('match_info')->where('CompanyID',${'idCompany_'.$i} )->where('StudentID',${'iduser_'.$i} )->update(
                  array('topic' => $topic[0]->content,
                    'SpecialityID' => ${'speciality_'.$i}));
            }

            $i++;
        }
        // Log::info('end.');

        return 'Updated successful!';
    }

}
