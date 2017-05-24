<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;


class LogInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkLogin(Request $request){

      $email = $request->email;
      $password = $request->password;
      

      $users = null;
        if (env('DB_CONNECTION') == 'mysql') {
      $users = \DB::select("select * from user where email = ? and password = ? ",[$email,$password]);
        } else if (env('DB_CONNECTION') == 'pgsql') {
      $users = \DB::select("select * from \"user\" where email = ? and password = ? ",[$email,$password]);
        }
      if(sizeof($users)!=0){
        $role = $users[0]->role;
        $iduser = $users[0]->iduser;

        \Session::set('loginRole', $role);
        \Session::set('loginId', $iduser);

        if($role == 1){
            return  redirect('/admin');
        }else if($role == 2){
            return  redirect('/student');
        }else if($role == 3){
            return  redirect('/collegeinstructor');
        }else if($role == 4){
            return  redirect('/collegeintershipmanager');
        }else if($role == 5){
            return  redirect('/companyrepresentative');
        }else if($role == 6){
            return  redirect('/companyinstructor');
        }

      }else {
        echo "<script>alert('Wrong User or password!');</script>";
        return redirect('/');
      }
 
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
