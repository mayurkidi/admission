<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicationdetail;
use App\Models\Academicdetail;
use App\Models\Payments;
use App\Models\User;
use App\Models\City;
use App\Models\Course;
use App\Models\Program;
use App\Models\Result;
use App\Models\State;
use Illuminate\Console\Application;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\isEmpty;

class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teststatus = Result::where('userid', \Auth::user()->id)->pluck('totalscore');
        $userid = User::all();
        $Applicationdetail = Applicationdetail::all();
        $states = State::all()->pluck('id', 'name');
        $cities = City::all()->pluck('id', 'name');
        $courses = Course::all()->pluck('id', 'name');
        $programs = Program::all()->pluck('id', 'name',);
        $application = Applicationdetail::select('*')->where('userid', \Auth::user()->id)->get();
        $academic = Academicdetail::select('*')->where('userid', \Auth::user()->id)->get();
        $user = User::select('*')->where('id', \Auth::user()->id)->get();
        $paymentstatus = Payments::where('user_id', \Auth::user()->id)->pluck('paymentstatus');
        $graduationtype = Applicationdetail::where('userid', \Auth::user()->id)->pluck('graduationtype');

        $applicationstatus = Applicationdetail::where('userid', \Auth::user()->id)->pluck('applicationstatus');
        if (!$paymentstatus->isEmpty()) {
            if ($paymentstatus[0] == 1) {
                //  return compact('user','application','academic');  
                // return compact('application', 'academic', 'user', 'paymentstatus', 'teststatus');
                return view('addcourse.application1', compact('application', 'academic', 'user', 'paymentstatus', 'teststatus','graduationtype'));
                // return redirect()->route('application1')->with(compact(['application'=>$application],['academic'=>$academic],['user'=>$user]));
            }
        }
        // if (!$applicationstatus->isEmpty()) {
        //     if ($applicationstatus[0] == 1 && $request->get('id') != 4) {
        //         //  return compact('user','application','academic');  
        //         return view('addcourse.application1', compact('application', 'academic', 'user', 'paymentstatus'));
        //         // return redirect()->route('application1')->with(compact(['application'=>$application],['academic'=>$academic],['user'=>$user]));
        //     }
        // }

        // return $application;
        return view('addcourse.add_course', compact('application', 'academic', 'user', 'programs', 'courses', 'cities', 'states', 'paymentstatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $graduationtype = $request->get('id');
        if ($graduationtype == 1)
            $graduationtype = "UG";
        if ($graduationtype == 2)
            $graduationtype = "PG";
        if ($graduationtype == 3)
            $graduationtype = "DIPLOMA";
        // return "hello";
        info($request->all());
        // dd(\Auth::check());
        $application_status = Applicationdetail::where('userid', \Auth::user()->id)->pluck('applicationstatus');
        if ($application_status->isEmpty() == false) {
            if ($application_status[0] == 1) {
                // $application_update = Applicationdetail::find(Auth::user()->id);
                $application_update = Applicationdetail::select("*")->where('userid', \Auth::user()->id)->get();
                $application_update[0]->update([
                    'userid' => \Auth::user()->id,
                    'course' => $request->course,
                    'specialization' => $request->specialization,
                    'graduationtype' => $graduationtype,
                    'applicationstatus' => 1
                ]);
            }
        } else {
            $add = new Applicationdetail;
            $add->userid = \Auth::user()->id;
            $add->course = $request->course;
            $add->specialization = $request->specialization;
            $add->graduationtype = $graduationtype;
            $add->applicationstatus = 1;
            $add->save();
        }

        $lc = null;
        $aadharcard = null;
        $marksheet10 = null;
        $marksheet12 = null;
        $marksheetdiploma = null;
        $marksheetgraduation = null;

        // $dirname=File::makeDirectory('uploads'.public_path( Auth::user()->id.'_'.$request->name));
        if ($request->hasFile('leavingcertificate')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('leavingcertificate')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('leavingcertificate')->getClientOriginalExtension();
            // Filename to store
            $lc = 'uploads/'.Auth::user()->email.'_' . Auth::user()->id . '/' . $request->name . '_' . 'Leaving_certificate' . '.' . $extension;
            // Upload Image
            $request->file('leavingcertificate')->storeAs('public/', $lc);
        }

        if ($request->hasFile('aadharcard')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('aadharcard')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('aadharcard')->getClientOriginalExtension();
            // Filename to store
            $aadharcard = 'uploads/'.Auth::user()->email.'_' . Auth::user()->id . '/' . $request->name . '_' . 'Aadharcard' . '.' . $extension;
            // Upload Image
            $request->file('aadharcard')->storeAs('public/', $aadharcard);
        }

        if ($request->hasFile('marksheet10')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheet10')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheet10')->getClientOriginalExtension();
            // Filename to store
            $marksheet10 = 'uploads/'.Auth::user()->email.'_' . Auth::user()->id . '/' . $request->name . '_' . 'Marksheet_10th' . '.' . $extension;
            // Upload Image
            $request->file('marksheet10')->storeAs('public/', $marksheet10);
        }

        if ($request->hasFile('marksheet12')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheet12')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheet12')->getClientOriginalExtension();
            // Filename to store
            $marksheet12 = 'uploads/'.Auth::user()->email.'_' . Auth::user()->id . '/' . $request->name . '_' . 'Marksheet_12th' . '.' . $extension;
            // Upload Image
            $request->file('marksheet12')->storeAs('public/', $marksheet12);
        }

        if ($request->hasFile('marksheetdiploma')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheetdiploma')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheetdiploma')->getClientOriginalExtension();
            // Filename to store
            $marksheetdiploma = 'uploads/'.Auth::user()->email.'_' . Auth::user()->id . '/' . $request->name . '_' . 'Marksheet_Diploma' . '.' . $extension;
            // Upload Image
            $request->file('marksheetdiploma')->storeAs('public/', $lc);
        }

        if ($request->hasFile('marksheetgraduation')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheetgraduation')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheetgraduation')->getClientOriginalExtension();
            // Filename to store
            $marksheetgraduation = 'uploads/'.Auth::user()->email.'_' . Auth::user()->id . '/' . $request->name . '_' . 'Marksheet_Graduation' . '.' . $extension;
            // Upload Image
            $request->file('marksheetgraduation')->storeAs('public/', $marksheetgraduation);
        }
        $payment = null;
        if ($request->hasFile('payment')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('payment')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('payment')->getClientOriginalExtension();
            // Filename to store
            $payment = 'uploads/'.Auth::user()->email.'_' . Auth::user()->id . '/' . $request->name . '_' . 'PaymentSS' . '.' . $extension;
            // Upload Image
            $request->file('payment')->storeAs('public/', $payment);
        }
        $academic_update = Academicdetail::select('*')->where('userid', \Auth::user()->id)->get();

        if ($application_status->isEmpty() == false) {
            if ($application_status[0] == 1) {
                if ($lc == null && $academic_update[0]->leavingcertificate != null)
                    $lc = $academic_update[0]->leavingcertificate;

                if ($aadharcard == null && $academic_update[0]->aadharcard != null)
                    $aadharcard = $academic_update[0]->aadharcard;

                if ($marksheet10 == null && $academic_update[0]->marksheet10 != null)
                    $marksheet10 = $academic_update[0]->marksheet10;

                if ($marksheet12 == null && $academic_update[0]->marksheet12 != null)
                    $marksheet12 = $academic_update[0]->marksheet12;

                if ($marksheetdiploma == null && $academic_update[0]->marksheetdiploma != null)
                    $marksheetdiploma = $academic_update[0]->marksheetdiploma;

                if ($marksheetgraduation == null && $academic_update[0]->marksheetgraduation != null)
                    $marksheetgraduation = $academic_update[0]->marksheetgraduation;
                $academic_update[0]->update([
                    'leavingcertificate' => $lc,
                    'aadharcard' => $aadharcard,
                    'marksheet10' => $marksheet10,
                    'marksheet12' => $marksheet12,
                    'marksheetdiploma' => $marksheetdiploma,
                    'marksheetgraduation' => $marksheetgraduation
                ]);
            }
        } else {
            $addd = new Academicdetail;
            $addd->userid = \Auth::user()->id;
            $addd->leavingcertificate = $lc;
            $addd->aadharcard = $aadharcard;
            $addd->marksheet10 = $marksheet10;
            $addd->marksheet12 = $marksheet12;
            $addd->marksheetdiploma = $marksheetdiploma;
            $addd->marksheetgraduation = $marksheetgraduation;
            $addd->save();
        }
        if ($payment != null) {
            $paymentt = new Payments;
            $paymentt->user_id = \Auth::user()->id;
            $paymentt->amount = 1500;
            $paymentt->paymentstatus = 1;
            $paymentt->paymentproof = $payment;
            $paymentt->save();
        }
        $user = User::find(Auth::user()->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'city' => $request->city,
            'state' => $request->state,
            'fathername' => $request->fathername,
            'gender' => $request->gender,
            'dateofbirth' => $request->dateofbirth,
            'address' => $request->address,
            'pincode' => $request->pincode,
            'fathermobile' => $request->fathermobile,
            'specialization' => $request->specialization,
            'course' => $request->course
        ]);

        $request->validate([
            'course' => 'required',
            'specialization' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'city' => 'required',
            'state' => 'required',
            'course' => 'required',
            'specialization' => 'required',
            'institute' => 'required',
            'fathername' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'fathermobile' => 'required',
        ]);
        return view('dashboard');
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
