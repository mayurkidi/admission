<?php

namespace App\Http\Controllers;


use App\Models\Result;
use App\Models\Payments;
use App\Models\Applicationdetail;
use Illuminate\Console\Application;
use Illuminate\Http\Request;


class QuizController extends Controller
{
    public function index()
    {
        
        $teststatus = Applicationdetail::where('userid', \Auth::user()->id)->pluck('testresult');
        $isapproved = Applicationdetail::where('userid', \Auth::user()->id)->pluck('isapproved');
        // return $isapproved;
        return view('test',compact('teststatus','isapproved'));
  
    }



    public function save_quiz(Request $request)
    {
        // return "Hello";
        Applicationdetail::where('userid',\Auth::user()->id)->update(["testresult" => $request->score]);
        return redirect('dashboard');

        // return view('dashboard',compact('paymentstatus','graduationtype'))->with("successmsg","Quiz Submiteed.");
    }
}
