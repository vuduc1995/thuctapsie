<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

use Log;

class StudentController extends Controller
{
    
    public function registration(Request $request)
    {
        $userid = \Session::get('loginId');
        $fullname = $request->fullname;
        $class = $request->class;
        $sex = $request->survey;
        $laptop = $request->check;
        $StudentNumber = $request->StudentNumber;
        $Address = $request->Address;
        $phonenumber = $request->phonenumber;
        $email = $request->email;
        $Certification = $request->Certification;
        $Point = $request->Point;
        $skillsHave = $request->skillsHave;
        $skillsRequire = $request->skillsRequire;
        $topic1 = $request->speciality1;
        $topic2 = $request->speciality2;
        $topic3 = $request->speciality3;
        $companyname = $request->companyname;
        $companyaddress = $request->companyaddress;
        $instructor = $request->instructor;
        $insphonenumber = $request->insphonenumber;
        $insemail = $request->insemail;
         if($fullname == "" || $class == "" || $sex == ""|| $StudentNumber == ""|| $Address == ""|| $phonenumber == ""|| $email == ""
            || $Certification == ""|| $laptop == ""|| $Point == "" || $skillsHave == "" || $skillsRequire == "" ){
            return 0;

        }

        if(is_null($companyname) || is_null($companyaddress) || is_null($instructor) || is_null($insphonenumber) || is_null($insemail)){
            $compHave = 0;
        }else{
            $compHave = 1;
        }
        try {
            $user = \DB::table('aspiration')->where('StudenID',$userid )->first();
          
            if(is_null($user)){
                $function = 0;
            }else{
                $function = 1; 
            }
            }catch(\Exception $e){
                return 0;
            }

        try {
            if($function == 0){
            \DB::table('aspiration')->insert(
             array('StudenID' => $userid, 'fullname' => $fullname,'class' => $class,'gender' => $sex,'laptop' => $laptop,
                'studnumber' => $StudentNumber,'address' => $Address, 'phone' => $phonenumber,'email' => $email, 'language-certification' => $Certification,
                'language-point' => $Point,'stud-own-skill' => $skillsHave,'stud-learn-skill' => $skillsRequire,'speciality1' => $topic1,
                'speciality2' => $topic2,'speciality3' => $topic3,'compHave' => $compHave,'compName' => $companyname,'compAdderss' => $companyaddress,'compInstructor' => $instructor,
                'compPhone' => $insphonenumber, 'compEmail' => $insemail ));
             }elseif($function ==1){
                \DB::table('aspiration')->where('StudenID',$userid )->update(
             array('StudenID' => $userid, 'fullname' => $fullname,'class' => $class,'gender' => $sex,'laptop' => $laptop,
                'studnumber' => $StudentNumber,'address' => $Address, 'phone' => $phonenumber,'email' => $email, 'language_certification' => $Certification,
                'language_point' => $Point,'stud_own_skill' => $skillsHave,'stud_learn_skill' => $skillsRequire,'speciality1' => $topic1,
                'speciality2' => $topic2,'speciality3' => $topic3,'compHave' => $compHave,'compName' => $companyname,'compAdderss' => $companyaddress,'compInstructor' => $instructor,
                'compPhone' => $insphonenumber, 'compEmail' => $insemail ));

             }
            }catch(\Exception $e){
                return $e;
            }


        return 1;
        // echo $userid;

        // echo $fullname . $class .$sex .$laptop . $StudentNumber . $Address . $phonenumber . $email . $Certification 
        // . $Point . $skillsHave . $skillsRequire .$topic1 .$topic2 .$topic3 .$companyname . $companyaddress . $instructor . $insphonenumber . $insemail;
        


    }

    public function upCV(Request $request)
    {
        $userid = \Session::get('loginId');
        $fullname = $request->fullname;
        $class = $request->class;
        $sex = $request->survey;
        $StudentNumber = $request->stdnumber;
        $Address = $request->address;
        $phonenumber = $request->phonenumber;
        $email = $request->email;
        $Certification = $request->certification;
        $skills = $request->skills;
        $experience = $request->experience;
        
        if($fullname == "" || $class == "" || $sex == ""|| $StudentNumber == ""|| $Address == ""|| $phonenumber == ""|| $email == ""
            || $Certification == ""|| $skills == ""|| $experience == ""){
            return 0;

        }
        try {
            $user = \DB::table('cv')->where('idStudent',$userid )->first();
          
            if(is_null($user)){
                $function = 0;
            }else{
                $function = 1; 
            }
            }catch(\Exception $e){
                return 0;
            }
        try {
            if($function == 0){
            \DB::table('cv')->insert(
             array('idStudent' => $userid, 'fullname' => $fullname,'class' => $class,'gender' => $sex,
                'stdid' => $StudentNumber,'address' => $Address, 'phone' => $phonenumber,'email' => $email, 'foreignLanguage' => $Certification,
                'skills' => $skills, 'experience' => $experience ));
            }elseif($function == 1){

                \DB::table('cv')->where('idStudent',$userid )->update(
             array('idStudent' => $userid, 'fullname' => $fullname,'class' => $class,'gender' => $sex,
                'stdid' => $StudentNumber,'address' => $Address, 'phone' => $phonenumber,'email' => $email, 'foreignLanguage' => $Certification,
                'skills' => $skills, 'experience' => $experience ));
            }
            }catch(\Exception $e){
                return 0;
            }


        return 1;
        // echo $userid;

        // echo $fullname . $class .$sex .$laptop . $StudentNumber . $Address . $phonenumber . $email . $Certification 
        // . $Point . $skillsHave . $skillsRequire .$topic1 .$topic2 .$topic3 .$companyname . $companyaddress . $instructor . $insphonenumber . $insemail;
        


    }
    public function editProfile(Request $request)
    {
        $userid = \Session::get('loginId');
        $fullname = $request->fullname;
        $sex = $request->survey;
        $StudentNumber = $request->stdnumber;
        $Address = $request->address;
        $email = $request->email;
        $description = $request->description;
        $img = $request->img;
        if($fullname == "" || $sex == "" || $StudentNumber == ""|| $Address == ""|| $email == ""|| $description == ""){
            return 0;

        }
        $data = explode(',', $img);
           if(!is_null($img)){
        $data = explode(',', $img);
        $content = base64_decode($data[1]);
        $nameImage = "avatar_" . $userid;
        $path = public_path() . "/avatar/" . $nameImage .".png";
        file_put_contents($path, $content);
        }
        // try {

                \DB::table('student')->where('Student_ID',$userid )->update(
             array('Student_ID' => $userid, 'name' => $fullname,'gender' => $sex,
                'studid' => $StudentNumber,'address' => $Address,'email' => $email, 'description' => $description));
            // }catch(\Exception $e){
            //     return 0;
            // }


        return 1;
    }
     public function feedback(Request $request)
    {
        $userid = \Session::get('loginId');
        $subject = $request->subject;
        $content = $request->content;
       
        if($subject == "" || $content == "" ){
            return 0;

        }
        try {
            $user = \DB::table('comment')->where('StudentID',$userid )->first();
          
            if(is_null($user)){
                $function = 0;
            }else{
                $function = 1; 
            }
            }catch(\Exception $e){
                return 0;
            }
        try {
                // if($function == 0){
                     \DB::table('comment')->insert(
                      array('StudentID' => $userid, 'Type' => $subject,'Content' => $content));
                // }elseif($function == 1)
                //     {
                //     \DB::table('comment')->where('StudentID',$userid )->update(
                //       array('StudentID' => $userid, 'Type' => $subject,'Content' => $content));
                //      }
            }catch(\Exception $e){
                return 0;
            }


        return 1;
    }

    public function showCvStudent(Request $request)
    {
        $iduser = \Session::get('loginId');
        $user = \DB::table('student')->where('Student_ID',$iduser)->first();
        $user->id = $iduser;

        Log::info("Test:".$iduser);
        Log::info("Test2:".$user->id);

        try {
            $userData = \DB::table('cv')->where('idStudent',$iduser)->first();
            if(is_null($userData)){
                return view('stud-manage-cv',['users' => $user]);
            } else {
                return view('stud-manage-cv',['userData'=> $userData, 'users' => $user]);
            }
        }catch(\Exception $e){
            return view('stud-manage-cv',['users' => $user]);
        }
        return view('stud-manage-cv',['users' => $user]);
    }

    public function showRegistStudent(Request $request) {
        $iduser = \Session::get('loginId');
        $user = \DB::table('student')->where('Student_ID',$iduser)->first();
        $user->id = $iduser;

        try {
            $userData = \DB::table('aspiration')->where('StudenID',$iduser)->first();
            $deadline = \DB::table('deadline')->where('type',1)->first();
            $userData->deadline = $deadline->time;
            if(is_null($userData)){
                return view('stud-regist');
            }else{
                return view('stud-regist',['userData'=> $userData, 'users' => $user]);
            }
        }catch(\Exception $e){
            return view('stud-regist');
        }
        return view('stud-regist');
    }

    public function showProfileStudent(Request $request)
    {
        $userid = \Session::get('loginId');
        try {

            $user = \DB::table('student')->where('Student_ID',$userid)->first();
            if(is_null($user)){
                return  view('stud-home-profile');
            }else{
                    $user->id = $userid;
                   return view('stud-home-profile',['users'=> $user]);

                
                   
                 }
            }catch(\Exception $e){
               return view('stud-home-profile');
            }
        return view('stud-home-profile');
    }

    public function showMarkStudent(Request $request) {
        $iduser = \Session::get('loginId');
        $user = \DB::table('student')->where('Student_ID',$iduser)->first();
        $user->id = $iduser;
        $user->midtermmark = "";
        $user->finaltermark = "";
        $user->average = "";
        $user->status = "";

        try {

            if(is_null($user)){
                return  view('stud-mark');
            }else{
                $mark = \DB::table('mark')->where('StudentID',$user->Student_ID)->first();
                if (!is_null($mark)) {
                    $user->midtermmark = $mark->mid_term_mark;
                    $user->finaltermark = $mark->final_term_mark;

                    $i = $mark->mid_term_mark * 0.3 + $mark->final_term_mark * 0.7;
                    if($i < 4) $result = 'F';
                    else if($i < 5) $result = 'D';
                    else if($i < 5.5) $result = 'D+';
                    else if($i < 6.5) $result = 'C';
                    else if($i < 7) $result = 'C+';
                    else if($i < 8) $result = 'B';
                    else if($i < 8.5) $result = 'B+';
                    else if($i < 9.5) $result = 'A';
                    else  $result = 'A+';    

                    $user->average = $result;
                    return view('stud-mark',['users'=> $user]);
                }
            }
        }catch(\Exception $e){
            return $e;
        }
        return view('stud-mark',['users'=> $user]);
    }

    public function showStatusStudent(Request $request) {
        $iduser = \Session::get('loginId');
        $user = \DB::table('student')->where('Student_ID',$iduser)->first();
        $user->id = $iduser;
        $user->midtermmark = "";
        $user->finaltermark = "";
        $user->average = "";
        $user->status = "";
        try {
            if(is_null($user)){
            return  view('stud-status',['users'=> $user]);
            }else{
                $mark = \DB::table('mark')->where('StudentID',$user->Student_ID)->first();
                if (!is_null($mark)) {
                    $user->midtermmark = $mark->mid_term_mark;
                    $user->finaltermark = $mark->final_term_mark;

                    $i = $mark->mid_term_mark * 0.3 + $mark->final_term_mark * 0.7;
                    if($i < 4) $result = 'F';
                    else if($i < 5) $result = 'D';
                    else if($i < 5.5) $result = 'D+';
                    else if($i < 6.5) $result = 'C';
                    else if($i < 7) $result = 'C+';
                    else if($i < 8) $result = 'B';
                    else if($i < 8.5) $result = 'B+';
                    else if($i < 9.5) $result = 'A';
                    else  $result = 'A+';    
                    if($i >= 4) $status = "Pass";
                    else $status = "Not Pass";
                    $user->average = $result;
                    $user->status = $status;
                    return view('stud-status',['users'=> $user]);
                }
            }
        }catch(\Exception $e){
            return  view('stud-status',['users'=> $user]);
        }
        return view('stud-status',['users'=> $user]);
    }
    
    public function showTopicList(Request $request)
    {   try{

        $userData = null;
        if (env('DB_CONNECTION') == 'mysql') {
        $userData = \DB::select("SELECT t1.idTopic,t1.content as topic,t2.Name as company,t3.name as speciality FROM topic as t1,company as t2,speciality as t3 where t1.SpecialityID = t3.idSpeciality and t2.idCompany = t1.CompanyID ");
        } else if (env('DB_CONNECTION') == 'pgsql') {
        $userData = \DB::select("SELECT t1.\"idTopic\",t1.content as topic,t2.\"Name\" as company,t3.name as speciality FROM topic as t1,company as t2,speciality as t3 where t1.\"SpecialityID\" = t3.\"idSpeciality\" and t2.\"idCompany\" = t1.\"CompanyID\" ");
        }

          $iduser = \Session::get('loginId');
            $student = \DB::table('student')->where('Student_ID',$iduser )->first();
        $student->id = $iduser;

        return view('stud-topic',['users'=> $student, 'userData' => $userData]);
         }catch(\Exception $e){
               return  view('stud-topic');
            }
    }

    public function showReport(Request $request) {  
        $iduser = \Session::get('loginId');
        $user = \DB::table('student')->where('Student_ID',$iduser)->first();
        $user->id = $iduser;
        try{
            $userData = \DB::table('deadline')->where('type',2)->first();
            $userData->deadline = $userData->time;
            return view('stud-report',['userData'=> $userData, 'users' => $user]);
        }catch(\Exception $e){
            return view('stud-report',['users' => $user]);
        }
    }
    
     public function updateReport(Request $request)
    {  
        $userid = \Session::get('loginId');
         try{
            $file = $request->file('file');
            $content = $request->content;
            $type = $request->type;
            if($type==1){
                $typeFoler ="midterm";
            }else if($type==2){
                $typeFoler ="finalterm";
            }
            $destinationPath = 'document/'. $typeFoler .'/' .$userid.'/';
            $file->move($destinationPath,$file->getClientOriginalName());
            $path = $destinationPath.$file->getClientOriginalName();
            $user = \DB::table('report')->where('StudentID',$userid)->where('Type',$type)->first();
           
            if(is_null($user)){
                \DB::table('report')->insert(
             array('StudentID' => $userid, 'Type' => $type,'Content' => $content,'file' => $path));
            }else{
                 $id = $user->idReport;
                \DB::table('report')->where('idReport',$id)->update(
             array('StudentID' => $userid, 'Type' => $type,'Content' => $content,'file' => $path));
            }

        }catch(\Exception $e){
               return  $e;
            }
          return redirect('/student/report');

        }
}
