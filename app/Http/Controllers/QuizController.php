<?php

namespace App\Http\Controllers;


use App\Models\Result;
use App\Models\Payments;
use App\Models\Applicationdetail;
use Illuminate\Http\Request;


class QuizController extends Controller
{
    public function index()
    {
        
        $testresult = Result::where('userid', \Auth::user()->id)->pluck('totalscore');
        // return gettype($testresult);
        return view('test',compact('testresult'));
  
    }



    public function save_quiz(Request $request)
    {
        // return "Hello";
        $add = new Result();
        $add->userid = \Auth::user()->id;
        $add->totalscore = $request->score;
        $add->save();
        $paymentstatus = Payments::where('user_id', \Auth::user()->id)->pluck('paymentstatus');
        $graduationtype = Applicationdetail::where('userid', \Auth::user()->id)->pluck('graduationtype');

        return view('dashboard',compact('paymentstatus','graduationtype'))->with("successmsg","Quiz Submiteed.");
        // return view('dashboard');
    }
}
