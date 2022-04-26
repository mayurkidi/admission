<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicationdetail;
use App\Models\Academicdetail;
use App\Models\User;
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid = User::all();
        $Applicationdetail = Applicationdetail::all();
        return view('addcourse.add_course', compact('Applicationdetail', 'userid'));
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
        $add->applicationstatus = 0;
        $add->save();

        // $dirname=File::makeDirectory('uploads'.public_path( Auth::user()->id.'_'.$request->name));
        if ($request->hasFile('leavingcertificate')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('leavingcertificate')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('leavingcertificate')->getClientOriginalExtension();
            // Filename to store
            $lc = Auth::user()->id . '_' . $request->name . '_' . 'Leaving_certificate' .'.' . $extension;          
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
            $aadharcard = Auth::user()->id . '_' . $request->name . '_' . 'Aadharcard' .'.' . $extension;
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
            $marksheet10 = Auth::user()->id . '_' . $request->name . '_' . 'Marksheet_10th' .'.' . $extension;
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
            $marksheet12 = Auth::user()->id . '_' . $request->name . '_' . 'Marksheet_12th' .'.' . $extension;
            // Upload Image
            $request->file('marksheet12')->move(public_path('uploads'), $marksheet12);

            
        }

        if ($request->hasFile('marksheetd2d')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheetd2d')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheetd2d')->getClientOriginalExtension();
            // Filename to store
            $marksheetd2d = Auth::user()->id . '_' . $request->name . '_' . 'Marksheet_D2D' .'.' . $extension;
            // Upload Image
            $request->file('marksheetd2d')->move(public_path('uploads'), $marksheetd2d);

           
        }

        if ($request->hasFile('marksheetgraduation')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('marksheetgraduation')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('marksheetgraduation')->getClientOriginalExtension();
            // Filename to store
            $marksheetgraduation = Auth::user()->id . '_' . $request->name . '_' . 'Marksheet_Graduation' .'.' . $extension;
            // Upload Image
            $request->file('marksheetgraduation')->move(public_path('uploads'), $marksheetgraduation);
  
        }  
        $addd = new Academicdetail;
        $addd->userid = \Auth::user()->id;
        $addd->leavingcertificate = $lc;
        $addd->aadharcard = $aadharcard;
        $addd->marksheet10 = $marksheet10;
        $addd->marksheet12 = $marksheet12;
        $addd->marksheetd2d = $marksheetd2d;
        $addd->marksheetgraduation = $marksheetgraduation;
        $addd->save();
        
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
