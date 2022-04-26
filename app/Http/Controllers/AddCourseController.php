<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicationdetail;
use App\Models\Academicdetail;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;

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
        $userid=User::all();
        $Applicationdetail=Applicationdetail::all();   
        return view('addcourse.add_course',compact('Applicationdetail','userid'));
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
        $add=new Applicationdetail;
        $add->userid=\Auth::user()->id;
        $add->course=$request->course;
        $add->specialization=$request->specialization;
        $add->applicationstatus=0;
        $add->save();
        

        $addd=new Academicdetail;
        $addd->userid=\Auth::user()->id;
        $addd->leavingcertificate=$request->leavingcertificate;
        $addd->aadharcard=$request->aadharcard;
        $addd->marksheet10=$request->marksheet10;
        $addd->marksheetd2d=$request->marksheetd2d;
        $addd->marksheet12=$request->marksheet12;
        $addd->marksheetgraduation=$request->marksheetgraduation;
        $addd->save();
        

        $user = User::find(Auth::user()->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'city' => $request->city,
            'state' => $request->state,
            'fathername'=>$request->fathername,
            'gender'=>$request->gender,
            'dateofbirth'=>$request->dateofbirth,
            'address'=>$request->address,
            'pincode'=>$request->pincode,
            'fathermobile'=>$request->fathermobile   
        ]);

        // $add=new Academicdetail;

        // $user->create([
        //     'marksheetgraduation'=>$request->marksheetgraduation,
        //     'leavingcertificate'=>$request->leavingcertificate,
        //     'aadharcard'=>$request->aadharcard,
        //     'marksheet10'=>$request->marksheet10,
        //     'marksheetd2d'=>$request->marksheetd2d,
        //     'marksheet12'=>$request->marksheet12,
        // ]);

        //$fileName = time().'.'.$request->file->extension();  
   
        //$request->file->move(public_path('uploads'), $fileName);
   
        //   ->with('file',$fileName);

        $request->validate([
            'course'=>'required',
            'specialization'=>'required',
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'city'=>'required',
            'state'=>'required',
            'course'=>'required',
            'specialization'=>'required',
            'institute'=>'required',
            'fathername'=>'required',
            'gender'=>'required',
            'dateofbirth'=>'required',
            'address'=>'required',
            'pincode'=>'required',
            'fathermobile'=>'required',
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
