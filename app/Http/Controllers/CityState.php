<?php

namespace App\Http\Controllers;
use App\Models\{State, City};


use Illuminate\Http\Request;

class CityState extends Controller
{
    //
    public function fetchState(Request $request)
    {
        $data['states'] = State::all()->pluck('id','name');
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where('state_id',request->state_id)->pluck('name');
        return response()->json($data);
    }
}
