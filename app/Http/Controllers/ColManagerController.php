<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

use Log;

class ColManagerController extends Controller
{
    public function updateMatchedList(Request $request) {
        $userid = \Session::get('loginId');
        $order = $request->order;
        // $topicList_1 = $request->{'topicList_1'};
        // $topicList_2 = $request->topicList_2;
        // $topicList_3 = $request->topicList_3;
        // $topicList_4 = $request->topicList_4;

        $i = 0;
        while (true) {
            ${'topicList_'.$i} = $request->{'topicList_'.$i};
            ${'iduser_'.$i} = $request->{'iduser_'.$i};
            ${'idCompany_'.$i} = $request->{'idCompany_'.$i};
            ${'speciality_'.$i} = $request->{'speciality_'.$i};

            if (${'topicList_'.$i} == null) {
                break;
            }

            Log::info(${'topicList_'.$i}.' vs '.${'iduser_'.$i}.' vs '.${'idCompany_'.$i}.' vs '.${'speciality_'.$i});

            $cur = \DB::select("select * from match_info where CompanyID = ? and StudentID = ?",[${'idCompany_'.$i},${'iduser_'.$i}]);
            $topic = \DB::select("select * from topic where idTopic = ?",[${'topicList_'.$i}]);
            if (sizeof($cur) == 0) {
                \DB::table('match_info')->insert(
                array('CompanyID' => ${'idCompany_'.$i},
                    'StudentID' => ${'iduser_'.$i},
                    'topic' => $topic[0]->content,
                    'SpecialityID' => ${'speciality_'.$i}));
            } else {
                \DB::table('match_info')->where('CompanyID',${'idCompany_'.$i} )->where('StudentID',${'iduser_'.$i} )->update(
                  array('topic' => $topic[0]->content,
                    'SpecialityID' => ${'speciality_'.$i}));
            }

            $i++;
        }
        Log::info('end.');

        return 'Updated successful!';
    }

    public function accept(Request $request)
    {
        $userid = \Session::get('loginId');
        $order = $request->order;

        return "Accepted successful!";//"accept ".$order;
    }

    public function decline(Request $request)
    {
        $userid = \Session::get('loginId');
        $order = $request->order;
        $topicId0 = $request->topicId0;
        $topicId1 = $request->topicId1;
        $topicId2 = $request->topicId2;
        $topicId3 = $request->topicId3;
        $topicId4 = $request->topicId4;


        $topicId = null;
        if (strcmp($order, "0") == 0) {
            $topicId = $topicId0;
        }
        if (strcmp($order, "1") == 0) {
            $topicId = $topicId1;
        }
        if (strcmp($order, "2") == 0) {
            $topicId = $topicId2;
        }
        if (strcmp($order, "3") == 0) {
            $topicId = $topicId3;
        }
        if (strcmp($order, "4") == 0) {
            $topicId = $topicId4;
        }

        \DB::table('topic')->where('idTopic', $topicId)->delete();

        return "Declined successful!";
    }
}
