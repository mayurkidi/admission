<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
use App\Models\User;
use App\Models\Academicdetail;
use App\Models\Applicationdetail;
use Faker\Provider\ar_SA\Payment;
use Illuminate\Support\Facades\Auth;

use Session;

use function PHPSTORM_META\type;
use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function dashboard()
    {
        $is_register = Session::get('is_register');

        if ($is_register == '1' || $is_register == 1) {
            Session::put('is_register', null);
            \Auth::logout();
            $states = State::all()->pluck('id', 'name');
            $cities = City::all()->pluck('id', 'name', 'state_id');
            return redirect()->route('login')->with(compact(['states'=>$states]));
        }
        $userid = User::all();
        $paymentstatus = Payments::where('user_id', \Auth::user()->id)->pluck('paymentstatus');
        if (!$paymentstatus->isEmpty()) {
            if ($paymentstatus[0] == 1) {
                $application = Applicationdetail::all()->where('userid', \Auth::user()->id);
                $academic = Academicdetail::all()->where('userid', \Auth::user()->id);
                $user = User::all()->where('id', \Auth::user()->id);
                //  return gettype(compact('user','application','academic'));  
                return view('addcourse.application1',compact('application', 'academic', 'user'));
            }
        }
        return view('dashboard');
    }
}
