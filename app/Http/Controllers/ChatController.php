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
            \DB::table('chat')->insert(array('iduser' => $userSendTo->iduser, 'iduser_sender' => $iduser, 'status' => 'unread','header' => $subject,
                'message' => $content));

            return 1;
        }
    }

    public function getSenderInfo($iduser) {
        $user = \DB::table('user')->where('iduser',$iduser)->first();
        $senderName = "";
        $senderAvatar = 'avatar/avatar_' .$iduser.'.png';
        if ($user->role == 1) {
            //$admin = \DB::table('user')->where('iduser',$iduser)->first();
            $senderName = "admin";
        } else if ($user->role == 2) {
            $student = \DB::table('student')->where('Student_ID',$iduser)->first();
            $senderName = $student->name;
            $senderAvatar = 'avatar/avatar_' .$student->Student_ID.'.png'; // wtfffff
//            Log::info("aaa:".$senderName.",".$senderAvatar);
        } else if ($user->role == 3) {
            $collegeinstructor = \DB::table('collegeinstructor')->where('CI_ID',$iduser)->first();
            $senderName = $collegeinstructor->name;
        } else if ($user->role == 4) {
            $collegeintershipmanager = \DB::table('collegeintershipmanager')->where('CIM_ID',$iduser)->first();
            $senderName = $collegeintershipmanager->name;
        } else if ($user->role == 5) {
            $companyrepresentative = \DB::table('companyrepresentative')->where('CR_ID',$iduser)->first();
            $senderName = $companyrepresentative->name;
        } else if ($user->role == 6) {
            $companyinstructor = \DB::table('companyinstructor')->where('CI_ID',$iduser)->first();
            $senderName = $companyinstructor->name;
        }
        return ['senderName' => $senderName, 'senderAvatar' => $senderAvatar ];
    }

    public function read(Request $request)
    {
        $iduser = \Session::get('loginId');
        $result = "[";
        $user = \DB::table('user')->where('iduser',$iduser)->first();
        if (!is_null($user) && $user->role == 3) { // collegeinstructor
            $feedback = \DB::table('comment')->get();
            if (!is_null($feedback)) {
                foreach ($feedback as $fb) {
                    $result = $result."{";
                    $result = $result."\"id\":".$fb->idComment.",";
                    $result = $result."\"status\":\"\",";
                    $result = $result."\"header\":\"".$fb->Type."\",";
                    $result = $result."\"message\":\"".$fb->Content."\",";
                    $result = $result."\"isFeedback\":true,";
                    $result = $result."\"studentId\":".$fb->StudentID.",";
                    $result = $result."\"senderName\":\"".self::getSenderInfo($fb->StudentID)['senderName']."\",";
                    $result = $result."\"senderAvatar\":\"".self::getSenderInfo($fb->StudentID)['senderAvatar']."\"";
                    $result = $result."},";
                }
            }
        }



        $chatHistory = \DB::table('chat')->where('iduser',$iduser)->get();
        if(is_null($chatHistory)){
            return 0;
        } else {
            foreach ($chatHistory as $chat) {
                if (is_null($chat)) {
                    Log::info("null");
                } else {
                    $result = $result."{";
                    $result = $result."\"id\":".$chat->iduser.',';
                    $result = $result."\"status\":\"".$chat->status."\",";
                    $result = $result."\"header\":\"".$chat->header."\",";
                    $result = $result."\"message\":\"".$chat->message."\",";
                    $result = $result."\"senderName\":\"".self::getSenderInfo($chat->iduser)['senderName']."\",";
                    $result = $result."\"senderAvatar\":\"".self::getSenderInfo($chat->iduser)['senderAvatar']."\"";
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
            } else if ($user-> role == 3) {
                return view('chat',['users'=> $user, 'subdomain' => 'collegeinstructor']);
            }
        }
    }
}
