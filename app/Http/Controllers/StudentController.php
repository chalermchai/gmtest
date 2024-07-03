<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;

class StudentController extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        
    }

    public function index()
    {
        return $this->lists();
    }

    public function lists()
    {
        $score_list = DB::table('score')->get();

        if(count($score_list) > 0)
        {
            foreach($score_list as $score_detail)
            {
                $score_detail->_grade = $this->grade($score_detail->Score);
            }
        }

        // print_r($score_list);
        // exit;

        return View::make('student', array(
            'score_list' => $score_list
        ));
    }

    public function grade($score)
    {
        $grade = 'E';

        if($score >= 90)
        {
            $grade = 'A';
        }
        else if($score >= 80 and $score <= 89)
        {
            $grade = 'B';
        }
        else if($score >= 70 and $score <= 79)
        {
            $grade = 'C';
        }
        else if($score >= 60 and $score <= 69)
        {
            $grade = 'D';
        }

        return $grade;
    }
}
