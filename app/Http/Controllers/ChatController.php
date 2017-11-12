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

    public function getUserInfo($iduser) {
        $user = \DB::table('user')->where('iduser',$iduser)->first();
        $name = "";
        $avatar = 'avatar/avatar_' .$iduser.'.png';
        if ($user->role == 1) {
            //$admin = \DB::table('user')->where('iduser',$iduser)->first();
            $name = "admin";
        } else if ($user->role == 2) {
            $student = \DB::table('student')->where('Student_ID',$iduser)->first();
            $name = $student->name;
            $avatar = 'avatar/avatar_' .$student->Student_ID.'.png'; // wtfffff
//            Log::info("aaa:".$name.",".$avatar);
        } else if ($user->role == 3) {
            $collegeinstructor = \DB::table('collegeinstructor')->where('CI_ID',$iduser)->first();
            $name = $collegeinstructor->name;
        } else if ($user->role == 4) {
            $collegeintershipmanager = \DB::table('collegeintershipmanager')->where('CIM_ID',$iduser)->first();
            $name = $collegeintershipmanager->name;
        } else if ($user->role == 5) {
            $companyrepresentative = \DB::table('companyrepresentative')->where('CR_ID',$iduser)->first();
            $name = $companyrepresentative->name;
        } else if ($user->role == 6) {
            $companyinstructor = \DB::table('companyinstructor')->where('CI_ID',$iduser)->first();
            $name = $companyinstructor->name;
        }
        return ['name' => $name, 'avatar' => $avatar ];
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
                    $senderInfo = self::getUserInfo($fb->StudentID);
                    $result = $result."{";
                    $result = $result."\"id\":".$fb->idComment.",";
                    $result = $result."\"status\":\"\",";
                    $result = $result."\"header\":\"".$fb->Type."\",";
                    $result = $result."\"message\":\"".$fb->Content."\",";
                    $result = $result."\"isFeedback\":true,";
                    $result = $result."\"studentId\":".$fb->StudentID.",";
                    $result = $result."\"senderName\":\"".$senderInfo['name']."\",";
                    $result = $result."\"senderAvatar\":\"".$senderInfo['avatar']."\"";
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
                    $senderInfo = self::getUserInfo($chat->iduser_sender);
                    $result = $result."{";
                    $result = $result."\"id\":".$chat->iduser.',';
                    $result = $result."\"status\":\"".$chat->status."\",";
                    $result = $result."\"header\":\"".$chat->header."\",";
                    $result = $result."\"message\":\"".$chat->message."\",";
                    $result = $result."\"senderName\":\"".$senderInfo['name']."\",";
                    $result = $result."\"senderAvatar\":\"".$senderInfo['avatar']."\"";
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
        $userInfo = self::getUserInfo($iduser);
        Log::info($userInfo);
        $user->avatar = 'avatar/avatar_' .$user->iduser.'.png';
        $user->name = $userInfo['name'];

        if(is_null($user)){
            return view('chat', ['subdomain' => '']);
        } else {
            if ($user-> role == 1) {
                return view('chat',['users'=> $user, 'subdomain' => 'admin']);
            } else if ($user-> role == 2) {
                return view('chat',['users'=> $user, 'subdomain' => 'student']);
            } else if ($user-> role == 3) {
                return view('chat',['users'=> $user, 'subdomain' => 'collegeinstructor']);
            } else if ($user-> role == 4) {
                return view('chat',['users'=> $user, 'subdomain' => 'collegeintershipmanager']);
            } else if ($user-> role == 5) {
                return view('chat',['users'=> $user, 'subdomain' => 'companyrepresentative']);
            } else if ($user-> role == 6) {
                return view('chat',['users'=> $user, 'subdomain' => 'companyinstructor']);
            }
        }
    }
}
