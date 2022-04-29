<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\City;
use App\Models\Course;
use Illuminate\Http\Request;

class ApiController extends Controller{

    public function getCityList(Request $request){
        $cities = City::select('id', 'name')->where("state_id", $request->state_id)->get();
        return response()->json($cities);
    }
    public function getCourseList(Request $request){
        $courses = Course::select('id', 'name')->where("program_id", $request->course_id)->get();
        return response()->json($courses);
    }
}
