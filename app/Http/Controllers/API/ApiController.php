<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class ApiController extends Controller{

    public function getCityList(Request $request){
        $cities = City::select('id', 'name')->where("state_id", $request->state_id)->get();
        return response()->json($cities);
    }
}
