<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

class companyrepresentativeController extends Controller
{
    public function updateTopics(Request $request)
    {
        $userId = \Session::get('loginId');

        $speciality1 = $request->speciality1;
        $topic1 = $request->topic1;
        $quantity1 = $request->quantity1;

        $speciality2 = $request->speciality2;
        $topic2 = $request->topic2;
        $quantity2 = $request->quantity2;

        $speciality3 = $request->speciality3;
        $topic3 = $request->topic3;
        $quantity3 = $request->quantity3;

        $speciality4 = $request->speciality4;
        $topic4 = $request->topic4;
        $quantity4 = $request->quantity4;

        $speciality5 = $request->speciality5;
        $topic5 = $request->topic5;
        $quantity5 = $request->quantity5;

        $comRep = \DB::select("select * from companyrepresentative where CR_ID = ? ",[$userId]);
        $comId = $comRep[0]->CompanyID; // 1 companyrepresentative - 1 company

        \DB::table('topic')
        ->where('CompanyID', $comId)->delete();

        \DB::table('topic')->insert(
         array('CompanyID' => $comId,'SpecialityID' => $speciality1, 'content' => $topic1, 'quantity' => $quantity1));
        \DB::table('topic')->insert(
         array('CompanyID' => $comId,'SpecialityID' => $speciality2, 'content' => $topic2, 'quantity' => $quantity2));
        \DB::table('topic')->insert(
         array('CompanyID' => $comId,'SpecialityID' => $speciality3, 'content' => $topic3, 'quantity' => $quantity3));
        \DB::table('topic')->insert(
         array('CompanyID' => $comId,'SpecialityID' => $speciality4, 'content' => $topic4, 'quantity' => $quantity4));
        \DB::table('topic')->insert(
         array('CompanyID' => $comId,'SpecialityID' => $speciality5, 'content' => $topic5, 'quantity' => $quantity5));

        //  \DB::table('topic')->insert(
        //  array('CompanyID' => $comId,'SpecialityID' => $speciality1, 'content' => $topic1, 'quantity' => $quantity1));
        // \DB::table('topic')->insert(
        //  array('CompanyID' => $comId,'SpecialityID' => $speciality2, 'content' => $topic2, 'quantity' => $quantity2));
        // \DB::table('topic')->insert(
        //  array('CompanyID' => $comId,'SpecialityID' => $speciality3, 'content' => $topic3, 'quantity' => $quantity3));
        // \DB::table('topic')->insert(
        //  array('CompanyID' => $comId,'SpecialityID' => $speciality4, 'content' => $topic4, 'quantity' => $quantity4));
        // \DB::table('topic')->insert(
        //  array('CompanyID' => $comId,'SpecialityID' => $speciality5, 'content' => $topic5, 'quantity' => $quantity5));



        return view('comp-representative-publish-topic-list', []);
     }

    public function registration(Request $request)
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
        \DB::table('registration')->insert(
             array('CR_ID' => $userid, 'companyname' => $compAddress,'address' => $compAddress,'comp_instructor_name' => $compInsName,
                'email' => $email,'phone' => $phoneNumber, 'quantitysutd' => $numberStudent,'speciality' => $speciality, 'requirement' => $requirement)
        );


        echo $userid;

        echo $compName . $compAddress .$compInsName .$email . $phoneNumber . $numberStudent . $speciality . $requirement;
        


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
