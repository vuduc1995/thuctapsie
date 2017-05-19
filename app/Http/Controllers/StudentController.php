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
        $topic1 = $request->topic1;
        $topic2 = $request->topic2;
        $topic3 = $request->topic3;
        $companyname = $request->companyname;
        $companyaddress = $request->companyaddress;
        $instructor = $request->instructor;
        $insphonenumber = $request->insphonenumber;
        $insemail = $request->insemail;
         if($fullname == "" || $class == "" || $sex == ""|| $StudentNumber == ""|| $Address == ""|| $phonenumber == ""|| $email == ""
            || $Certification == ""|| $laptop == ""|| $Point == "" || $skillsHave == "" || $skillsRequire == "" ){
            return "err 1";

        }

        if(is_null($companyname) || is_null($companyaddress) || is_null($instructor) || is_null($insphonenumber) || is_null($insemail)){
            $compHave = 0;
        }else{
            $compHave = 1;
        }

            $user = \DB::table('aspiration')->where('StudenID',$userid )->first();
          
            if(is_null($user)){
                $function = 0;
            }else{
                $function = 1; 
            }

        try {
            if($function == 0){
            \DB::table('aspiration')->insert(
             array('StudenID' => $userid, 'fullname' => $fullname,'class' => $class,'gender' => $sex,'laptop' => $laptop,
                'studnumber' => $StudentNumber,'address' => $Address, 'phone' => $phonenumber,'email' => $email, 'language_certification' => $Certification,
                'language_point' => $Point,'stud_own_skill' => $skillsHave,'stud_learn_skill' => $skillsRequire,'speciality1' => $topic1,
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
                return "err 3";
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
        if($fullname == "" || $sex == "" || $StudentNumber == ""|| $Address == ""|| $email == ""|| $description == ""){
            return 0;

        }
       
        try {
                

                \DB::table('student')->where('Student_ID',$userid )->update(
             array('Student_ID' => $userid, 'name' => $fullname,'gender' => $sex,
                'studid' => $StudentNumber,'address' => $Address,'email' => $email, 'description' => $description));
            }catch(\Exception $e){
                return 0;
            }


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
                if($function == 0){
                     \DB::table('comment')->insert(
                      array('StudentID' => $userid, 'Type' => $subject,'Content' => $content));
                }elseif($function == 1)
                    {
                    \DB::table('comment')->where('StudentID',$userid )->update(
                      array('StudentID' => $userid, 'Type' => $subject,'Content' => $content));
                     }
            }catch(\Exception $e){
                return 0;
            }


        return 1;
    }


     public function showCvStudent(Request $request)
    {
        $userid = \Session::get('loginId');
        try {
            $user = \DB::table('cv')->where('idStudent',$userid )->first();
          
            if(is_null($user)){
                return view('stud-manage-cv');
            }else{
                
                   return view('stud-manage-cv');

                
                   
                 }
            }catch(\Exception $e){
                return view('stud-manage-cv');
            }

        


        return view('stud-manage-cv');
    }
   
}
