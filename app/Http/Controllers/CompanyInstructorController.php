<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

use Log;

class CompanyInstructorController extends Controller
{
    public function updateReport(Request $request) {
        $userid = \Session::get('loginId');
        $studentId = $request->studentId;
        for ($i = 1; $i <= 7; $i++) {
            ${'point_TTL_'.$i} = $request->{'point_TTL_'.$i};
            ${'cmt_TTL_'.$i} = $request->{'cmt_TTL_'.$i};
        }
        for ($i = 1; $i <= 6; $i++) {
            ${'point_WHBF_'.$i} = $request->{'point_WHBF_'.$i};
            ${'cmt_WHBF_'.$i} = $request->{'cmt_WHBF_'.$i};
        }

        $topic = \DB::select("select * from reportdetail where StudentID = ?",[$studentId]);

        if (sizeof($topic) == 0) {
            $tp = 'TTL';
            \DB::table('reportdetail')->insert(
            array('StudentID' => $studentId,
                'point_'.$tp.'_1' => ${'point_'.$tp.'_1'},'cmt_'.$tp.'_1' => ${'cmt_'.$tp.'_1'},
                'point_'.$tp.'_2' => ${'point_'.$tp.'_2'},'cmt_'.$tp.'_2' => ${'cmt_'.$tp.'_2'},
                'point_'.$tp.'_3' => ${'point_'.$tp.'_3'},'cmt_'.$tp.'_3' => ${'cmt_'.$tp.'_3'},
                'point_'.$tp.'_4' => ${'point_'.$tp.'_4'},'cmt_'.$tp.'_4' => ${'cmt_'.$tp.'_4'},
                'point_'.$tp.'_5' => ${'point_'.$tp.'_5'},'cmt_'.$tp.'_5' => ${'cmt_'.$tp.'_5'},
                'point_'.$tp.'_6' => ${'point_'.$tp.'_6'},'cmt_'.$tp.'_6' => ${'cmt_'.$tp.'_6'},
                'point_'.$tp.'_7' => ${'point_'.$tp.'_7'},'cmt_'.$tp.'_7' => ${'cmt_'.$tp.'_7'}
                ));
        } else {
            $tp = 'TTL';
            \DB::table('reportdetail')->where('StudentID',$studentId )->update(
              array(
                'point_'.$tp.'_1' => ${'point_'.$tp.'_1'},'cmt_'.$tp.'_1' => ${'cmt_'.$tp.'_1'},
                'point_'.$tp.'_2' => ${'point_'.$tp.'_2'},'cmt_'.$tp.'_2' => ${'cmt_'.$tp.'_2'},
                'point_'.$tp.'_3' => ${'point_'.$tp.'_3'},'cmt_'.$tp.'_3' => ${'cmt_'.$tp.'_3'},
                'point_'.$tp.'_4' => ${'point_'.$tp.'_4'},'cmt_'.$tp.'_4' => ${'cmt_'.$tp.'_4'},
                'point_'.$tp.'_5' => ${'point_'.$tp.'_5'},'cmt_'.$tp.'_5' => ${'cmt_'.$tp.'_5'},
                'point_'.$tp.'_6' => ${'point_'.$tp.'_6'},'cmt_'.$tp.'_6' => ${'cmt_'.$tp.'_6'},
                'point_'.$tp.'_7' => ${'point_'.$tp.'_7'},'cmt_'.$tp.'_7' => ${'cmt_'.$tp.'_7'}
                ));
        }
        $tp = 'WHBF';
        \DB::table('reportdetail')->where('StudentID',$studentId )->update(
          array(
            'point_'.$tp.'_1' => ${'point_'.$tp.'_1'},'cmt_'.$tp.'_1' => ${'cmt_'.$tp.'_1'},
            'point_'.$tp.'_2' => ${'point_'.$tp.'_2'},'cmt_'.$tp.'_2' => ${'cmt_'.$tp.'_2'},
            'point_'.$tp.'_3' => ${'point_'.$tp.'_3'},'cmt_'.$tp.'_3' => ${'cmt_'.$tp.'_3'},
            'point_'.$tp.'_4' => ${'point_'.$tp.'_4'},'cmt_'.$tp.'_4' => ${'cmt_'.$tp.'_4'},
            'point_'.$tp.'_5' => ${'point_'.$tp.'_5'},'cmt_'.$tp.'_5' => ${'cmt_'.$tp.'_5'},
            'point_'.$tp.'_6' => ${'point_'.$tp.'_6'},'cmt_'.$tp.'_6' => ${'cmt_'.$tp.'_6'}
            ));

        $student = \DB::table('student')->where('id',$studentId )->first();
        $report = \DB::table('reportdetail')->where('StudentID',$studentId )->first();

        return view('comp-instructor-mark-2', [
            'studentId' => $studentId,
            'student'=>$student,
            'report' => $report
            ]);
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
