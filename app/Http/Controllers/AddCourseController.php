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
use App\Models\State;
use Illuminate\Console\Application;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = User::all();
        $Applicationdetail = Applicationdetail::all();
        $states = State::all()->pluck('id', 'name');
        $cities = City::all();
        $courses = Course::all()->pluck('id', 'name');
        $programs = Program::all()->pluck('id', 'name', 'course_id');
        $paymentstatus = Payments::where('user_id', \Auth::user()->id)->pluck('paymentstatus');
        if (!$paymentstatus->isEmpty()) {
            if ($paymentstatus[0] == 1) {
                $application = Applicationdetail::all()->where('userid', \Auth::user()->id);
                $academic = Academicdetail::all()->where('userid', \Auth::user()->id);
                $user = User::all()->where('id', \Auth::user()->id);
                //  return gettype(compact('user','application','academic'));  
                return view('addcourse.application1',compact('application', 'academic', 'user'));
                // return redirect()->route('application1')->with(compact(['application'=>$application],['academic'=>$academic],['user'=>$user]));

            }
        }
        return view('addcourse.add_course', compact('Applicationdetail', 'userid', 'cities', 'states', 'programs', 'courses'));
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
        info($request->all());
        // dd(\Auth::check());
        $add = new Applicationdetail;
        $add->userid = \Auth::user()->id;
        $add->course = $request->course;
        $add->specialization = $request->specialization;
        $add->applicationstatus = 1;
        $add->save();


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
            $lc = 'uploads/' . Auth::user()->id . '_' . $request->name . '_' . 'Leaving_certificate' . '.' . $extension;
            // Upload Image
            $request->file('leavingcertificate')->move(public_path('uploads'), $lc);
        }

        if ($request->hasFile('aadharcard')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('aadharcard')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('aadharcard')->getClientOriginalExtension();
            // Filename to store
            $aadharcard = 'uploads/' . Auth::user()->id . '_' . $request->name . '_' . 'Aadharcard' . '.' . $extension;
            // Upload Image
            $request->file('aadharcard')->move(public_path('uploads'), $aadharcard);
        }

        if ($request->hasFile('marksheet10')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheet10')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheet10')->getClientOriginalExtension();
            // Filename to store
            $marksheet10 = 'uploads/' . Auth::user()->id . '_' . $request->name . '_' . 'Marksheet_10th' . '.' . $extension;
            // Upload Image
            $request->file('marksheet10')->move(public_path('uploads'), $marksheet10);
        }

        if ($request->hasFile('marksheet12')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheet12')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheet12')->getClientOriginalExtension();
            // Filename to store
            $marksheet12 = 'uploads/' . Auth::user()->id . '_' . $request->name . '_' . 'Marksheet_12th' . '.' . $extension;
            // Upload Image
            $request->file('marksheet12')->move(public_path('uploads'), $marksheet12);
        }

        if ($request->hasFile('marksheetdiploma')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheetdiploma')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheetdiploma')->getClientOriginalExtension();
            // Filename to store
            $marksheetdiploma = 'uploads/' . Auth::user()->id . '_' . $request->name . '_' . 'Marksheet_Diploma' . '.' . $extension;
            // Upload Image
            $request->file('marksheetdiploma')->move(public_path('uploads'), $marksheetdiploma);
        }

        if ($request->hasFile('marksheetgraduation')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheetgraduation')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheetgraduation')->getClientOriginalExtension();
            // Filename to store
            $marksheetgraduation = 'uploads/' . Auth::user()->id . '_' . $request->name . '_' . 'Marksheet_Graduation' . '.' . $extension;
            // Upload Image
            $request->file('marksheetgraduation')->move(public_path('uploads'), $marksheetgraduation);
        }

        if ($request->hasFile('payment')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('payment')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('payment')->getClientOriginalExtension();
            // Filename to store
            $payment = 'uploads/' . Auth::user()->id . '_' . $request->name . '_' . 'PaymentSS' . '.' . $extension;
            // Upload Image
            $request->file('payment')->move(public_path('uploads'), $payment);
        }

        $addd = new Academicdetail;
        $addd->userid = \Auth::user()->id;
        $addd->leavingcertificate = $lc;
        $addd->aadharcard = $aadharcard;
        $addd->marksheet10 = $marksheet10;
        $addd->marksheet12 = $marksheet12;
        $addd->marksheetdiploma = $marksheetdiploma;
        $addd->marksheetgraduation = $marksheetgraduation;
        $addd->save();

        $paymentt = new Payments;
        $paymentt->user_id = \Auth::user()->id;
        $paymentt->amount = 1500;
        $paymentt->paymentstatus = 1;
        $paymentt->paymentproof = $payment;
        $paymentt->save();

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
            'fathermobile' => $request->fathermobile
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
