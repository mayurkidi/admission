<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Applicationdetail;
use App\Models\State;
use App\Models\City;
use App\Models\Course;
use Illuminate\Http\Request;

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
