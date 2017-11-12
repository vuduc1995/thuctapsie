<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

use Log;

class companyrepresentativeController extends Controller
{
    public function showRegistration(Request $request)
    {

    $iduser = \Session::get('loginId');
    Log::info("id.".$iduser);
  $user = \DB::table('companyrepresentative')->where('CR_ID',$iduser)->first();
  $user->id = $iduser;
      try {

            $registration = \DB::table('registration')->where('CR_ID',$iduser)->first();
            $deadline = \DB::table('deadline')->where('type',4)->first();
            $user->deadline = $deadline->time;
            $user->companyname = $registration->companyname;
            $user->comp_instructor_name = $registration->comp_instructor_name;
            $user->quantitysutd = $registration->quantitysutd;
            $user->speciality = $registration->speciality;
            $user->requirement = $registration->requirement;
                        
            if(is_null($user)){
                return  view('comp-representative-regis',['users'=> $user]);
            }else{
                
                   return view('comp-representative-regis',['users'=> $user]);

                
                   
                 }
            }catch(\Exception $e){
               return view('comp-representative-regis',['users'=> $user]);
            }

        


        return view('comp-representative-regis',['users'=> $user]);

    }

    public function upRegistration(Request $request)
    {
        $userid = \Session::get('loginId');
        $compName = $request->compName;
        $compAddress = $request->compAddress;
        $compInsName = $request->compInsName;
        $email = $request->email;
        $phoneNumber = $request->phoneNumber;
        $numberStudent = $request->numberStudent;
        $speciality = $request->speciality;
        $requirement = $request->requirement;

        if($compName == "" || $compAddress == "" || $compInsName == ""|| $email == ""|| $phoneNumber == ""|| $numberStudent == ""|| $speciality == ""
            || $requirement == ""){
            return 0;

        }
        try {
            $user = \DB::table('registration')->where('CR_ID',$userid )->first();
          
            if(is_null($user)){
                $function = 0;
            }else{
                $function = 1; 
            }

            if($function == 0){
             \DB::table('registration')->insert(
                 array('CR_ID' => $userid, 'companyname' => $compName,'address' => $compAddress,'comp_instructor_name' => $compInsName,
                    'email' => $email,'phone' => $phoneNumber, 'quantitysutd' => $numberStudent,'speciality' => $speciality, 'requirement' => $requirement)
            );
             } else if($function == 1){
                \DB::table('registration')->where('CR_ID',$userid )->update(
                 array('CR_ID' => $userid, 'companyname' => $compName,'address' => $compAddress,'comp_instructor_name' => $compInsName,
                    'email' => $email,'phone' => $phoneNumber, 'quantitysutd' => $numberStudent,'speciality' => $speciality, 'requirement' => $requirement)
            );


             }

        }catch(\Exception $e){
                return 0;
            } 

            return 1;
    }

   public function showProfileCompanyrepresentative(Request $request)
    {
        $userid = \Session::get('loginId');
        try {

            $user = \DB::table('companyrepresentative')->where('CR_ID',$userid)->first();
            if(is_null($user)){
                return view('comp-representative-profile');
            }else{
                     $user->id = $userid;
                   return view('comp-representative-profile',['users'=> $user]);

                
                   
                 }
            }catch(\Exception $e){
                return view('comp-representative-profile');
            }

        


       return view('comp-representative-profile');
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
                

                \DB::table('companyrepresentative')->where('CR_ID',$userid )->update(
             array('CR_ID' => $userid, 'name' => $fullname,'gender' => $sex,
                'address' => $Address,'email' => $email, 'description' => $description,'position' => $position));
            }catch(\Exception $e){
                return $e;
            }


        return 1;
    }

    public function upTopic(Request $request)
    {
        $userid = \Session::get('loginId');
        $user = \DB::table('companyrepresentative')->where('CR_ID',$userid )->first();
        $companyID = $user->CompanyID;

         for ($i = 1; $i <= 5; $i++) {
                $speciality[$i] = $request['speciality'.$i]; 
                $topic[$i] = $request['topic'.$i]; 
                $quantity[$i] = $request['quantity'.$i];
            }
        try {
            $allTopicHave = \DB::table('topic')->where('CompanyID',$companyID )->get();

            if(sizeof($allTopicHave) >= 5){
                 for ($i = 1; $i <= 5; $i++) {
                        \DB::table('topic')->where('idTopic',$allTopicHave[$i-1]->idTopic )->update(
                 array('idTopic' => $allTopicHave[$i-1]->idTopic, 'SpecialityID' => $speciality[$i],'CompanyID' => $companyID,'content' => $topic[$i],
                    'quantity' => $quantity[$i],'quantityLeft' => $quantity[$i])
            );
                    }

            }else{
                        
                  

                        for ($i = 1; $i <= sizeof($allTopicHave); $i++) {

                                \DB::table('topic')->where('idTopic',$allTopicHave[$i-1]->idTopic )->update(
                         array('idTopic' => $allTopicHave[$i-1]->idTopic, 'SpecialityID' => $speciality[$i],'CompanyID' => $companyID,'content' => $topic[$i],
                            'quantity' => $quantity[$i],'quantityLeft' => $quantity[$i])
                    );
                                }
                                for ($i = sizeof($allTopicHave)+1; $i <= 5; $i++) {
                                    
                                \DB::table('topic')->insert(
                         array( 'SpecialityID' => $speciality[$i],'CompanyID' => $companyID,'content' => $topic[$i],
                            'quantity' => $quantity[$i],'quantityLeft' => $quantity[$i])
                    );
                         
                    }

                   
                 }

        }catch(\Exception $e){
                return $e;
            } 
            return 1;
    }

      public function showTopic(Request $request)
    {
        try{
            $userid = \Session::get('loginId');
            $data = \DB::table('companyrepresentative')->where('CR_ID',$userid )->first();
            $user = \DB::table('topic')->where('CompanyID',$data->CompanyID )->get();
            $deadline = \DB::table('deadline')->where('type',5)->first();
            $total = count((array)$user);
            $deadline->numberLine = $total;
            $user->status = 
            if($total == 0){
            }
            if(is_null($user)){
                return  view('comp-representative-publish-topic-list');
            }else{
                
                   return view('comp-representative-publish-topic-list',['users'=> $user,'deadline' => $deadline]);

                
                   
                 }

         }catch(\Exception $e){
                return $e;
            } 
    }
}
