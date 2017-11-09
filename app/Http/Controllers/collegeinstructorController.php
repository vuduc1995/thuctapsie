<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

class collegeinstructorController extends Controller
{


     public function showProfileCollegeinstructor(Request $request)
    {
        $userid = \Session::get('loginId');
        try {

            $user = \DB::table('collegeinstructor')->where('CI_ID',$userid)->first();
            if(is_null($user)){
                return view('col-instructor-profile');
            }else{
                      $user->id = $userid;
                   return view('col-instructor-profile',['users'=> $user]);

                
                   
                 }
            }catch(\Exception $e){
                 return  view('col-instructor-profile');
            }

        


       return   view('col-instructor-profile');
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
                

                \DB::table('collegeinstructor')->where('CI_ID',$userid )->update(
             array('CI_ID' => $userid, 'name' => $fullname,'gender' => $sex,
                'address' => $Address,'email' => $email, 'description' => $description,'position' => $position));
            }catch(\Exception $e){
                return $e;
            }


        return 1;
    }

    public function upMark(Request $request)
    {
         try {
             $userid = \Session::get('loginId');
             $id = $request->id;
             $midtermMark = $request->Topic1;
             $finaltermMark = $request->Topic2;
             return $id . $midtermMark . $finaltermMark;
            }catch(\Exception $e){
                return $e;
            }

    }

    public function showMark($id)
    {
        try {
          $iduser = \Session::get('loginId');
          $user = \DB::table('collegeinstructor')->where('CI_ID',$iduser)->first();
          $user->id = $iduser;

            $student = \DB::table('student')->where('id',$id )->first();
              $reports = \DB::table('report')->where('StudentID',$id)->get();;
              $total = count((array)$reports);
              $midtermReport = '';
              $finalTermReport = '';
              if($total == 2){
                foreach($reports as $report){
                    if($report->Type ==1){
                        $midtermReport = $report->file;
                    }else{
                        $finalTermReport = $report->file;
                    }
                }
              }else if($total ==1){
                 if($report->Type ==1){
                        $midtermReport = $report->file;
                    }else{
                        $finalTermReport = $report->file;
                    }
              }
              return view('col-instructor-mark-2', ['student' => $student, 
                'id' => $id ,'midReport' => $midtermReport ,'finalReport' => $finalTermReport,'users'=> $user]);

        }catch(\Exception $e){
                return $e;
            }

    }
}
