<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

class adminController extends Controller
{
    public function matchInfo(Request $request){
        try {
        $allStudentDone = \DB::table('aspiration')->get();
        $allTopic = \DB::table('topic')->get();
        for($i = 0; $i < sizeof($allStudentDone);$i++){
            $checkDone = \DB::table('match_info')->where('StudentID',$allStudentDone[$i]->StudenID)->first();
            if(is_null($checkDone)){
            $check1 = true;
            while($check1){
                $j = 1;
                $index = 'speciality'.$j;
                $tempSpec = $allStudentDone[$i]->$index;
                $check = true;
                $count = 1;
                while($check){
                    if($tempSpec == $allTopic[$count]->SpecialityID){
                        if($allTopic[$count]->quantityLeft > 0){
                        $companyID =  $allTopic[$count]->CompanyID;
                        $studentID = $allStudentDone[$i]->StudenID;
                        $idTopic = $allTopic[$count]->idTopic;
                        $specialityID =  $allTopic[$count]->SpecialityID;
                        \DB::table('match_info')->insert(
                             array('CompanyID' => $companyID, 'StudentID' => $studentID,'SpecialityID' => $specialityID ));
                        \DB::table('topic')->where('idTopic',$idTopic )->update(
                             array('quantityLeft' => $allTopic[$count]->quantityLeft - 1 ));
                        $check1 = false;
                        $check = false;

                        }
                                    }
                    if($count == sizeof($allTopic)){
                        $check1 = false;
                        break;
                    }
                    $count++;
                    
                }
                if($j >=3) break;
                $j++;
            }
            }
        }
         }catch(\Exception $e){
                return $e;
            } 
      return 1;
   }
   public function showMark(Request $request){
        try {

            $mark = \DB::select("select t1.name as student,t1.studid as studentNumber,t4.Name as company,t3.mid_term_mark as midpoint ,t3.final_term_mark as finalpoint,t1.Student_ID as iduser from student as t1,match_info as t2,mark as t3,company as t4 where t4.idCompany = t2.CompanyID  and  t1.Student_ID = t2.StudentID and t3.StudentID = t2.StudentID");
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
                
                   return view('admin-manage-mark',['users'=> $array]);

                
                   
            }catch(\Exception $e){
               return $e;
            }

        


        return view('stud-manage-cv');

   }

   public function upMark(Request $request){
        try {

             $i = 0;
             while (true) {
            ${'iduser_'.$i} = $request->{'iduser_'.$i};
            ${'midpoint_'.$i} = $request->{'midpoint_'.$i};
            ${'finalpoint_'.$i} = $request->{'finalpoint_'.$i};
            if (${'iduser_'.$i} == null) {
                break;
            };
                \DB::table('mark')->where('StudentID',${'iduser_'.$i} )->update(
                  array('StudentID' => ${'iduser_'.$i},
                    'mid_term_mark' => ${'midpoint_'.$i},
                    'final_term_mark' => ${'finalpoint_'.$i}));

            $i++;
        }
            return 1;    
                   
            }catch(\Exception $e){
               return $e;
            }

        



   }

   public function showUser(Request $request){
        try {
              $users = \DB::select("select * from user where role != 1");
                
                $array = json_decode(json_encode($users), true);
                
                   return view('admin-manage-user',['users'=> $array]);



            }catch(\Exception $e){
               return $e;
            }

        



   }


   public function upUser(Request $request){
        try {

             $i = 0;
             while (true) {
            ${'iduser_'.$i} = $request->{'iduser_'.$i};
            ${'email_'.$i} = $request->{'email_'.$i};
            ${'password_'.$i} = $request->{'password_'.$i};
             ${'role_'.$i} = $request->{'role_'.$i};
            if (${'iduser_'.$i} == null) {
                break;
            };
                \DB::table('user')->where('iduser',${'iduser_'.$i} )->update(
                  array('email' =>  ${'email_'.$i} ,
                    'password' => ${'password_'.$i},
                    'role' =>  ${'role_'.$i} ));

            $i++;
        }
            return 1;    
                   
            }catch(\Exception $e){
               return $e;
            }

        



   }

   public function upAddUser(Request $request){
        try {

            $email = $request->email;
            $password = $request->password;
            $role = $request->role;
            $user = \DB::table('user')->where('email',$email)->first();
            if(is_null($user)){
                \DB::table('user')->insert(
                  array('email' =>  $email ,
                    'password' => $password,
                    'role' =>  $role));
            }else{
                return 0;
            }

            return 1;    
                   
            }catch(\Exception $e){
               return $e;
            }

        



   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
