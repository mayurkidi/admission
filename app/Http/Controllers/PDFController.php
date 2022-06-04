<?php

namespace App\Http\Controllers;

use App\Models\Applicationdetail;
use App\Models\Course;
use App\Models\User;
use App\Models\Payments;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Carbon;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $user = User::select('*')->where('id', $request->app_id)->get();
        $testdate = Applicationdetail::where('userid', $request->app_id)->pluck('updated_at');
        $course = Course::where('id', $user[0]->specialization)->pluck('name');
        $d=$testdate[0]->addDays(0);
        $date=date_format($d,"d/m/Y");
        // return $date;       
        
        #date has value added with 3 days and assigning it to paymentdate again
        $paymentdate[0]=$date;

        $nametostore=$user[0]->id."_".$user[0]->email.".pdf";
        $pdf=PDF::loadView('admitcard',compact('user','paymentdate','course'));
        return $pdf->download($nametostore);
        //  return view('admitcard', compact('user', 'paymentdate', 'course'));
    }
}
