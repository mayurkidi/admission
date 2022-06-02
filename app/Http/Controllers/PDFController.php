<?php

namespace App\Http\Controllers;

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
        $paymentdate = Payments::where('user_id', $request->app_id)->pluck('created_at');
        $course = Course::where('id', $user[0]->specialization)->pluck('name');
        $d=$paymentdate[0]->addDays(3);
        $date=date_format($d,"d/m/Y");
        
        
        #date has value added with 3 days and assigning it to paymentdate again
        $paymentdate[0]=$date;

        $nametostore=$user[0]->id."_".$user[0]->email.".pdf";
        $pdf=PDF::loadView('admitcard',compact('user','paymentdate','course'));
        return $pdf->download($nametostore);
        //  return view('admitcard', compact('user', 'paymentdate', 'course'));
    }
}
