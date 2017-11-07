<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

use Log;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $iduser = \Session::get('loginId');
        $sendTo = $request->sendTo;
        $subject = $request->subject;
        $content = $request->content;
        Log::info('sendTo: '.$sendTo);
        Log::info('subject: '.$subject);
        Log::info('content: '.$content);

        $userSendTo = \DB::table('user')->where('email',$sendTo)->first();
        if(is_null($userSendTo)){
            return 0;
        } else {
            \DB::table('chat')->insert(array('iduser' => $userSendTo->iduser, 'iduser_sender' => $iduser,'status' => 'unread','header' => $subject,
                'message' => $content));

            return 1;
        }
    }

    public function read(Request $request)
    {
        $iduser = \Session::get('loginId');

        $chatHistory = \DB::table('chat')->where('iduser',$iduser)->get();
        if(is_null($chatHistory)){
            return 0;
        } else {
            $result = "[";
            foreach ($chatHistory as $chat) {
                if (is_null($chat)) {
                    Log::info("null");
                } else {
            $result = $result."{";
            $result = $result."\"id\":".$chat->iduser.',';
            $result = $result."\"status\":\"".$chat->status."\",";
            $result = $result."\"header\":\"".$chat->header."\",";
            $result = $result."\"message\":\"".$chat->message."\"";
            $result = $result."},";
                }
            }
            $result = $result."{\"id\":-1,\"status\":\"...\",\"header\":\"...\",\"message\":\"...\"}]";

            return $result;
        }
    }

    public function chat(Request $request)
    {
        $iduser = \Session::get('loginId');
        $user = \DB::table('user')->where('iduser',$iduser)->first();

        if(is_null($user)){
            return view('chat', ['subdomain' => '']);
        } else {
            if ($user-> role == 6) {
                return view('chat',['users'=> $user, 'subdomain' => 'companyinstructor']);
            } else if ($user-> role == 2) {
                return view('chat',['users'=> $user, 'subdomain' => 'student']);
            }
        }

/*
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

        return 1;*/
    }
}
