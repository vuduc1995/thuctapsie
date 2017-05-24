<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

class companyinstructorController extends Controller
{
   public function showProfileCompanyinstructor(Request $request)
    {
        $userid = \Session::get('loginId');
        try {

            $user = \DB::table('companyinstructor')->where('CI_ID',$userid)->first();
            if(is_null($user)){
                return view('comp-instructor-profile');
            }else{
                     $user->id = $userid;
                   return view('comp-instructor-profile',['users'=> $user]);

                
                   
                 }
            }catch(\Exception $e){
                return view('comp-instructor-profile');
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
                

                \DB::table('companyinstructor')->where('CI_ID',$userid )->update(
             array('CI_ID' => $userid, 'name' => $fullname,'gender' => $sex,
                'address' => $Address,'email' => $email, 'description' => $description,'position' => $position));
            }catch(\Exception $e){
                return $e;
            }


        return 1;
    }

    public function mark(Request $request)
    {
        $userid = \Session::get('loginId');
        $id = $request->id;
        $generalassessment = $request->generalassessment;

        

            for ($i = 1; $i <= 21; $i++) {
                $point[$i] = $request['point'.$i]; 
                $comment[$i] = $request['comment'.$i]; 
                if($point[$i] == "") return 1;
            }

        try {


            $test = \DB::table('reportcompanyinstrutor')->where('StudentID',$id )->first();
            if(is_null($test)){

            $idContent =  \DB::table('reportdetail')->insertGetId(
             array('point1' => $point[1], 'point2' => $point[2],'point3' => $point[3],'point4' => $point[4],
                'point5' => $point[5],'point6' => $point[6], 'point7' => $point[7],'point8' => $point[8] ,  
                'point9' => $point[9],'point10' => $point[10], 'point11' => $point[11],'point12' => $point[12] , 
                'point13' => $point[13],'point14' => $point[14], 'point15' => $point[15],'point16' => $point[16] , 
                'point17' => $point[17],'point18' => $point[18], 'point19' => $point[19],'point20' => $point[20] , 
                'point21' => $point[21],'comment1' => $comment[1], 'comment2' => $comment[2],'comment3' => $comment[3] , 
                'comment4' => $comment[4],'comment5' => $comment[5], 'comment6' => $comment[6],'comment7' => $comment[7] , 
                'comment8' => $comment[8],'comment9' => $comment[9], 'comment10' => $comment[10],'comment11' => $comment[11] , 
                'comment12' => $comment[12],'comment13' => $comment[13], 'comment14' => $comment[14],'comment15' => $comment[15] , 
                'comment16' => $comment[16],'comment17' => $comment[17], 'comment18' => $comment[18],'comment19' => $comment[19] , 
                'comment20' => $comment[20],'comment21' => $comment[21],'general_assessment' => $generalassessment


                ));


            \DB::table('reportcompanyinstrutor')->insert(
             array('StudentID' => $id,'conent_report' => $idContent  ));

            }else{
                \DB::table('reportdetail')->where('idreportdetail',$test->conent_report)->update(
             array('point1' => $point[1], 'point2' => $point[2],'point3' => $point[3],'point4' => $point[4],
                'point5' => $point[5],'point6' => $point[6], 'point7' => $point[7],'point8' => $point[8] ,  
                'point9' => $point[9],'point10' => $point[10], 'point11' => $point[11],'point12' => $point[12] , 
                'point13' => $point[13],'point14' => $point[14], 'point15' => $point[15],'point16' => $point[16] , 
                'point17' => $point[17],'point18' => $point[18], 'point19' => $point[19],'point20' => $point[20] , 
                'point21' => $point[21],'comment1' => $comment[1], 'comment2' => $comment[2],'comment3' => $comment[3] , 
                'comment4' => $comment[4],'comment5' => $comment[5], 'comment6' => $comment[6],'comment7' => $comment[7] , 
                'comment8' => $comment[8],'comment9' => $comment[9], 'comment10' => $comment[10],'comment11' => $comment[11] , 
                'comment12' => $comment[12],'comment13' => $comment[13], 'comment14' => $comment[14],'comment15' => $comment[15] , 
                'comment16' => $comment[16],'comment17' => $comment[17], 'comment18' => $comment[18],'comment19' => $comment[19] , 
                'comment20' => $comment[20],'comment21' => $comment[21],'general_assessment' => $generalassessment


                ));
            }
        }catch(\Exception $e){
                return $e;
            }

        return 1;        
        

    }

     public function upOutline(Request $request)
    {
         $userid = \Session::get('loginId');
        try{
            $user = \DB::table('companyinstructor')->where('CI_ID',$userid)->first();
            $file = $request->file('file');
            $destinationPath = 'document/'. 'outline' .'/' .$user->CompanyID.'/';
            $file->move($destinationPath,$file->getClientOriginalName());
            $path = $destinationPath.$file->getClientOriginalName();
            $test = \DB::table('outline')->where('CompanyID',$user->CompanyID)->first();
           
            if(is_null($test)){
                \DB::table('outline')->insert(
             array('CompanyID' => $user->CompanyID, 'content' => $path));
            }else{
                 $id = $test->idOutline;
                \DB::table('outline')->where('idOutline',$id)->update(
             array('CompanyID' => $user->CompanyID, 'content' => $path));
            }

            return redirect('/companyinstructor/outline');

        }catch(\Exception $e){
                return $e;
            }
    }

    public function showOutline(Request $request)
    {
            $userid = \Session::get('loginId');
            try{

                $user = \DB::table('deadline')->where('type',6)->first();
                return view('comp-instructor-outline',['users'=> $user]);
            }catch(\Exception $e){
                return view('comp-instructor-outline');
            }

    }

     public function showMark($id)
    {
        try {
            $data = \DB::select("SELECT * FROM reportcompanyinstrutor,reportdetail where reportcompanyinstrutor.conent_report = reportdetail.idreportdetail and reportcompanyinstrutor.StudentID = ".$id);
              
              return view('comp-instructor-mark-2', [
                'id' => $id,'data' => $data[0] ]);

        }catch(\Exception $e){
                return $e;
            }

    }

     public function showRate($id)
    {
        try {
            $data = \DB::select("SELECT * FROM sie.rate where StudentID = ".$id);
              
              return view('comp-instructor-rate-2', [
                'id' => $id,'data' => $data[0] ]);

        }catch(\Exception $e){
                return $e;
            }

    }

    public function upRate(Request $request)
    {
         $userid = \Session::get('loginId');
         $id = $request->id;
         $content = $request->content;
         $point = $request->point;
        try{
            $user = \DB::table('rate')->where('StudentID',$id)->first();
            $data =  \DB::table('companyinstructor')->where('CI_ID',$userid)->first();
            if(is_null($user)){
                \DB::table('rate')->insert(
             array('CompanyID' => $data->CompanyID, 'StudentID' => $id,'content' => $content,'point' => $point));
            }else{
                 $idRate = $test->idRate;
                \DB::table('outline')->where('idRate',$idRate)->update(
             array('CompanyID' => $data->CompanyID, 'StudentID' => $id,'content' => $content,'point' => $point));
            }

            return 1;

        }catch(\Exception $e){
                return $e;
            }
    }

    public function showSheet($id)
    {
        try {
            // $data = \DB::select("SELECT * FROM sie.rate where StudentID = ".$id);
              
              return view('comp-instructor-sheet-2', [
                'id' => $id]);

        }catch(\Exception $e){
                return $e;
            }

    }

     public function upTimeSheet(Request $request)
    {
        try {
            $id = $request->id;
             $userid = \Session::get('loginId');
             $file = $request->file('file');
             $destinationPath = 'document/'. 'timesheet' .'/' .$userid.'/';
            $file->move($destinationPath,$file->getClientOriginalName());
            $path = $destinationPath.$file->getClientOriginalName();
             $user = \DB::table('timesheet')->where('student_id',$id)->first();
           
            if(is_null($user)){
                \DB::table('timesheet')->insert(
             array('ci_id' => $userid, 'student_id' => $id,'file' => $path));
            }else{
                \DB::table('timesheet')->where('idtimeSheet',$user->idtimeSheet)->update(
             array('ci_id' => $userid, 'student_id' => $id,'file' => $path));
            }
            return redirect('/companyinstructor/timesheet-1');
        }catch(\Exception $e){
                return $e;
            }

    }
}
