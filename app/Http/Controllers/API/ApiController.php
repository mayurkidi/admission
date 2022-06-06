<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Applicationdetail;
use App\Models\State;
use App\Models\City;
use App\Models\Course;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use League\CommonMark\Extension\Embed\Embed;

class ApiController extends Controller
{

    public function getCityList(Request $request)
    {
        $cities = City::select('id', 'name')->where("state_id", $request->state_id)->get();
        return response()->json($cities);
    }
    public function getCourseList(Request $request)
    {
        if ($request->login == 1) {
            $courses = Course::select('id', 'name')->where("program_id", $request->course_id)->get();
        } else {
            if ($request->_id == 2) {
                $type = "PG";
                $_type = "";
            } else if ($request->_id == 3) {
                $type = "UG-D";
                $_type = "";
            } 
            else
            if ($request->course_id == 4) {
                $type = "UG";
                $_type = "";
            } else {
                $type = "UG";
                $_type = "";
            }
            $courses = Course::select('id', 'name')->where("program_id", $request->course_id)->where("graduationtype", $type)->orwhere("graduationtype", $_type)->get();
        }
        return response()->json($courses);
    }
    public function isApproved(Request $request)
    {
        Applicationdetail::where('userid', $request->id)->update(["isapproved" => 1]);
        $username = User::where('id',$request->id)->pluck('name');
        $email = User::where('id',$request->id)->pluck('email');
        $courseid=Applicationdetail::where('userid',$request->id)->pluck('course');
        $id=Applicationdetail::where('userid',$request->id)->pluck('id');
        $programid=Applicationdetail::where('userid',$request->id)->pluck('specialization');
        $course=Course::where('id',$courseid)->pluck('name');
        $program=Program::where('id',$programid)->pluck('name');
        $data = [
            'id'=>$id,
            'name' =>$username,
            'logo'=>public_path().'/logo.png',
            'course'=>$course,
            'program'=>$program,
        ];
        Mail::send('mail',$data,function($message)use($email){
            $message->to($email[0])->subject('Your application is approved');
            $message->from('mayursbank@gmail.com',"RK University");
        });
        return redirect('dashboard');
    }
    public function UploadOC(Request $request)
    {
        $offerletter = null;
        if ($request->hasFile('offerletter')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('offerletter')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('offerletter')->getClientOriginalExtension();
            // Filename to store
            $offerletter = 'uploads/' . '' . $request->id . '/' . '' . 'OfferLetter' . '.' . $extension;
            // Upload Image
            $request->file('offerletter')->storeAs('public/', $offerletter);
        }

        Applicationdetail::where('userid', $request->id)->update(["offerletter" => $offerletter]);
        return redirect('dashboard');
    }
}
